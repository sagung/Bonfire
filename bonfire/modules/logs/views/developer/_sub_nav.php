<?php

$checkSegment = $this->uri->segment(4);
$logsUrl = site_url(SITE_AREA . '/developer/logs');

?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment != '' ? 'settings' : '' ?>' 
	href="<?php echo $logsUrl ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('logs_logs'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == '' ? 'settings' : '' ?>' 
	href="<?php echo "{$logsUrl}/settings" ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('logs_settings'); ?></a>
</a>
