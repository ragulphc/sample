<?php 
 
 /**
    * Nextcare API Services Plugin 
    *
    * @package          NextcareAPIServicesPlugin
    * @author           Raghav 
    * @copyright        2021   
    * @license          GPL-2.0-or-later  
    * 
    * @wordpress-plugin
    * Plugin Name:      Nextcare API Services Plugin
    * Plugin URI:       https://nextcare.com/ 
    * Description:      This plugin adds the API Service functionality to nextcare site.
    * Version:          1.0.0  
    * Author:           LANETERRALEVER
    * Author URI:       https://nextcare1.com/ 
    * Text Domain:      nextcare 
    * License:          GPL v2 or later 
    * License URI:      http://www.gnu.org/licenses/gpl-2.0.txt  
    */ 
 

    /**
     * Plugin Version
    */
    if(!defined('nextcare_api_services_plugin_version')){
      define('nextcare_api_service_plugin_version', '1.0.0');
    } 
    

    /**
     * Plugin URL
    */
    if(!defined('nextcare_api_services_plugin_version')){
      define('nextcare_api_service_plugin_dir', plugin_dir_path(__FILE__));
    } 
  
    require_once nextcare_api_services_plugin_dir . 'EnvReader.php';
    
 
?>