<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
	$login_type = $this->settings_lib->item('auth.login_type');
	if($login_type == 'both'){
		$login_type = 'Email / Username';
	}

	$logo = $this->settings_lib->item('ext.logo');
?>

<!--begin::Login Sign in form-->
<div class="login-signin">
<p><br/><a href="<?php echo site_url(); ?>">&larr; <?php echo lang('us_back_to') . $this->settings_lib->item('site.title'); ?></a></p>
	<div class="mb-10">
		<h2 ><?php echo $this->settings_lib->item('site.title') ?></h2>
		<p class="font-weight-bold"><?php echo lang('us_login'); ?></p>
	</div>

	<?php echo Template::message(); ?>

	<?php
		if (validation_errors()) :
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger fade in">
				<a data-dismiss="alert" class="close">&times;</a>
				<?php echo validation_errors(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php echo form_open(LOGIN_URL, array('autocomplete' => 'off', 'id' => 'kt_login_signin_form', 'class' => 'form')); ?> 
		<div class="form-group">
			<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="<?php e($login_type)?>" name="login" value="<?php echo set_value('login'); ?>" autocomplete="off"/>
		</div>
		<div class="form-group">
			<input class="form-control h-auto form-control-solid py-4 px-8" type="password" name="password" placeholder="<?php echo lang('bf_password'); ?>"/>
		</div>
		<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
			<?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
			<div class="checkbox-inline">
				<label class="checkbox checkbox-outline checkbox-white text-white m-0">
					<input type="checkbox" name="remember_me"> 
					<span></span>
					<?php echo lang('us_remember_note'); ?>
				</label>
			</div>
			<?php endif; ?>
			
			<a href="<?php echo site_url('/forgot_password'); ?>" id="kt_login_forgot" class="text-hover-primary"><?php echo lang('us_forgot_your_password'); ?></a>
		</div>
		<div class="form-group text-center mt-10">
			<button id="kt_login_signin_submit" type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3" name="log-me-in" value="<?php e(lang('us_let_me_in')); ?>">Sign In</button>
		</div>
	</form>

	<?php if ( $site_open ) : ?>
	<div class="mt-10">
		<span class="opacity-40 mr-4">
			Don't have an account yet?
		</span>
		<a href="<?php echo REGISTER_URL?>" id="kt_login_signup" class="font-weight-normal"><?php echo lang('us_sign_up'); ?></a>
	</div>
	<?php endif; ?>
	
</div>
<!--end::Login Sign in form-->
