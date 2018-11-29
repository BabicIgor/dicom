<?php



?>
<div id="aside" class="app-aside fade nav-dropdown black">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a href="<?php echo site_url('dashboard') ?>" class="navbar-brand">
                <span class="hidden-folded inline"><?php echo $this->settings->get('website_name') ?></span>
            </a>
            <!-- / brand -->
        </div>
        <div data-flex class="hide-scroll">
            <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

                <ul class="nav" data-ui-nav>
                    <li class="nav-header hidden-folded">
                        <span class="text-xs">Main</span>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin" class="b-danger">
                  <span class="nav-icon text-white no-fade">
                    <i class="ion-filing"></i>
                  </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <?php
                    if($this->aauth->is_user_allowed('user/user_list')){
                        ?>
                    <li>
                        <a class="b-default" href="<?php echo site_url('user/user_list') ?>">
                  <span class="nav-icon">
                    <i class="ion-person"></i>
                  </span>
                            <span class="nav-text">Users</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div data-flex-no-shrink>
            <div class="nav-fold dropup">
                <a data-toggle="dropdown">
                    <div class="pull-left">
                        <div class="inline"><span class="avatar w-40 grey"><?php echo $initials?></span></div>
                        <img src="images/a0.jpg" alt="..." class="w-40 img-circle hide">
                    </div>
                    <div class="clear hidden-folded p-x">
                        <span class="block _500 text-muted"><?php echo $fname." ".$lname?> </span>
                        <div class="progress-xxs m-y-sm lt progress">
                            <div class="progress-bar info" style="width: 15%;">
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu w dropdown-menu-scale ">
                    <a class="dropdown-item" href="<?php echo site_url('user/profile') ?>">Profile</a>
                    <a class="dropdown-item" href="<?php echo site_url('user/logout') ?>">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / -->