<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/settings/emailer') ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('bf_context_settings'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == 'template' ? 'class="active"' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/settings/emailer/template') ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('emailer_email_template'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == 'queue' ? 'class="active"' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/settings/emailer/queue') ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('emailer_emailer_queue'); ?></a>
</a>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>' 
	href="<?php echo site_url(SITE_AREA .'/settings/emailer/create') ?>" >
	<i class='flaticon2-list-3'></i> <?php echo lang('emailer_create_email'); ?></a>
</a>
