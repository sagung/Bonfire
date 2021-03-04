<?php

//------------------------------------------------------------------------------
// Setup the fields to be displayed in the view
//------------------------------------------------------------------------------
$field_prefix = '';
if ($db_required == 'new' && $table_as_field_prefix === true) {
    $field_prefix = "{$module_name_lower}_";
}

$viewFields = '';
for ($counter = 1; $field_total >= $counter; $counter++) {
    // Only build on fields that have data entered.
    if (set_value("view_field_label$counter") == null) {
        continue;
    }

    $maxlength = null;
    $validation_rules = $this->input->post("validation_rules{$counter}");
    $field_label = set_value("view_field_label$counter");
    $field_name  = set_value("view_field_name$counter");
    $form_name   = "{$field_prefix}{$field_name}";
    $field_type  = set_value("view_field_type$counter");

    $required = '';
    $required_attribute = false;

    // Validation rules for this fieldset
    if (is_array($validation_rules)) {
        foreach ($validation_rules as $key => $value) {
            if ($value == 'required') {
                $required = " . lang('bf_form_label_required')";
                $required_attribute = true;
            }
        }
    }

    // Type of field
    switch ($field_type) {
        case 'textarea':
            $viewFields .= PHP_EOL . "
            <div class=\"form-group\">
                <?php echo form_label(lang('{$module_name_lower}_field_{$field_name}'){$required}, '{$form_name}', array('class' => 'control-label')); ?>
                <?php echo form_textarea(array('class' => 'form-control ', 'name' => '{$form_name}', 'id' => '{$form_name}', 'rows' => '5', 'cols' => '80', 'value' => set_value('$form_name', isset(\${$module_name_lower}->{$field_name}) ? \${$module_name_lower}->{$field_name} : '')" . ($required_attribute ? ", 'required' => 'required'" : "") . ")); ?>
                <span class='form-text text-muted'><?php echo form_error('{$field_name}'); ?></span>
            </div>";
            break;
        case 'radio':
            $viewFields .= PHP_EOL . "
            <div class=\"form-group<?php echo form_error('{$field_name}') ? ' is-invalid' : ''; ?>\">
                <?php echo form_label(lang('{$module_name_lower}_field_{$field_name}'){$required}, '', array('class' => 'control-label', 'id' => '{$form_name}_label')); ?>
                <div class='radio-inline' aria-labelled-by='{$form_name}_label'>
                    <label class='radio' for='{$form_name}_option1'>
                        <input id='{$form_name}_option1' name='{$form_name}' type='radio' " . ($required_attribute ? "required='required' " : "") . "value='option1' <?php echo set_radio('{$form_name}', 'option1', isset(\${$module_name_lower}->{$field_name}) && \${$module_name_lower}->{$field_name} == 'option1'); ?> />
                        <span></span>Radio option 1
                    </label>
                </div>
                <div class='radio' aria-labelled-by='{$form_name}_label'>
                    <label class='radio' for='{$form_name}_option2'>
                        <input id='{$form_name}_option2' name='{$form_name}' type='radio' " . ($required_attribute ? "required='required' " : "") . "value='option2' <?php echo set_radio('{$form_name}', 'option2', isset(\${$module_name_lower}->{$field_name}) && \${$module_name_lower}->{$field_name} == 'option2'); ?> />
                        <span></span>Radio option 2
                    </label>
                    <span class='form-text text-muted'><?php echo form_error('{$field_name}'); ?></span>
                </div>
            </div>";
            break;
        case 'select':
            // Use CI form helper here as it makes selects/dropdowns easier
            $select_options = array();
            if (set_value("db_field_length_value$counter") != null) {
                $select_options = explode(',', set_value("db_field_length_value$counter"));
            }
            $viewFields .= PHP_EOL . '
            <?php // Change the values in this array to populate your dropdown as required
                $options = array(';
            foreach ($select_options as $key => $option) {
                $viewFields .= '
                    ' . strip_slashes($option) . ' => ' . strip_slashes($option) . ',';
            }
            $viewFields .= "
                );
                echo form_dropdown(array('class' => 'form-control ', 'name' => '{$form_name}'" . ($required_attribute ? ", 'required' => 'required'" : "") . "), \$options, set_value('{$form_name}', isset(\${$module_name_lower}->{$field_name}) ? \${$module_name_lower}->{$field_name} : ''), lang('{$module_name_lower}_field_{$field_name}'){$required});
            ?>";
            break;
        case 'checkbox':
            $viewFields .= PHP_EOL . "
            <div class=\"form-group<?php echo form_error('{$field_name}') ? ' is-invalid' : ''; ?>\">
                <div class='checkbox-inline'>
                    <label class='checkbox' for='{$form_name}'>
                        <input type='checkbox' id='{$form_name}' name='{$form_name}' " . ($required_attribute ? "required='required' " : "") . " value='1' <?php echo set_checkbox('{$form_name}', 1, isset(\${$module_name_lower}->{$field_name}) && \${$module_name_lower}->{$field_name} == 1); ?> />
                        <span></span><?php echo lang('{$module_name_lower}_field_{$field_name}'){$required}; ?>
                    </label>    
                </div>
                <span class='form-text text-muted'><?php echo form_error('{$field_name}'); ?></span>                
            </div>";
            break;
        case 'input':
        case 'password':
        default:
            $type = $field_type == 'input' ? 'text' : 'password';
            $db_field_type = set_value("db_field_type$counter");
            $max = set_value("db_field_length_value$counter");
            if ($max != null) {
                if (in_array($db_field_type, $realNumberTypes)) {
                    // Constraints for real number types are expected to be in
                    // the format of 'precision,scale', but the standard allows
                    // 'precision', where a scale of 0 is implied (therefore
                    // no decimal point is used)
                    $len = explode(',', $max);
                    $max = $len[0];
                    if (! empty($len[1])) {
                        ++$max; // Add 1 to allow for the decimal point.
                    }
                }
                $maxlength = "maxlength='{$max}'";
            }

            $viewFields .= PHP_EOL . "
            <div class=\"form-group\">
                <?php echo form_label(lang('{$module_name_lower}_field_{$field_name}'){$required}, '{$form_name}', array('class' => 'control-label')); ?>
                <input class='form-control <?php echo form_error('{$field_name}') ? ' is-invalid' : ''; ?>' id='{$form_name}' type='{$type}' " . ($required_attribute ? "required='required' " : "") . "name='{$form_name}' {$maxlength} value=\"<?php echo set_value('{$form_name}', isset(\${$module_name_lower}->{$field_name}) ? \${$module_name_lower}->{$field_name} : ''); ?>\" />
                <span class='form-text text-muted'><?php echo form_error('{$field_name}'); ?></span>
             
            </div>";
            break;
    }
}

//------------------------------------------------------------------------------
// Setup the delete button, if this is not a create view
//------------------------------------------------------------------------------
$delete = '';
if ($action_name != 'create') {
    $delete_permission = preg_replace("/[ -]/", "_", ucfirst($module_name)) . '.' . ucfirst($controller_name) . '.Delete';
    $delete = "
            <?php if (\$this->auth->has_permission('{$delete_permission}')) : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick=\"return confirm('<?php e(js_escape(lang('{$module_name_lower}_delete_confirm'))); ?>');\">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('{$module_name_lower}_delete_record'); ?>
                </button>
            <?php endif; ?>";
}

//------------------------------------------------------------------------------
// Output the view
//------------------------------------------------------------------------------
echo "<?php

if (validation_errors()) :
?>
<div class='alert alert-warning mb-5 p-5' role='alert'>
    <h4 class='alert-heading'><?php echo lang('{$module_name_lower}_errors_message'); ?></h4>
    <div class='border-bottom border-white opacity-20 mb-5'></div>
    <p class='mb-0'>
        <?php echo validation_errors(); ?>
    </p>
</div>
<?php
endif;

\$id = isset(\${$module_name_lower}->{$primary_key_field}) ? \${$module_name_lower}->{$primary_key_field} : '';

?>

<?php echo form_open(\$this->uri->uri_string(), 'class=\"form-horizontal\"'); ?>
<div class='row'>
    <div class='col-md-12'>
        <div class='card card-custom'>
            <div class='card-body'>
                {$viewFields}
            </div>
            <div class='card-footer'>
                <input type='submit' name='save' class='btn btn-primary' value=\"<?php echo lang('{$module_name_lower}_action_{$action_name}'); ?>\" />
                <?php echo lang('bf_or'); ?>
                <?php echo anchor(SITE_AREA . '/" . strtolower($controller_name) . "/{$module_name_lower}', lang('{$module_name_lower}_cancel'), 'class=\"btn btn-warning\"'); ?>
                {$delete}
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>";
