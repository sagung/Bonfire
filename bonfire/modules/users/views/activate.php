<!-- Section: home -->
<section id="home" class="bg-lighter">  
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-3">
				<?php if (validation_errors()) : ?>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-error fade in">
								<a data-dismiss="alert" class="close">&times;</a>
								<?php echo validation_errors(); ?>
							</div>
						</div>
					</div>
				<?php else: ?>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-error fade in">
								<?php echo lang('us_user_activate_note'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="row-">
					<div class="col-md-12">

					<?php echo form_open($this->uri->uri_string(), array('class' => "form-horizontal", 'autocomplete' => 'off')); ?>

					<div class="form-group <?php echo iif( form_error('code') , 'danger') ;?>">
						<label class="control-label required" for="code"><?php echo lang('us_activate_code'); ?></label>
						<div class="controls">
							<input class="form-control" type="text" id="code" name="code" value="<?php echo set_value('code') ?>" />
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<input class="btn btn-primary" type="submit" name="activate" value="<?php echo lang('us_confirm_activate_code') ?>"  />
						</div>
					</div>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</section>
