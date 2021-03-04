
<!--begin::Header-->
<div id="kt_header" class="header">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="index.html">
                    
                    <img alt="Logo" src="<?php echo Template::theme_url(); ?>assets/media/logos/logo-letter-9.png" class="logo-default max-h-40px" />
                    <img alt="Logo" src="<?php echo Template::theme_url(); ?>assets/media/logos/logo-letter-1.png" class="logo-sticky max-h-40px" />
                </a>
            </div>
            <!--end::Header Logo-->

            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <?php echo Contexts::render_menu('text', 'normal'); ?>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->

        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <?php
                $userDisplayName = isset($current_user->display_name) && ! empty($current_user->display_name) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email);
            ?>
            <div class="topbar-item">
                <div class="btn btn-icon btn-hover-transparent-white w-lg-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <div class="d-flex flex-column text-right pr-lg-3">
                        <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline"><?php e($userDisplayName); ?></span>
                        <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline"><?php e($current_user->role_name); ?></span>
                    </div>
                    <span class="symbol symbol-35">
                        <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"><?php echo gravatar_link($current_user->email, 32, null, $userDisplayName,'img-circle'); ?></span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>

    <!--end::Container-->
</div>

<!--end::Header-->
