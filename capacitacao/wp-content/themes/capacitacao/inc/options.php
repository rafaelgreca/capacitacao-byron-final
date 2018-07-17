<?php

function capacitacao_forms(){
    add_menu_page('Formularios', 'Formulario', 'administrator', 'capacitacao_forms',
    'capacitacao_formsdata', '', 10);
}

add_action('admin_menu', 'capacitacao_forms');

function capacitacao_formsdata(){ ?>
    <div class="wrap">
        <h1>Formulários</h1>
          <table class="wp-list-table widefat striped">
              <thead>
                  <tr>
                      <th class="manage-column">ID</th>
                      <th class="manage-column">NAME</th>
                      <th class="manage-column">EMAIL</th>
                      <th class="manage-column">SUBJECT</th>
                      <th class="manage-column">MESSAGE</th>
                  </tr>
              </thead>

              <tbody>
                <?php
                  global $wpdb;

                  $table = $wpdb->prefix . 'formulario';
                  $form = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);

                  foreach($form as $forms): ?>
                    <tr>
                        <td><?php echo $forms['id'] ?></td>
                        <td><?php echo $forms['name'] ?></td>
                        <td><?php echo $forms['email'] ?></td>
                        <td><?php echo $forms['subject'] ?></td>
                        <td><?php echo $forms['message'] ?></td>
                    </tr>


                  <?php endforeach; ?>
              </tbody>
          </table>
    </div>
<?php }

?>
