<?php if (has_permission('Bonfire.Users.Manage')):?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == '' ? 'active' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/settings/users') ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('bf_users'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == 'create' ? 'active' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/settings/users/create') ?>" id="create_new" >
	<i class='flaticon2-add-1'></i> <?php echo lang('bf_new') .' '. lang('bf_user'); ?></a>
</a>

<?php endif;?>