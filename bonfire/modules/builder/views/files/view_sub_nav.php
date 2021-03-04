<?php

$controller_name_lower = strtolower($controller_name);
$ucModuleName = preg_replace("/[ -]/", "_", ucfirst($module_name));
$ucControllerName = ucfirst($controller_name);

$createPermission = "{$ucModuleName}.{$ucControllerName}.Create";

//------------------------------------------------------------------------------
// Output the view
//------------------------------------------------------------------------------
echo "<?php

\$checkSegment = \$this->uri->segment(4);
\$areaUrl = SITE_AREA . '/{$controller_name_lower}/{$module_name_lower}';

?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo \$checkSegment == '' ? 'active' : '' ?>' 
	href=\"<?php echo site_url(\$areaUrl); ?>\" >
	<i class='flaticon2-list-3'></i> <?php echo lang('{$module_name_lower}_list'); ?></a>
</a>

<?php if (\$this->auth->has_permission('{$createPermission}')) : ?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo \$checkSegment == 'create' ? 'active' : '' ?>' 
	href=\"<?php echo site_url(\$areaUrl . '/create'); ?>\" >
	<i class='flaticon2-add-1'></i> <?php echo lang('{$module_name_lower}_new'); ?></a>
</a>
<?php endif; ?>";
