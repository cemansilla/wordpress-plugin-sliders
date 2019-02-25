<?php
if(!defined('ABSPATH')) exit;

function dm_sliders_options_page(){
  add_submenu_page(
    'edit.php?post_type=dm_sliders',
    'Info demo',
    'Info demo',
    'read',
    'dm_sliders_demo',
    'dm_sliders_options_page_html'
  );
}
add_action('admin_menu', 'dm_sliders_options_page');

function dm_sliders_options_page_html(){
  dm_sliders_load_bootstrap();
  ?>
  <div class="wrap">
    <h1>Carga de contenido de muestra</h1>
    <div class="alert alert-warning mt-2" role="alert">
      El siguiente proceso cargará contenido de muestra compuesto por 2 sliders de 3 items cada uno. <strong>No reemplazará nada que ya esté cargado.</strong><br>El borrado de los sliders deberá ser manual.
    </div>
  </div>
  <?php
}