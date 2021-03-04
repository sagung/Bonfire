<?php
if (! empty($orig) && is_array($orig)) :
    echo form_open(current_url(), 'class="form-horizontal" id="translate_form"');
?>
<div class='row'>
    <div class="col-md-12">
        <div class="box">
            <div class="box-body table-responsive">
                
                <input type="hidden" name="trans_lang" value="<?php e($trans_lang); ?>" />

                <legend>
                    <?php if (count($orig) > 30) : ?>
                    <button class="gobottom pull-right btn btn-sm"><span class="fa fa-chevron-down"></span></button>
                    <?php endif; ?>
                    <h3><?php echo lang('translate_file'); ?>: <span class='filename'><?php echo $lang_file; ?></span></h3>
                </legend>

                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th class='column-check'><input class='check-all' type='checkbox' /></th>
                            <th width="50%" class='text-right'><?php echo ucwords($orig_lang); ?></th>
                            <th><?php echo ucwords($trans_lang); ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan='3'>
                                <?php
                                if ($orig_lang != $trans_lang) :
                                    echo lang('bf_with_selected');
                                ?>
                                <input type="submit" name="translate" class="btn translate-sel" value="<?php echo lang('translate_translate'); ?>" />
                                <?php
                                endif;
                                if (count($orig) > 30) :
                                ?>
                                <button class="gotop pull-right btn btn-sm"><span class="fa fa-chevron-up"></span></button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($orig as $key => $val) : ?>
                        <tr>
                            <td class='column-check'><input type='checkbox' name='checked[]' value="<?php echo $key; ?>" <?php echo in_array($key, $chkd) ? "checked='checked' " : ''; ?>/></td>
                            <td><label class="control-label" for="lang<?php echo $key; ?>"><?php e($val); ?></label></td>
                            <td>
                                <?php if (strlen($val) < 80) : ?>
                                <input type="text" class="form-control" name="lang[<?php echo $key; ?>]" id="lang<?php echo $key; ?>" value="<?php e(isset($new[$key]) ? $new[$key] : ''); ?>" />
                                <?php else : ?>
                                <textarea class="form-control" class="input-xxlarge" name="lang[<?php echo $key; ?>]" id="lang<?php echo $key; ?>"><?php e(isset($new[$key]) ? $new[$key] : ''); ?></textarea>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

<div class='row'>
    <div class="col-md-12">
        <div class="box">
            <div class="box-body ">
                <input type="submit" name="save" class="btn btn-primary" value="<?php e(lang('bf_action_save')); ?>" /> <?php e(lang('bf_or')); ?>
                    <a href="<?php
                        echo site_url(SITE_AREA . '/developer/translate/index') . '/';
                        e($trans_lang);
                    ?>"><?php e(lang('bf_action_cancel')); ?></a>
            </div>
        </div>
    </div>
</div>

<?php 
echo form_close(); 
endif; ?>