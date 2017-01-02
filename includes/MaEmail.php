<?php

class MaEmail {
    private $_config = null;
    private $_previewId;
    private $_order;
    private $_preview = false;
    private $_emailType = '';
    private $_parts = array(
            'header' => '',
            'style' => '',
            'body' => '',
            'footer' => '',
            'email-header' => '',
    );
    private $_folderPath = '';
    
    public function __construct($order, $preview = false) {
       
        $this->_preview = $preview;
        $this->_order = $order;
        $this->_config = MaConfig::getInstance();
        if($this->_preview){
            $this->_previewId = '#' . $this->_config->slug . ' .preview-container';
        }else{
            $this->_previewId = '';
        }
        
        $folder_path = MA_ROOT . 'emails' . DS . 'order-' . $this->_order;
        if(is_dir($folder_path)){
            $this->_folderPath  = $folder_path;
        }
        
    }
    public function getEmailPreview(){
        $this->_preview = true;
        return $this->_parts['style'] . $this->_parts['body'];
        
    }
    
    
    public function getPart($part){
       
        if(array_key_exists($part, $this->_parts) && empty($this->_parts[$part])){
             
            if(file_exists($this->_folderPath .DS . $part . '.php')){
                ob_start();
                 
                include $this->_folderPath .DS . $part . '.php';
                $this->_parts[$part] = ob_get_clean();
                return $this->_parts[$part];
            }
        }
        
        
        return $this->_parts[$part];
    }
    
    
    
    
    public function initParts(){
        foreach ($this->_parts as $key => $part){
            
            
            if(file_exists($this->_folderPath .DS . $key . '.php')){
                ob_start();
                
                include $this->_folderPath .DS . $key . '.php';
                $this->_parts[$key] = ob_get_clean();
            }
            
        }
        
        
        $this->_parts['header'] = str_replace('%styles%', $this->_parts['style'], $this->_parts['header']);
    }
    public function hideOnPreview($string){
        echo !$this->_previewId ? $string : '';
    }
    public function showOnlyOnPreview($string){
        if($this->_preview){
            echo $string;
        }
    }
    public function setEamilType($type){
        
        $this->_emailType = $type;
        
    }
    public function getEmailType(){
        return $this->_emailType;
    }
}