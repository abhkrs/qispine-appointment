<?php
define('SITE_NAME', 'QISPINE');
define('BASE_URL', 'http://localhost/qispine-appointment');

define('PAGE_URL', ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link preconnect href="https://fonts.cdnfonts.com/css/helvetica-neue-lt-pro-2" rel="stylesheet">              -->
<link rel="stylesheet" href="<?php echo BASE_URL ;?>/resources/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL ;?>/resources/style.css">