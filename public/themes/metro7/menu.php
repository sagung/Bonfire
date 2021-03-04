<!--begin::Header-->
<div id="kt_header" class="header flex-column" >
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <?php echo theme_view('widget_mainmenu'); ?>
            <?php echo theme_view('widget_topbar');?>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Top-->
    
    <!--begin::Bottom-->
    <div class="header-bottom">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Header Menu Wrapper-->
            <div class="header-navs header-navs-left" id="kt_header_navs">

                <!--begin::Tab Navs(for tablet and mobile modes)-->
                <ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">
                            Dashboard
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">
                            Pelabuhan
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_3" role="tab">
                            Tujuan Akhir
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_4" role="tab">
                            Hasil
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_5" role="tab">
                            Referensi
                        </a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--begin::Tab Navs-->

                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab Pane-->
                    <div class="tab-pane py-5 p-lg-0 justify-content-between show active" id="kt_header_tab_1">
                        <!--begin::Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                            <!--begin::Nav-->
                            <?php echo Contexts::render_menu('text', 'normal'); ?>
                            <!--end::Nav-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--begin::Tab Pane-->

                    <!--begin::Tab Pane-->
                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <!--begin::Actions-->
                            
                            <a href="<?php echo site_url(SITE_AREA.'/operation/pelabuhan'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Bongkar Muat</span>
                                    <span class="font-weight-bolder font-size-sm">Kayu Bulat</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bKapal.png"/>
                                </span>
                            </a>

                            <a href="<?php echo site_url(SITE_AREA.'/operation/agenda_dokumen/index_lainnya/'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Dokumen</span>
                                    <span class="font-weight-bolder font-size-sm">Lainnya</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bPelLain.png"/>
                                </span>
                            </a>
                            <!--end::Actions-->
                        </div>

                    </div>
                    <!--begin::Tab Pane-->

                    <!--begin::Tab Pane-->
                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_3">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <!--begin::Actions-->
                            
                            <a href="<?php echo site_url(SITE_AREA.'/operation/agenda'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                
                                <div class="d-flex flex-column text-right pr-3 mb-2">
                                    <span class="font-weight-bold font-size-sm">Penerimaan</span>
                                    <span class="font-weight-bolder font-size-sm">Hasil Hutan</span>
                                
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bDokumenList.png"/>
                                </span>
                                
                            </a>

                            <a href="<?php echo site_url(SITE_AREA.'/operation/bap'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Berita Acara</span>
                                    <span class="font-weight-bolder font-size-sm">Pemeriksaan</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bBAP.png"/>
                                </span>
                            </a>

                            <a href="<?php echo site_url(SITE_AREA.'/operation/penetapan'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Penetapan</span>
                                    <span class="font-weight-bolder font-size-sm">Retribusi</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bSKRD.png"/>
                                </span>
                            </a>

                             <a href="<?php echo site_url(SITE_AREA.'/operation/penyetoran'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Penerimaan dan</span>
                                    <span class="font-weight-bolder font-size-sm">Penyetoran</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bKasir.png"/>
                                </span>
                            </a>

                            <!--end::Actions-->
                        </div>

                    </div>
                    <!--begin::Tab Pane-->

                    <!--begin::Tab Pane-->
                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_4">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <!--begin::Actions-->
                            
                            
                            <a href="<?php echo site_url(SITE_AREA.'/reports/agenda_dokumen'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Laporan</span>
                                    <span class="font-weight-bolder font-size-sm">Peredaran</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bLaporan.png"/>
                                </span>
                            </a>

                            <a href="<?php echo site_url(SITE_AREA.'/reports/penetapan'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Laporan</span>
                                    <span class="font-weight-bolder font-size-sm">Penetapan</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bLaporan.png"/>
                                </span>
                            </a>
                            <a href="<?php echo site_url(SITE_AREA.'/reports/penyetoran'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Laporan</span>
                                    <span class="font-weight-bolder font-size-sm">Penyetoran</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bLaporan.png"/>
                                </span>
                            </a>

                           
                            <!--end::Actions-->
                        </div>

                    </div>
                    <!--begin::Tab Pane-->

                    <!--begin::Tab Pane-->
                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_5">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <!--begin::Actions-->
                            

                            <a href="<?php echo site_url(SITE_AREA.'/master/perusahaan'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Daftar</span>
                                    <span class="font-weight-bolder font-size-sm">Perusahaan/TPK</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bPerusahaan.png"/>
                                </span>
                            </a>

                            <a href="<?php echo site_url(SITE_AREA.'/master/hhjenis'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Daftar Jenis</span>
                                    <span class="font-weight-bolder font-size-sm">Hasil Hutan</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bKayu.png"/>
                                </span>
                            </a>

                            <a href="<?php echo site_url(SITE_AREA.'/master/daftar_kab'); ?>" class="btn btn-light-success d-inline-flex align-items-center btn-lg mr-5">
                                <div class="d-flex flex-column text-right pr-3">
                                    <span class="font-weight-bold font-size-sm">Daftar Kota</span>
                                    <span class="font-weight-bolder font-size-sm">di Indonesia/TPK</span>
                                </div>
                                <span class="symbol symbol-40">
                                    <img alt="Pic" src="<?php echo base_url(); ?>assets/media/images/bKota.png"/>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Bottom-->
</div>