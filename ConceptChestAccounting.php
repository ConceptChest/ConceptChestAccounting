<?php
/*
Plugin Name: Concept Chest Accounting
Plugin URI: http://www.conceptchest.com
Description: Changing the way you manage your expences
Version: 1.0
Author: Concept Chest
Author URI: http://www.conceptchest.com
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  Please stop from what you are doing.';
	exit;
}

function concept_chest_accounting_dashboard_menu_style($hook) {
       
        wp_enqueue_style( 'custom_wp_admin_css', plugins_url('css/concept-chest-accounting-style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'concept_chest_accounting_dashboard_menu_style' );


add_action( 'admin_menu', 'concept_chest_account_register_custom_menu_link' );
function concept_chest_account_register_custom_menu_link(){
    add_menu_page( 'Concept Accounting', 'Concept Accounting', 'manage_options', 'concept-account-main','concept_chest_accounting_custom_menu_link',plugins_url('images/icon.png',__FILE__)); 
}

function concept_chest_accounting_custom_menu_link(){
    include 'includes/ConceptChestAccountsPannel.php';
}



