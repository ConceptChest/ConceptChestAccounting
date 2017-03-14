<?php

class Conceptchestaccounting_Activator {

    public static function activate() {
        global $wpdb;

        $charset_collate = '';
        if ($wpdb->has_cap('collation')) {
            if (!empty($wpdb->charset)) {
                $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
            }
            if (!empty($wpdb->collate)) {
                $charset_collate .= " COLLATE $wpdb->collate";
            }
        }



        if (!current_user_can('activate_plugins'))
            return;

        $plugin = isset($_REQUEST['plugin']) ? $_REQUEST['plugin'] : '';
        check_admin_referer("activate-plugin_{$plugin}");

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        $table_expinc = $wpdb->prefix . 'conceptchestaccounting_accounts';

        $sql = " CREATE TABLE $table_expinc(
                 ACODE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                 TITLE VARCHAR(50) NULL,
                 LEVEL VARCHAR(1) NULL,
                 TYPE VARCHAR(1) NULL,
                 Address VARCHAR(100) NULL,
                 PH_NO VARCHAR(30) NULL,
                 FAX_NO VARCHAR(20) NULL,
                 MOB_NO VARCHAR(20) NULL,
                 EMAIL VARCHAR(50) NULL,
                 WEBSITE VARCHAR(50) NULL,
                 CATEGORY VARCHAR(30) NULL,
                 NTN VARCHAR(30) NULL,
                 STN VARCHAR(30) NULL,
                 CITY_CODE VARCHAR(20) NULL,
                 CITY_NAME VARCHAR(50) NULL,
                 AREA_CODE VARCHAR(20) NULL,
                 AREA_NAME VARCHAR(50) NULL,
                 DATE DATETIME NULL
                                            )	
                ";

        dbDelta($sql);


     
    }

}
