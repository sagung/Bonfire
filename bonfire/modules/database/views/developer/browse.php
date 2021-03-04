
<div class="callout callout-info">
    <h4><?php e(lang('database_sql_query')); ?>:</h4>

    <p><?php e($query); ?></p>
</div>

<?php if (empty($num_rows) || empty($rows) || ! is_array($rows)) : ?>
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
        <?php e(lang('database_no_rows')); ?>
    </div>
<?php else : ?>
    <p><?php echo e(sprintf(lang('database_total_results'), $num_rows)); ?></p>

    <div class='row'>
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <?php foreach ($rows[0] as $field => $value) : ?>
                                <th><?php e($field); ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row) : ?>
                            <tr>
                                <?php foreach ($row as $key => $value) : ?>
                                <td><?php e($value); ?></td>
                                <?php endforeach; ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
