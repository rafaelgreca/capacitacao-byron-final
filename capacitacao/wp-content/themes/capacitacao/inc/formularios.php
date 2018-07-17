<?php

function capacitacao_save_forms(){
    global $wpdb;

    if(isset($_POST['formulario']) && $_POST['hidden'] == "1"){
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_text_field($_POST['message']);

        $table = $wpdb->prefix . 'formulario';

        $data = array(
          'name' => $name,
          'email' => $email,
          'subject' => $subject,
          'message' => $message
        );

        $format = array(
          '%s',
          '%s',
          '%s',
          '%s'
        );

        $wpdb->insert($table, $data, $format);
    }
}

  add_action('init','capacitacao_save_forms');

?>
