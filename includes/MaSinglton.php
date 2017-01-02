<?php

abstract class MaSingleton {
    /**
     * @var Singlton 
     */
    protected static $_instances = array();
   
    protected function __construct() {}
    /**
     * 
     * @return static
     */
    final public static function getInstance() {
        $class = get_called_class();
        if (!isset(self::$_instances[$class])) {
            self::$_instances[$class] = new $class();
        }

        return self::$_instances[$class];
    }

    final private function __clone() {}

}
