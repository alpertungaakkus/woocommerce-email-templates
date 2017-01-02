<?php

class MaApplication extends MaSingleton{
    private $_activatedTemplate = 1;
    private $_sendingEmailKey = null;
    /**
     *
     * @var MaEmail 
     */
    private $_email = null;
    /**
     *
     * @var MaConfig 
     */
    private $_config = null;
    private $_nonce = null;
    private $_wcTemplatesToOveride = array(
        'customer-completed-order',
        'admin-new-order'
        
    );
    public function init(){
        add_filter('wc_get_template', array($this, 'checkTemplate'), 10, 5);
        //Plugin actions
        add_action('ma_email_header', array($this, 'getEmailHeader'), 10, 1);
        add_action('ma_email_head', array($this, 'emailHead'));
        add_action('ma_email_body', array($this, 'emailBody'));
        add_action('ma_email_foot', array($this, 'emailFooter'));
       
       
        $this->_config = MaConfig::getInstance();
        $this->_config->init();
        $email = new MaEmail($this->_activatedTemplate, false);
        $this->_email = $email;
        $this->_email->initParts();
        add_action('init', array($this, 'afterWpInit'));
        
        
        
    }
    public function setEmail(MaEmail $email){
        
        $this->_email = $email;
    }
    public function afterWpInit(){
        $this->_nonce  = wp_create_nonce('ma-ajax-nonce');
    }
    
    public function emailHead(){
        echo $this->replaceVars($this->_config->replaceVars, $this->_email->getPart('header'));
    }
    public function emailBody(){
         echo $this->replaceVars($this->_config->replaceVars, $this->_email->getPart('body'));
    }
    public function emailFooter(){
         echo $this->replaceVars($this->_config->replaceVars, $this->_email->getPart('footer'));
    }
    
    public function initAjax(){
       
        add_action( 'wp_ajax_ma_ajax_main', array($this, 'ajaxFrontController') );
        add_action( 'wp_ajax_ma_ajax_main', array ( $this, 'ajaxFrontController' ));
        
    }
     public function __get($property) {
        $propName = "_" . $property;
        if(property_exists($this, $propName)){
            return $this->$propName;
        }else{
            return null;
        }
    }
    
    public function saveConfig($data = null){
        if(is_null($data)){
            $data = $_REQUEST['data'];
            $data = json_decode(stripslashes($data), true);
            
            $resp = update_option(MaConfig::getInstance()->slug  . '-order-' . $_REQUEST['order'], base64_encode(serialize($data)));
           
            if(!$resp){
                return array(
                    'error' => true,
                    'message' => __("Can't save changes in database")
                );
            }
            return array(
                'error' => false,
                'message' => __("Your changes have been successfuly saved")
            );
        }
    }
    
    
    public function ajaxFrontController(){
        
        if(!check_ajax_referer('ma-ajax-nonce', 'nonce')){
            wp_die();
        }
        $func = $_REQUEST['func'];
        
        if(!empty($func) && method_exists($this, $func)) {
            echo json_encode($this->$func());
        }
        exit;
    }
    
    public function getGoogleFonts(){
        
        $curl = new Curl();
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->get('https://www.googleapis.com/webfonts/v1/webfonts', array(
            'key' => $this->_config->appConfig['google-api-key'],
        ));
        if(!$curl->error){
            return $curl->response;
        }else{
            return array(
                'error' => true,
                'message' => $curl->errorMessage
            );
        }
        
    }
    public function checkTemplate($located, $template_name, $args, $template_path, $default_path){
         
        $pathParts =  explode( '/', str_replace('.php', '', $template_name) );
        $supportedTypes = $this->_config->appConfig['emailTypes'];
        $emailKeys = array_keys($supportedTypes);
        
         
        if ( in_array( 'emails',$pathParts  ) && ! in_array( 'plain', explode( '/', $template_name ) ) ) {
            
            foreach ($emailKeys as $key){
                $dashedKey = str_replace('_', '-', $key);
                
                if(in_array($dashedKey, $pathParts)){
                    $this->_sendingEmailKey = $key;
                    break;
                }
            }
        }
       
        if(!is_null($this->_sendingEmailKey)){
            $this->_config = MaConfig::getInstance();
            
            $this->_email->setEamilType($this->_sendingEmailKey);
          
            
            $this->_config->initReplaceVars($this->_config->getEmailConfig($this->_activatedTemplate), $this->_sendingEmailKey);
            return MA_ROOT .  'emails' . DS . 'order-' . $this->_activatedTemplate . DS . 'main.php'; 
        }
        return $located;
           
    }
    
    public function getEmailHeader($emailType){
        
        $previewMode = isset($_GET['order']) && isset($_GET['page']) && $_GET['page'] === $this->_config->slug ? true : false;
        
        
        if($previewMode){
            foreach ($this->_config->appConfig['emailTypes']  as $key => $args){
                echo '<ng-show ng-show="currentType === \''.$key.'\'">';
                
                echo str_replace('%s%', $key, $this->_email->getPart('email-header'));
                echo "</ng-show>";
            }
        }else{
           
            echo str_replace('%s%', $this->_sendingEmailKey, $this->_email->getPart('email-header'));
        }
    }
    public function replaceVars($vars, $template){
        
        foreach ($vars as $var){
            $template = str_replace('{{'.$var['key'].'}}', $var['value'], $template);
        }
        return $template;
        
    }
}