<?php
	$logo = $this->settings_lib->item('ext.logo');
?>

<div class="login-signin">

	<div class="mb-10">
		<h3 class="font-weight-bold"><?php echo $page_title; ?> : <?php echo $this->settings_lib->item('site.title') ?></h3>
	</div>

	<?php echo Template::message(); ?>

	<?php if (validation_errors()) : ?>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-error alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<?php echo validation_errors(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="alert alert-info">
		<?php echo lang('us_reset_note'); ?>
	</div>
	
	<div class="login-box-body">

    	<?php echo form_open($this->uri->uri_string(), array('autocomplete' => 'off')); ?>

		<div class="form-group <?php echo form_error('email') ? ' has-error' : ''; ?>">
			
			<input class="form-control h-auto form-control-solid py-4 px-8" type="text" required="required" name="email" id="email" placeholder="<?php echo lang('bf_email'); ?>" value="" />

		</div>

		<div class="control-group">
			<input class="btn btn-primary" type="submit" name="send" value="<?php e(lang('us_send_password')); ?>" />
		</div>
		
		<?php echo form_close(); ?>
		<br/><?php echo anchor(LOGIN_URL, '<< Login'); ?>
    </div>
</div>
