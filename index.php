<?php
/*
Plugin Name: Woocommerce Email Customize
Plugin URI:  http://www.alpertungaakkus.con
Description: Custom Email Templates for Woocommerce
Version:     1.0.0
Author:      alpertungaakkus.com
Author URI:  http://www.alpertungaakkus.com
*/

define('MA_PLUGIN_PREFIX', "MA");
define('MA_PLUGIN_NAME', 'WCEC-PRO');
define('MA_DEVELOPER_MODE', true);
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

define('MA_ROOT', dirname(__FILE__) . DS);
define('MA_INCLUDES', MA_ROOT . DS . 'includes' . DS);
define('MA_VIEW_PATH',  MA_INCLUDES . 'views' . DS );
define("MA_ASSETS", plugins_url('woocommerce-email-customizer-pro') . '/assets/');
define('MA_IMAGES', MA_ASSETS . '/images/');

include_once MA_INCLUDES .'MaSinglton.php';
include_once MA_INCLUDES .'MaApplication.php';
include_once MA_INCLUDES .  'utils' .  DS . 'CaseInsensitiveArray.php';
include_once MA_INCLUDES .  'utils' .  DS . 'Curl.php';

include_once MA_INCLUDES . 'MaConfig.php';
include_once MA_INCLUDES . 'MaViewHelper.php';
include_once MA_INCLUDES . 'MaEmail.php';

class MaBootstrap{
    private $_app;
    public function init(){
        $this->_slug = sanitize_title(MA_PLUGIN_NAME);
        $this->_app = MaApplication::getInstance();
        $this->_app->init();
        $this->_app->getGoogleFonts();
        
        $this->hooks();
       
    }
    private function inlcudes(){
        
    }
    private function hooks(){
        
        add_action('init', array($this->_app, 'initAjax'));
        add_action('admin_menu', array($this, 'initAdminMenu'));
        add_action( 'adminNotices', array($this,'adminNotices') );
        add_action( 'admin_enqueue_scripts', array($this, 'enqueueScripts') );
    }
    private function isWoocommerceActive(){
        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            return true;
        }
        return false;
    }
    public function initAdminMenu(){
        
        add_menu_page(__(MA_PLUGIN_NAME), __(MA_PLUGIN_NAME), 'manage_options', $this->_slug, array($this, 'adminPage'), MA_IMAGES . 'icon.png');

    }
    public function adminPage(){
        $viewHelper = MaViewHelper::getInstance();
        $viewHelper->init();
        
    }
    public function adminNotices(){
        if(!$this->isWoocommerceActive()){
             ?>
            <div class="notice notice-error">
                <p><?php _e( 'Monsart Emails plugin depend on Woocommerce. Please download and activate woocommerce plugin.' ); ?></p>
            </div>
            <?php
        }
    }
    public function enqueueScripts($hook){
        $scripts = array(
            'app',
        );
        if($hook === 'toplevel_page_' . $this->_slug){
            wp_enqueue_script('jquery-ui');
            wp_enqueue_script('jquery-ui-accordion');
            wp_enqueue_script('jquery.nicescroll.min.js', MA_ASSETS . '/js/jquery.nicescroll.min.js', array('jquery'), null, true);
            wp_enqueue_script( MA_PLUGIN_PREFIX .  'main', MA_ASSETS . '/js/main.js', array('jquery'), null, true);
            
            
            wp_enqueue_style(MA_PLUGIN_PREFIX . 'style', MA_ASSETS . 'css/style.css');
            wp_enqueue_style(MA_PLUGIN_PREFIX . 'media', MA_ASSETS . 'css/media.css');
            
           
            if(isset($_GET['action']) && $_GET['action'] === 'customize'){
                //wp_enqueue_style(MA_PLUGIN_PREFIX . 'bootstrap', MA_ASSETS . 'css/bootstrap.min.css');
                
                wp_enqueue_style(MA_PLUGIN_PREFIX . 'select2', MA_ASSETS . 'css/select2.min.css');
                wp_enqueue_style(MA_PLUGIN_PREFIX . 'fa', MA_ASSETS . 'css/fa/css/font-awesome.min.css');
                
                
                wp_enqueue_style(MA_PLUGIN_PREFIX . 'vendors', MA_ASSETS . 'css/vendor.min.css');
                wp_enqueue_style(MA_PLUGIN_PREFIX . 'main', MA_ASSETS . 'css/main.css');
                
                /**
                 * Wp thickbox and media upload
                 */
                wp_enqueue_media();
                wp_enqueue_script('media-upload');
                wp_enqueue_script('thickbox');
                wp_enqueue_style('thickbox');
                /**
                 * Wordpress color picker
                 */
                wp_enqueue_style( 'wp-color-picker');
                wp_enqueue_script( 'wp-color-picker');
                
                wp_enqueue_script(MA_PLUGIN_PREFIX . 'vendor', MA_ASSETS . 'js/lib.min.js', array('jquery'), null, true);
                
                
                
                if(!MA_DEVELOPER_MODE){
                    wp_enqueue_script(MA_PLUGIN_PREFIX . 'app', MA_ASSETS . 'js/app.min.js', array('jquery'), null, true);
                }else{
                    foreach ($scripts as $script){
                        
                        wp_enqueue_script(MA_PLUGIN_PREFIX . $script, MA_ASSETS . 'js/app/' . $script . '.js', array(), null, true);
                    }
                }
            }
        }
    }
}

$emails = new MaBootstrap();
$emails->init();



