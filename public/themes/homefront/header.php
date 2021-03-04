<?php

Assets::add_css(array(
    'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700',
    'assets/plugins/global/plugins.bundle.css',
    'assets/plugins/custom/prismjs/prismjs.bundle.css',
    'assets/css/style.bundle.css',
    'assets/css/login-5.css',
));

Assets::add_js(array(
    'assets/plugins/global/plugins.bundle.js',
    'assets/plugins/custom/prismjs/prismjs.bundle.js',
    'assets/js/scripts.bundle.js'
));
$logo = $this->settings_lib->item('ext.logo');
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <title>
    <?php
        echo isset($page_title) ? "{$page_title} : " : '';
        e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire');
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e(isset($meta_author) ? $meta_author : ''); ?>">

    <?php echo Assets::css(); ?>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
</head>