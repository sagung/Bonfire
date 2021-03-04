<?php

$migrationsSegment = $this->uri->segment(3);
$checkSegment = $this->uri->segment(4);
$developerUrl = site_url(SITE_AREA . '/developer');

?>

<a class="btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == '' && $migrationsSegment != 'migrations' ? 'active' : ''; ?>" 
	href="<?php echo "{$developerUrl}/database"; ?>" >
	<i class='flaticon2-warning'></i> <?php echo lang('database_maintenance'); ?></a>
</a>
<a class="btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == 'backups' ? 'active' : ''; ?>" 
	href="<?php echo "{$developerUrl}/database/backups"; ?>" >
	<i class='flaticon-file-1'></i> <?php echo lang('database_backups'); ?></a>
</a>
<a class="btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $migrationsSegment == 'migrations' ? 'active' : ''; ?>" 
	href="<?php echo "{$developerUrl}/migrations"; ?>" >
	<i class='flaticon2-reload'></i> <?php echo lang('database_migrations'); ?></a>
</a>
