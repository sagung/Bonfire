

<div class="card card-custom">
    <div class="card-header">
        <div class="card-toolbar">
            <ul class="nav nav-light-success nav-bold nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href='#sysinfoVersion'">
                        <span class="nav-icon"><i class="flaticon2-information"></i></span>
                        <span class="nav-text">Version</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href='#sysinfoConfig'>
                        <span class="nav-icon"><i class="flaticon2-gear"></i></span>
                        <span class="nav-text">Configuration</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href='#sysinfoCredits'>
                        <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                        <span class="nav-text">Credits</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
        <?php echo $phpinfo; ?>
        </div>
    </div>
</div>


			    