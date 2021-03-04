<?php

$testSegment = $this->uri->segment(4);
$translateUrl = site_url(SITE_AREA . '/developer/translate');

?>

<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == '' ? 'active' : '' ?>' 
href="<?php echo $translateUrl; ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('translate_translate'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo  $testSegment == 'export' ? 'active' : '' ?>' 
href="<?php echo "{$translateUrl}/export"; ?>" >
	<i class='flaticon2-download'></i> <?php echo lang('translate_export_short'); ?></a>
</a>

