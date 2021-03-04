<!DOCTYPE html>

<html lang="id" >
    <!--begin::Head-->
    <head>
        <base href="../../../">
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
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap" rel="stylesheet">        
        
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="<?php echo Template::theme_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="print-content-only header-mobile-fixed subheader-enabled page-loading"  >
            
        <div class="content  d-flex flex-column flex-column-fluid" >
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class=" container ">
                    <?php echo Template::content(); ?>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->

    </body>
    <!--end::Body-->
</html>
