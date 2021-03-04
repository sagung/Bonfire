<div class='row'>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card ">
            <div class="card-body table-responsive"> 
                <table class="table table-striped table-bordered">
                    <tbody>
                        <?php foreach ($info as $key => $val) : ?>
                        <tr>
                            <th><?php e(lang($key)); ?></th>
                            <td><?php e($val); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>