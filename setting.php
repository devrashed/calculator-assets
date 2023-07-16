<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  setting page
 */

/**
 * 
 */
class Calsetting 
{
    
    function __construct()
    {
      add_action('admin_menu',  [ $this, 'settingpage' ]);
    }

function settingpage(){

  add_menu_page(
            __('ShortCode list','cal-assets'), //Page title
            __('Calculator Assest','cal-assets'), //Menu title
            'manage_options', //capability
            'my-setting', //menu_slug
            array($this, 'cal_setting_page'), //callback function
            'dashicons-admin-settings' //icon url
        );
    }
    
    // Displays the page content for the custom Toplevel menu
    function cal_setting_page() {
        echo "<h2>" . __( 'Calculator shortCode list', 'cal-assets' ) . "</h2>";

        echo "<div> GIC Calculator : [show_gic_calculator] </div></br>";

        echo "<div> Best High Interest Savings Accounts in Canada : [high_saving_accounts] </div></br>";

        echo "<div> Best Savings Accounts in Canada : [show_saving_accounts] </div></br>";

        echo "<div> Lifetime TFSA Contribution Room 2022 : [show_tfsa_contribution] </div></br>";

        echo "<div> ROI Calculator for Canadian Investments : [show_roi_calculator] </div></br>";
      
    }

}//End the class 