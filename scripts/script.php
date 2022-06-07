<?php

  add_action('wp_enqueue_scripts', 'customScripts');
  function customScripts() {
      wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
      wp_enqueue_style( 'style', plugins_url('../css/style.css',__FILE__) );
      wp_enqueue_script( 'circles', plugins_url('../js/cobertura.js',__FILE__), array( 'progres' ), '1.0', false );
      wp_enqueue_script( 'progres', plugins_url('../js/progressbar.min.js',__FILE__), array( 'jquery' ), '1.0', false );
  }  

?>