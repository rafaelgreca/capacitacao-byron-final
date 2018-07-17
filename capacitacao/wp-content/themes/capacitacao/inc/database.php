<?php

function capacitacao_database(){
    global $wpdb;
    global $capacitacao_db_version;

    $capacitacao_db_version = "1.0";

    //Cria uma nova tabela no banco de dados
    $table = $wpdb->prefix . 'formulario';

    $charset_collate = $wpdb->get_charset_collate();

    //Declara o SQL
    $sql = "CREATE TABLE $table (
      id mediumint(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      name varchar(70) NOT NULL,
      email varchar(50) DEFAULT '' NOT NULL,
      subject varchar(50) NOT NULL,
      message longtext NOT NULL,

    ) $charset_collate; ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('after_setup_theme', 'capacitacao_database');
