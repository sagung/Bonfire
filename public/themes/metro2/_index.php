
<!DOCTYPE html>

<html lang="id" >
    <?php echo theme_view('header'); ?>

    <!--begin::Body-->
    <body  id="kt_body" style="background-image: url(<?php echo base_url(); ?>assets/media/bg/bg-10.jpg)"  class="quick-panel-right demo-panel-right offcanvas-right header-static subheader-enabled"  >
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile " >
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px"/>
			</a>
			<!--end::Logo-->

			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>

				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
							</g>
						</svg>
						<!--end::Svg Icon-->
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
				<div id="kt_header" class="header " >
					<!--begin::Container-->
					<div class=" container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Left-->
						<div class="d-flex align-items-stretch mr-3">
							<!--begin::Header Logo-->
							<div class="header-logo">
								<a href="index.html">
									<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-letter-9.png" class="logo-default max-h-40px"/>
									<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-letter-1.png" class="logo-sticky max-h-40px"/>
								</a>
							</div>
							<!--end::Header Logo-->

							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default " >
									<!--begin::Header Nav-->
									<?php echo theme_view('menu'); ?>
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

					<!--begin::Content-->
					<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-12  subheader-transparent " id="kt_subheader">
							<div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Heading-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h2 class="text-white font-weight-bold my-2 mr-5">
											<?php if (isset($toolbar_title)) : ?>
												<?php echo $toolbar_title; ?>
											<?php endif; ?>                                    
										</h2>
										<!--end::Title-->                            
									</div>
									<!--end::Heading-->
								</div>
								<!--end::Info-->

								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<?php Template::block('sub_nav', ''); ?> 
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->

						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class=" container-fluid ">
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
								<span class="text-muted font-weight-bold mr-2">2020&copy;</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
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