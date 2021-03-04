<?php

$testSegment = $this->uri->segment(4);
$settingsUrl = site_url(SITE_AREA . '/settings');

?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == '' ? 'active' : '' ?>' 
	href="<?php echo "{$settingsUrl}/permissions"; ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('bf_action_list'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == 'create' ? 'active' : '' ?>' 
	href="<?php echo "{$settingsUrl}/permissions/create"; ?>" id="create_new" >
	<i class='flaticon2-add-1'></i> <?php echo lang('bf_action_create'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == 'permission_matrix' ? 'active' : '' ?>' 
	href="<?php echo "{$settingsUrl}/roles/permission_matrix"; ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('permissions_matrix'); ?></a>
</a>

