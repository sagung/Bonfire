
<!DOCTYPE html>

<html lang="id" >
    <?php echo theme_view('header'); ?>
    <!--begin::Body-->
    <body  id="kt_body"  class="header-mobile-fixed page-loading"  >

    	<!--begin::Main-->
	    <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile bg-primary  header-mobile-fixed " >
            <!--begin::Logo-->
            <a href="<?php echo site_url(SITE_AREA); ?>">
                <img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-1.png" class="max-h-30px"/>
            </a>
            <!--end::Logo-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>

                <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </span>		
                </button>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->

        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    <?php echo theme_view('menu'); ?>
                    <!--end::Header-->

                    <!--begin::Content-->
                    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    
                        <div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
                            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">

                                    <!--begin::Page Heading-->
                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <!--begin::Page Title-->
                                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                                            <?php if (isset($toolbar_title)) : ?>
                                                <?php echo $toolbar_title; ?>
                                            <?php endif; ?>

                                                    	            
                                        </h5>
                                        <!--end::Page Title-->
                                    </div>
                                    <!--end::Page Heading-->
                                </div>

                                <div class="d-flex align-items-center">
                                    <!--begin::Actions-->
                                    <?php Template::block('sub_nav', ''); ?> 
                                    <!--end::Actions-->
                                </div>  
                                <!--end::Info-->
                            </div>
                        </div>

                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                            <div class=" container ">
                                <?php
                                    echo Template::message();
                                    echo isset($content) ? $content : Template::content();
                                ?>
                            </div>
                        <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                        <!--begin::Container-->
                        <div class=" container  d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted font-weight-bold mr-2">Copyright &copy;<?php echo date('Y')?></span>
                                <a href="#" target="_blank" class="text-dark-75 text-hover-primary">Edit footer disini</a>
                            </div>
                            <!--end::Copyright-->

                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->

        <?php echo theme_view('widget_userpanel'); ?>
        

        <?php echo theme_view('footer'); ?>
    </body>
    <!--end::Body-->
</html>