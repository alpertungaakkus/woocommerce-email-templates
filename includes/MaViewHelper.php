<?php

class MaViewHelper extends MaSingleton{
    private $_view;
    private $_config = null;
    private $_action = 'main';
    
    public function init(){
        
        $this->_config = MAConfig::getInstance();
        $this->_action = $this->_suntizeAction($_GET['action']);
        if($this->_action){
            
            if(file_exists(MA_VIEW_PATH . DS . $this->_action . '.php')){
                $this->_view = MA_VIEW_PATH . DS . $this->_action . '.php';
            }else{
                $this->_view  = MA_VIEW_PATH .  'templates.php';
            }
        }else{
            $this->_view  = MA_VIEW_PATH .  'templates.php';
        }
        
        $actionName = ($this->_action ) ? 'action' . ucfirst($this->_action)  : 'actionMain';
       
        if(method_exists($this, $actionName)){
            $this->$actionName();
        }
    }
    
    private function actionMain(){
        
        include $this->_view;
    }
   
    
    public function renderLayout(){
        include MA_VIEW_PATH . 'layout' . DS . 'main.php';
    }
    public function getViewPart($view, $params){
        if(file_exists($view)){
            ob_start();
            include $view;
            $content = ob_get_clean();
            foreach ($params as $key => $value){
                $content = str_replace('{{'.$key.'}}', $value, $content);
            }
            return $view;
        }
        return '';
    }
    private function _suntizeAction($action){
        return stripslashes(str_replace('.','', $action));
    }
    
    private function actionCustomize(){
        
        $order = (int)$_GET['order'];
        $email = new MaEmail($order, true);
        
        MaApplication::getInstance()->setEmail($email);
        
        $email->initParts();
        
        $panels  = $this->_config->getEmailConfig($order);
        
        $params = array(
            'preview' => $email->getEmailPreview(),
            'panels' => $panels,
            'jsGlobals' => $panels,
            'order' => $order,
            'types' => $this->_config->getEmailTypes()
        );
       
        $this->renderView(null, $params);
        
    }
    
    public function renderView($view, $params){
        extract($params);
        
        if(is_null($view)){
            include $this->_view;
        }
    }
    public function getProperTitle($title, $ucfirst = false){
        
        $parts = preg_split('/(?=[A-Z])/', $title, -1, PREG_SPLIT_NO_EMPTY);
        $parts[0] = ucfirst($parts[0]);
        return implode(' ', $parts);
    }
    
    public function excludeByUpperCase($text){
        return preg_split('/(?=[A-Z])/', $text, -1, PREG_SPLIT_NO_EMPTY);
    }
    
    
    
    
}