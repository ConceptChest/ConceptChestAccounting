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
    add_submenu_page( 'concept-account-main','Income', 'Income', 'manage_options', 'concept-account-income','concept_chest_accounting_income_menu_link'); 
    add_submenu_page( 'concept-account-main','Expense', 'Expense', 'manage_options', 'concept-account-expense','concept_chest_accounting_expense_menu_link'); 
    add_submenu_page( 'concept-account-main','Chart Of Account', 'Chart Of Account', 'manage_options', 'concept-account-coa','concept_chest_accounting_coa_menu_link'); 
    add_submenu_page( 'concept-account-main','Report', 'Report', 'manage_options', 'concept-account-report','concept_chest_accounting_report_menu_link'); 
}

function concept_chest_accounting_custom_menu_link(){
    include 'includes/ConceptChestAccountsPannel.php';
}
function concept_chest_accounting_income_menu_link(){
    include 'includes/ConceptChestIncomePannel.php';
}

function concept_chest_accounting_expense_menu_link(){
    include 'includes/ConceptChestExpensePannel.php';
}

function concept_chest_accounting_coa_menu_link(){
    include 'includes/ConceptChestCOAPannel.php';
}

function concept_chest_accounting_report_menu_link(){
    include 'includes/ConceptChestReportPannel.php';
}




/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-class-conceptchestaccounting-activator.php
 */
function activate_conceptchestaccounting() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-conceptchestaccounting-activator.php';
	Conceptchestaccounting_Activator::activate();
}


register_activation_hook( __FILE__, 'activate_conceptchestaccounting' );