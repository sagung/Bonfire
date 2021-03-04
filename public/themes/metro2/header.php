<?php
Assets::add_css(array(
    "assets/plugins/global/plugins.bundle.css",
    "assets/plugins/custom/prismjs/prismjs.bundle.css",
    "assets/css/style.bundle.css",
    "assets/plugins/custom/fullcalendar/fullcalendar.bundle.css",
    "assets/plugins/custom/datatables/datatables.bundle.css",
    
), 'all');
Assets::add_js(array(
    "assets/plugins/global/plugins.bundle.js",
    "assets/plugins/custom/prismjs/prismjs.bundle.js",
    "assets/js/scripts.bundle.js",
    "assets/js/pages/widgets.js",
    "assets/plugins/custom/fullcalendar/fullcalendar.bundle.js",
    "assets/plugins/custom/datatables/datatables.bundle.js",
    "https://unpkg.com/axios/dist/axios.min.js",
),'external', true);
?>

<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>
        <?php
            $toolbar_title = isset($toolbar_title) ? strip_tags($toolbar_title) : '';
            echo isset($toolbar_title) ? "{$toolbar_title} : " : '';
        
            $title = $this->settings_lib->item('site.title');
            
            e($title);
        ?>
    </title>
    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e(isset($meta_author) ? $meta_author : ''); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        
    <!--end::Fonts-->

    <!--begin::Layout Themes(used by all pages)-->
    <?php echo Assets::css(null, 'all'); ?>
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/logos/favicon.ico"/>

</head>