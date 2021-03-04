<div class='row'>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card box-solid">
            <div class="card-header"> 
                <h3><?php echo lang('sysinfo_installed_mods'); ?></h3>
            </div>
            <div class="card-body table-responsive"> 
                
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo lang('sysinfo_mod_name'); ?></th>
                            <th><?php echo lang('sysinfo_mod_ver'); ?></th>
                            <th><?php echo lang('sysinfo_mod_desc'); ?></th>
                            <th><?php echo lang('sysinfo_mod_author'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($modules as $module => $config) : ?>
                        <tr>
                            <td><?php echo $config['name']; ?></td>
                            <td><?php echo $config['version']; ?></td>
                            <td><?php echo $config['description']; ?></td>
                            <td><?php echo $config['author']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>