<?php

$errorClass = isset($errorClass) ? $errorClass : ' is-invalid';
$showExtendedSettings = ! empty($extended_settings);
if ($showExtendedSettings) {
    $defaultCountry = 'US';
    $defaultState   = '';
    $countryFieldId = false;
    $stateFieldId   = false;
}

if (validation_errors()) :
?>
<div class="alert alert-block alert-error fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <?php echo validation_errors(); ?>
</div>
<?php endif; ?>


<?php echo form_open($this->uri->uri_string(), array('enctype' => 'multipart/form-data')); ?>


<div class="card card-custom">
    <div class="card-header card-header-tabs-line">
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                <li class="active">
                    <a class="nav-link active" href="#main-settings" data-toggle="tab"><?php echo lang('set_tab_settings'); ?></a>
                </li>
                <li>
                    <a class="nav-link" href="#security" data-toggle="tab"><?php echo lang('set_tab_security'); ?></a>
                </li>
                <?php if ($showDeveloperTab) : ?>
                <li >
                    <a class="nav-link" href="#developer" data-toggle="tab"><?php echo lang('set_tab_developer'); ?></a>
                </li>
                <?php
                endif;
                if ($showExtendedSettings) :
                ?>
                <li >
                    <a class="nav-link" href="#extended" data-toggle="tab"><?php echo lang('set_tab_extended'); ?></a>
                </li>
                <?php endif; ?>
                
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show  active" id="main-settings"  role="tabpanel">
                <?php Template::block('settingsMain', 'settings/settings/index/main', array('errorClass' => $errorClass)); ?>
            </div>
            <div class="tab-pane fade show " id="security"  role="tabpanel">
                <?php Template::block('settingsSecurity', 'settings/settings/index/security', array('errorClass' => $errorClass)); ?>
            </div>
            <?php if ($showDeveloperTab) : ?>
            <div class="tab-pane fade show " id="developer"  role="tabpanel">
                <?php Template::block('settingsDeveloper', 'settings/settings/index/developer', array('errorClass' => $errorClass)); ?>
            </div>
            <?php
            endif;
            if ($showExtendedSettings) :
            ?>
            <div class='tab-pane fade show ' id='extended' role="tabpanel">
                <?php
                Template::block(
                    'settingsExtended',
                    'settings/settings/index/extended',
                    array(
                        'errorClass'       => $errorClass,
                        'extendedSettings' => $extended_settings,
                        'defaultCountry'   => $defaultCountry,
                        'defaultState'     => $defaultState,
                        'countryFieldId'   => $countryFieldId,
                        'stateFieldId'     => $stateFieldId,
                    )
                );
                ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-footer">
        <input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('bf_action_save') . ' ' . lang('bf_context_settings'); ?>" />
    </div>
</div>

<?php echo form_close(); ?>