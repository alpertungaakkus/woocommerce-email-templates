<?php

class MaConfig extends MaSingleton{
    private $_appConfig = array();
    private $_slug;
    
    private $_templateCount = 10;
    private $_replaceVars = array();
    public function init(){
        
        $this->_appConfig= include MA_INCLUDES . 'data.php';
        $this->_slug = sanitize_title(MA_PLUGIN_NAME);
    }
    
    public function __get($property) {
        $propName = "_" . $property;
        if(property_exists($this, $propName)){
            return $this->$propName;
        }else{
            return null;
        }
    }
    public function getEmailTypes(){
        $types = array();
        foreach ($this->_appConfig['emailTypes'] as $key => $value){
            $types[] = array(
                'key' => $key,
                'name' => $value['name'],
            );
        }
        return $types;
    }
    
    public function getEmailConfig($order){
        
        $config = unserialize(base64_decode(get_option($this->_slug  . '-order-' . $order)));
       
        if(file_exists(MA_ROOT . 'emails' . DS . 'order-' . $order .DS . 'config.php')){
            $defaultConfig = include MA_ROOT . 'emails' . DS . 'order-' . $order . DS .'config.php';
            foreach ($defaultConfig as $section => $value) {
                
                    foreach ($defaultConfig[$section] as $propKey => $prop){
                        $type = $defaultConfig[$section][$propKey]['type'];
                        $multipleEmails = isset($defaultConfig[$section][$propKey]['mutipleEmails']) ? true : false;
                        if(isset($config[$section][$propKey])){
                            $defaultConfig[$section][$propKey]['val'] = $config[$section][$propKey]['val'];
                            if($type === 'image'){
                                $defaultConfig[$section][$propKey]['default'] =  plugins_url('woocommerce-email-customizer-pro') . '/emails/order-' .  $order . '/' . $defaultConfig[$section][$propKey]['default'];
                            }
                        if(($type  === 'text'  || $type === 'textInput') && $multipleEmails){
                            $defaultConfig[$section][$propKey] = $config[$section][$propKey];
                        }
                            
                        }else{
                            
                            if($type === 'image'){
                                
                                $defaultConfig[$section][$propKey]['val'] =  plugins_url('woocommerce-email-customizer-pro') . '/emails/order-' .  $order . '/' . $defaultConfig[$section][$propKey]['default'];
                                $defaultConfig[$section][$propKey]['default'] =  plugins_url('woocommerce-email-customizer-pro') . '/emails/order-' .  $order . '/' . $defaultConfig[$section][$propKey]['default'];
                            }else{
                                if(($type  === 'text'  || $type === 'textInput') && $multipleEmails){
                              
                                    foreach ($this->_appConfig['emailTypes'] as $eType => $eValue){
                                        if($type === 'text'){
                                            $text = $type === 'text' ? $eValue['text'] : $eValue['title'];
                                            $defaultConfig[$section][$propKey][$eType] = array(
                                                'default' => $text,
                                                'val' => $text
                                            );
                                        }

                                    }
                                }else{
                                    $defaultConfig[$section][$propKey]['val'] = $defaultConfig[$section][$propKey]['default'];
                                }
                                
                            }
                            
                            
                        }
                        
                    }
                    
                
            }
            
         
        }
       
        
        return $defaultConfig;
    }
    public function initReplaceVars($vars, $templateKey){
        
        foreach ($vars as $section => $props){
            foreach ($props as $var => $value ){
                $path = $section . '.';
                $path.= $var;
                if($value['type'] != 'text' && $value['type'] != 'inputText'){
                    $path .='.val';
                    $this->_replaceVars[] = array(
                        'key' => $path,
                        'value' => $value['val']
                    );
                }else{
                    $path .= '.'  . $templateKey . '.val';
                    $this->_replaceVars[] = array(
                        'key' => $path,
                        'value' => $value[$templateKey]['val']
                    );
                }
                
            }
        }
        
    }
    
    
    
}

