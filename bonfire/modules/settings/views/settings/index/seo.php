<?php
$url_image = $this->config->item('url_upload').'/';

?>
<fieldset>
    <legend><?php echo lang('bf_site_information'); ?></legend>
    <div class="control-group<?php echo form_error('logo') ? $errorClass : ''; ?>">
        <label class="control-label" for="logo">Logo</label>
        <div class="controls">
            <?php if (!empty($settings['site.logo'])) : ?>    
            <a href="<?php echo $url_image.$settings['site.logo']; ?>" target="_blank"><img src="<?php echo $url_image.$settings['site.logo']; ?>" width="200" height="200" /></a>
            <?php else: ?>
            <a href="<?php echo $url_image; ?>nologo.png" target="_blank"><img src="<?php echo $url_image; ?>nologo.png" width="200" height="200" /></a>
            <?php endif; ?>
            <br /><br />
            
            <input type="file" name="img[logo][]" id="logo" class="span6" value="<?php echo set_value('site.logo', isset($settings['site.logo']) ? $settings['site.logo'] : ''); ?>" />
            <span class='help-block'><?php echo form_error('logo'); ?></span>
        </div>
    </div>
    <div class="control-group<?php echo form_error('alamat') ? $errorClass : ''; ?>">
        <label class="control-label" for="alamat">Alamat</label>
        <div class="controls">
            <input type="text" name="alamat" id="alamat" class="span4" value="<?php echo set_value('site.alamat', isset($settings['site.alamat']) ? $settings['site.alamat'] : ''); ?>" />
        </div>
    </div>
    <div class="control-group<?php echo form_error('telp') ? $errorClass : ''; ?>">
        <label class="control-label" for="telp">Telepon</label>
        <div class="controls">
            <input type="text" name="telp" id="telp" class="span4" value="<?php echo set_value('site.telp', isset($settings['site.telp']) ? $settings['site.telp'] : ''); ?>" />
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Social Media Setting</legend>
    <div class="control-group<?php echo form_error('facebook') ? $errorClass : ''; ?>">
        <label class="control-label" for="facebook">Facebook Page</label>
        <div class="controls">
            <input type="text" name="facebook" id="facebook" class="span4" value="<?php echo set_value('site.facebook', isset($settings['site.facebook']) ? $settings['site.facebook'] : ''); ?>" />
        </div>
    </div>
    <div class="control-group<?php echo form_error('twitter') ? $errorClass : ''; ?>">
        <label class="control-label" for="twitter">Twitter</label>
        <div class="controls">
            <input type="text" name="twitter" id="twitter" class="span4" value="<?php echo set_value('site.twitter', isset($settings['site.twitter']) ? $settings['site.twitter'] : ''); ?>" />
        </div>
    </div>
    <div class="control-group<?php echo form_error('youtube') ? $errorClass : ''; ?>">
        <label class="control-label" for="youtube">Youtube Channel</label>
        <div class="controls">
            <input type="text" name="youtube" id="youtube" class="span4" value="<?php echo set_value('site.youtube', isset($settings['site.youtube']) ? $settings['site.youtube'] : ''); ?>" />
        </div>
    </div>
</fieldset>