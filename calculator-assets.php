<?php
/**
 * Plugin Name: Calculator Assets
 * Description: Calculator Assets 
 * Plugin URI: https://wefin.ca/
 * Author: cansoft
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html 
 */

if ( ! defined('ABSPATH')) exit;  // if direct access 

require_once 'setting.php'; 
require_once 'Assestload.php'; 
require_once 'Roicalculator.php'; 
require_once 'calculator/gic-calculator/gic_calculator.php'; 
require_once 'calculator/savings-accounts/savings-accounts.php'; 
require_once 'calculator/High-interest-saving-accounts/High-interest-saving-accounts.php'; 
require_once 'calculator/TFSA-Contribution/tfsa-contribution.php'; 



final class calculatorassets
{

    const version = '1.0';

    function __construct()
    {
    $this->calculator_define_constants();

    register_activation_hook( CALCULATOR_ASSETS_FILE, [ $this, 'calculator_assets_activate' ] ); // plugin activation

    add_action( 'plugins_loaded', [ $this, 'calcular_assets_init_plugin' ] );  // load plugin

    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */ 
  
     public function calculator_define_constants() {
        define( 'CALCULATOR_ASSETS_VERSION', self::version );
        define( 'CALCULATOR_ASSETS_FILE', __FILE__ );
        define( 'CALCULATOR_ASSETS_PATH', __DIR__ );
        define( 'CALCULATOR_ASSETS_URL', plugin_dir_url( __FILE__  ) );
    }



     public function calcular_assets_init_plugin() {

       new Calsetting();     
       new Assestload();
       new gicCalculator();   //gicCalculator load
       new Savingcandaccount(); //saving account canada 
       new Highsavingaccount(); //high saving account
       new Tfsacontribution();  // tfsa contribution
       new roicalculator();     // Roi calcualtor 

     }


     /**
     * Plugin Activatoin Hook
     */  
     
    public function calculator_assets_activate() {

    $installed = get_option( 'calculator_installed' );

     if ( ! $installed ) {
        update_option( 'calculator_installed', time() );
    }

    update_option( 'calculator_assets_version', CALCULATOR_ASSETS_VERSION );
    } 
 }
    /**
     * Create a class instance
     */  

   new calculatorassets();