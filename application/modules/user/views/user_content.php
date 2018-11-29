                        <div class="col-xs modal fade aside aside-sm  b-r" id="list">
                            <div class="row-col">
                                <div class="row-row">
                                    <div class="row-col">

                                        <div class="col-xs">
                                            <div class="row-col white bg">
                                                <!-- flex content -->
                                                <div class="row-row">
                                                    <div class="row-body scrollable hover">
                                                        <div class="row-inner">
                                                            <!-- left content -->
                                                            <div class="list" data-ui-list="b-r b-3x b-primary" data-ui-list-target-class="show" id="user">

                                                                <?php
                                                                if(isset($msg))
                                                                    echo $msg;
                                                                foreach($users as $user){
                                                                    ?>

                                                                    <div class="list-item ">
                                                                        <div class="list-left">
										      			        <span class="w-40 avatar circle blue-grey">
										      			             </span>
                                                                        </div>
                                                                        <div class="list-body">
                                                                            <div class="pull-right dropdown">
                                                                                <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                                                            </div>
                                                                            <div class="item-title"  id="<?php echo $user->id?>">
                                                                                <a href="#" class="_500" id="user_d">
                                                                                    <?php
                                                                                    if($this->aauth->is_banned($user->id)) {
                                                                                        ?>
                                                                                        <span class="nav-label">
                                                                                        <b class="label warn rounded">Banned</b>
                                                                                    </span>
                                                                                        <?php
                                                                                    }
                                                                                    echo ucwords($user->username); ?></a>
                                                                            </div>
                                                                            <small class="block text-muted text-ellipsis">
                                                                                <?php echo $user->email?>
                                                                            </small>
                                                                        </div>
                                                                    </div>

                                                                <?php }?>
                                                            </div>
                                                            <!-- / -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- footer -->
                                <div class="white bg p-a b-t clearfix">
                                    <div class="btn-group pull-right">
                                        <?php echo $this->pagination->create_links(); ?>
                                        <!--<a href="#" class="btn btn-xs white circle"><i class="fa fa-fw fa-angle-left"></i></a>
                                        <a href="#" class="btn btn-xs white circle"><i class="fa fa-fw fa-angle-right"></i></a>-->
                                    </div>
                                </div>
                                <!-- / -->
                            </div>
                        </div>
                        <div class="col-xs hidden-lg-up" id="detail">

                        </div>


