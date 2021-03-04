<?php

$testSegment = $this->uri->segment(4);
$rolesUrl = site_url(SITE_AREA . '/settings/roles');

?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == '' ? 'active' : '' ?>' 
	href="<?php echo $rolesUrl ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('role_roles'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == 'create' ? 'active' : '' ?>' 
	href="<?php echo "{$rolesUrl}/create"; ?>" id="create_new" >
	<i class='flaticon2-add-1'></i> <?php echo lang('role_new_role'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $testSegment == 'permission_matrix' ? 'active' : '' ?>' 
	href="<?php echo "{$rolesUrl}/permission_matrix"; ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('matrix_header'); ?></a>
</a>
