
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == '' ? 'active' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/developer/builder') ?>">
	<?php echo lang('bf_action_list'); ?>
</a>

<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == 'create_module' ? 'active' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/developer/builder/create_module') ?>" id="create_new">
	<?php echo lang('mb_new_module'); ?>
</a>

<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == 'create_context' ? 'active' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/developer/builder/create_context') ?>" id="create_new_context">
	<?php echo lang('mb_new_context'); ?>
</a>
