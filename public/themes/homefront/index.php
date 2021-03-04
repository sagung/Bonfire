<?php echo theme_view('header'); ?>

<body  id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading"  >

    <!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(<?php echo Template::theme_url(); ?>assets/media/bg/bg-3.jpg);">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    

                    <!--begin::Login Sign in form-->
                    <?php
                        echo isset($content) ? $content : Template::content();  
                    ?>
                    <!--end::Login Sign in form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
	</div>
    <!--end::Main-->
    <?php echo theme_view('footer'); ?>
    
</body>

</html>