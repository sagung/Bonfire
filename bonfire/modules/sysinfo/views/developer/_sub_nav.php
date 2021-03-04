<?php

$checkSegment = $this->uri->segment(4);
$baseUrl = site_url(SITE_AREA . '/developer/sysinfo');

?>

<a class="btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == '' ? ' active' : ''; ?>" 
	href="<?php echo $baseUrl; ?>" >
	<i class='flaticon2-warning'></i> <?php echo lang('sysinfo_system'); ?></a>
</a>
<a class="btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == 'modules' ? ' active' : ''; ?>" 
	href="<?php echo "{$baseUrl}/modules"; ?>" >
	<i class='flaticon-file-1'></i> <?php echo lang('sysinfo_modules'); ?></a>
</a>
<a class="btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == 'php_info' ? ' active' : ''; ?>" 
	href="<?php echo "{$baseUrl}/php_info"; ?>" >
	<i class='flaticon2-reload'></i> <?php echo lang('sysinfo_php'); ?></a>
</a>


<ul class="nav nav-pills">
	<li>
		<a href=""></a>
	</li>
	<li>
		<a href=''></a>
	</li>
	<li>
		<a href=''></a>
	</li>
</ul>