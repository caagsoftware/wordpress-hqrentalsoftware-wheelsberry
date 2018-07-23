<?php
/*
 * @package Wordpress HQ Rental Software
 * @version 1.2.0.0
 *
 *
Plugin Name:  HQ Rental Wheelsberry Theme Integration
Description:  HQ Rental Software
Version:      0.0.1
Author:       HQ Rental Software
Author URI:   https://www.hqrentalsoftware.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html
*/



require_once('modules/init.php');


/*
 * Activation Routine
 * @return void
 */
function hq_wheels_rental_activation()
{
}
register_activation_hook(__FILE__,'caag_hq_rental_activation');

/*
 * Deactivation Routine
 * @return void
 */
function hq_wheels_rental_deactivation()
{
    // Do nothing
}
register_deactivation_hook(__FILE__,'caag_hq_rental_deactivation');
