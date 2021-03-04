
<!--begin::Subheader-->
<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

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