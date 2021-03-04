<?php

$checkSegment = $this->uri->segment(4);
$activitiesReportsUrl = site_url(SITE_AREA . '/reports/activities');
$pageUser   = 'activity_user';
$pageModule = 'activity_module';
$pageDate   = 'activity_date';

?>
<a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == '' ? 'active' : '' ?>' 
	href="<?php echo $activitiesReportsUrl; ?>" >
	<i class='flaticon2-list-3'></i> <?php e(lang('activities_home')); ?></a>
</a>

<?php if ($hasPermissionViewUser || $hasPermissionViewOwn) : ?>
    <a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == $pageUser || $checkSegment == 'activity_own' ? ' class="active"' : ''; ?>' 
        href="<?php echo "{$activitiesReportsUrl}/{$pageUser}"; ?>" >
        <i class='flaticon-user'></i> <?php e(lang(str_replace('activity_', 'activities_', $pageUser)) ); ?></a>
    </a>
<?php
endif;
if ($hasPermissionViewModule) :
?>
    <a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == $pageModule ? ' class="active"' : '' ?>' 
        href="<?php echo "{$activitiesReportsUrl}/{$pageModule}"; ?>" >
        <i class='flaticon-tabs'></i> <?php e(lang(str_replace('activity_', 'activities_', $pageModule))); ?></a>
    </a>
<?php
endif;
if ($hasPermissionViewDate) :
?>
    <a class='btn font-weight-bolder btn-sm mr-2 btn-light-primary <?php echo $checkSegment == $pageDate ? ' class="active"' : '' ?>' 
        href="<?php echo "{$activitiesReportsUrl}/{$pageDate}"; ?>" >
        <i class='flaticon2-calendar-9'></i> <?php e(lang(str_replace('activity_', 'activities_', $pageDate))); ?></a>
    </a>
<?php endif; ?>