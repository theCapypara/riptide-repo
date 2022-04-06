<?php
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'drupal',
  'username' => 'root',
  'password' => 'drupal',
  'host' => 'ddb',
  'prefix' => '',
);

if (file_exists("/src/riptide_project_settings.php")) {
    require_once "/src/riptide_project_settings.php";
}

$conf['reverse_proxy'] = TRUE;

// from http://devblog.more-onion.com/using-drupal-behind-reverse-proxy
if (
  isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' &&
  !empty($conf['reverse_proxy'])
) {
  $_SERVER['HTTPS'] = 'on';
  // This is hardcoded because there is no header specifying the original port.
  $_SERVER['SERVER_PORT'] = 443;
}
