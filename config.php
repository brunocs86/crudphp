<?php
  require 'enviroment.php';

  global $config;
  $config = array();
  if (ENVIROMENT == 'development') {
    define("BASEURL", "http://localhost/crudphp/");
    $config['dbname'] = 'crudphp';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'SEUUSUARIO';
    $config['dbpass'] = 'SUASENHA';
  } else {
    define("BASEURL", "SITENOAR");
    $config['dbname'] = 'BANCONOAR';
    $config['host']   = 'CAMINHODOBANCONOAR';
    $config['dbuser'] = 'USUARIONOAR';
    $config['dbpass'] = 'SENHANOAR';
  }

 ?>
