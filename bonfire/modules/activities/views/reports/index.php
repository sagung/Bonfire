<?php

$hasPermissionDeleteDate   = isset($hasPermissionDeleteDate) ? $hasPermissionDeleteDate : false;
$hasPermissionDeleteModule = isset($hasPermissionDeleteModule) ? $hasPermissionDeleteModule : false;
$hasPermissionDeleteUser   = isset($hasPermissionDeleteUser) ? $hasPermissionDeleteUser : false;

$activitiesReportsPage = SITE_AREA . '/reports/activities';
$activitiesReportsUrl = site_url($activitiesReportsPage);

?>


<div class='row'>    
    <?php if ($hasPermissionViewOwn) : ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center py-0 mt-8">
                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                        <i class="flaticon-visible text-warning icon-3x"></i>
                        <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary"><?php echo lang(str_replace('activity_', 'activities_', "{$pages['own']}_description")); ?></a>
                        <span class="font-weight-bold text-muted  font-size-lg">
                            <?php echo lang(str_replace('activity_', 'activities_', $pages['own'])); ?>
                            <a href='<?php echo "{$activitiesReportsUrl}/{$pages['own']}"; ?>'>
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </span>
                    </div>
                    <img src="assets/media/svg/avatars/029-boy-11.svg" alt="" class="align-self-end h-100px">
                </div>
                <!--end::Body-->
            </div>
        </div>
	<?php
    endif;
    if ($hasPermissionViewUser) :
    ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center py-0 mt-8">
                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                        <i class="flaticon-user text-success icon-3x"></i>
                        <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">
                            <?php echo lang(str_replace('activity_', 'activities_', "{$pages['user']}s_description")); ?>
                        </a>
                        <span class="font-weight-bold text-muted  font-size-lg">
                            <?php echo lang(str_replace('activity_', 'activities_', "{$pages['user']}s")); ?>
                            <a href='<?php echo "{$activitiesReportsUrl}/{$pages['user']}"; ?>'>
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </span>
                    </div>
                    <img src="assets/media/svg/avatars/029-boy-11.svg" alt="" class="align-self-end h-100px">
                </div>
            </div>
        </div>
	<?php
    endif;
    if ($hasPermissionViewModule) :
    ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center py-0 mt-8">
                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                        <i class="flaticon-tabs text-success icon-3x"></i>
                        <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">
                            <?php echo lang(str_replace('activity_', 'activities_', "{$pages['module']}_description")); ?>
                        </a>
                        <span class="font-weight-bold text-muted  font-size-lg">
                            <?php echo lang(str_replace('activity_', 'activities_', "{$pages['module']}s")); ?>
                            <a href='<?php echo "{$activitiesReportsUrl}/{$pages['module']}"; ?>'>
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </span>
                    </div>
                    <img src="assets/media/svg/avatars/029-boy-11.svg" alt="" class="align-self-end h-100px">
                </div>
            </div>
        </div>
	<?php
    endif;
    if ($hasPermissionViewDate) :
    ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center py-0 mt-8">
                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                        <i class="flaticon2-calendar-9 text-info icon-3x"></i>
                        <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">
                            <?php echo lang(str_replace('activity_', 'activities_', "{$pages['date']}_description")); ?>
                        </a>
                        <span class="font-weight-bold text-muted  font-size-lg">
                            <?php echo lang(str_replace('activity_', 'activities_', $pages['date'])); ?>
                            <a href='<?php echo "{$activitiesReportsUrl}/{$pages['date']}"; ?>'>
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </span>
                    </div>
                    <img src="assets/media/svg/avatars/029-boy-11.svg" alt="" class="align-self-end h-100px">
                </div>
            </div>

        </div>
    <?php endif; ?>
</div>

<div class="row">
	<div class="col-md-6">
        
		<!-- Active Modules -->
		<div class="card">
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark"><?php echo lang('activities_top_modules'); ?></h3>
        
            </div>

            <div class="card-body pt-0">
                <?php if (empty($top_modules) || ! is_array($top_modules)) : ?>
                    <p><?php echo lang('activities_no_top_modules'); ?></p>
                <?php else : ?>
                    <?php foreach ($top_modules as $topModule) : ?>
                        <div class="d-flex align-items-center mb-4 bg-light-warning rounded p-5">
                            
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><?php echo ucwords($topModule->module); ?></a>
                            </div>
                            <span class="font-weight-bolder text-warning py-1 font-size-lg"><?php echo $topModule->activity_count; ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
		</div>
	</div>

	<div class="col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark"><?php echo lang('activities_top_users'); ?></h3>
        
            </div>

            <div class="card-body pt-0">
                <?php if (empty($top_users) || ! is_array($top_users)) : ?>
                    <p><?php echo lang('activities_no_top_users'); ?></p>
                <?php else : ?>
                    <?php foreach ($top_users as $topUser) : ?>
                        <div class="d-flex align-items-center mb-4 bg-light-warning rounded p-5">
                            
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><?php e($topUser->username == '' ? lang('activities_username_not_found') : $topUser->username); ?></a>
                            </div>
                            <span class="font-weight-bolder text-warning py-1 font-size-lg"><?php echo $topUser->activity_count; ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
		</div>
	</div>
</div>

<?php
if ($hasPermissionDeleteOwn
    || $hasPermissionDeleteUser
    || $hasPermissionDeleteModule
    || $hasPermissionDeleteDate
) :
?>
<div class="row">
    <div class="col-md-12">
        <!-- Active Modules -->
        <div class="card card-custom card-stretch gutter-b mt-5">
            <div class="card-header">
                <h3 class="card-title font-weight-bolder text-dark"><?php echo lang('activities_cleanup'); ?></h3>
        
            </div>
            <div class="card-body">
            	<table class="table table-striped">
            		<tbody>
                        <?php if ($hasPermissionDeleteOwn) : ?>
                        <tr>
                            <?php echo form_open("{$activitiesReportsPage}/delete", array('id' => 'activity_own_form', 'class' => 'form-inline')); ?>
                                <td class='label-column'><label for="activity_own_select"><?php echo lang('activities_delete_own_note'); ?></label></td>
                                <td>
                                    <input type="hidden" name="action" value="activity_own" />
                                    <select name="which" id="activity_own_select">
                                        <option value="<?php echo $current_user->id; ?>"><?php e($current_user->username); ?></option>
                                    </select>
                                </td>
                                <td class='button-column'>
                                    <button type="button" class="btn btn-danger" id="delete-activity_own"><span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('activities_own_delete'); ?></button>
                                </td>
                            <?php echo form_close(); ?>
                        </tr>
                        <?php
                        endif;
                        if ($hasPermissionDeleteUser) :
                        ?>
                        <tr>
                            <?php echo form_open("{$activitiesReportsPage}/delete", array('id' => 'activity_user_form', 'class' => 'form-inline')); ?>
                                <td class='label-column'><label for="activity_user_select"><?php echo lang('activities_delete_user_note'); ?></label></td>
                                <td>
                                    <input type="hidden" name="action" value="activity_user" />
                                    <select name="which" id="activity_user_select">
                                        <option value="all"><?php echo lang('activities_all_users'); ?></option>
                                        <?php foreach ($users as $au) : ?>
                                        <option value="<?php echo $au->id; ?>"><?php e($au->username); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class='button-column'>
                                    <button type="button" class="btn btn-danger" id="delete-activity_user"><span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('activities_user_delete'); ?></button>
                                </td>
                            <?php echo form_close(); ?>
                        </tr>
            			<?php
                        endif;

                        if ($hasPermissionDeleteModule) :
                        ?>
            			<tr>
                            <?php echo form_open("{$activitiesReportsPage}/delete", array('id' => 'activity_module_form', 'class' => 'form-inline')); ?>
                                <td class='label-column'><label for="activity_module_select"><?php echo lang('activities_delete_module_note'); ?></label></td>
                                <td>
                                    <input type="hidden" name="action" value="activity_module" />
                                    <select name="which" id="activity_module_select">
                                        <option value="all"><?php echo lang('activities_all_modules'); ?></option>
                                        <option value="core"><?php echo lang('activities_core'); ?></option>
                                        <?php foreach ($modules as $mod) : ?>
                                        <option value="<?php echo $mod; ?>"><?php echo $mod; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class='button-column'>
                                    <button type="button" class="btn btn-danger" id="delete-activity_module"><span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('activities_module_delete'); ?></button>
                                </td>
                            <?php echo form_close(); ?>
            			</tr>
            			<?php
                        endif;

                        if ($hasPermissionDeleteDate) :
                        ?>
            			<tr>
                            <?php echo form_open("{$activitiesReportsPage}/delete", array('id' => 'activity_date_form', 'class' => 'form-inline')); ?>
                                <td class='label-column'><label for="activity_date_select"><?php echo lang('activities_delete_date_note'); ?></label></td>
                                <td>
                                    <input type="hidden" name="action" value="activity_date" />
                                    <select name="which" id="activity_date_select">
                                        <option value="all"><?php echo lang('activities_all_dates'); ?></option>
                                        <?php foreach ($activities as $activity) : ?>
                                        <option value="<?php echo $activity->activity_id; ?>"><?php echo $activity->created_on; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class='button-column'>
                                    <button type="button" class="btn btn-danger" id="delete-activity_date"><span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('activities_date_delete'); ?></button>
                                </td>
                            <?php echo form_close(); ?>
            			</tr>
            			<?php endif; ?>
            		</tbody>
            	</table>
            </div>
        </div>
    </div>
</div>
<?php
endif;
