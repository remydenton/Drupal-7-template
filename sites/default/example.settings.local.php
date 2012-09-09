<?php

/*
 *  Change the name of this file to 'settings.local.php' and use it to override settings that should only apply locally 
 * (most obviously, the database).  Note that settings.local.php will be excluded from version control.
 */

$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => 'template_d7',
      'username' => 'root',
      'password' => 'root',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);
