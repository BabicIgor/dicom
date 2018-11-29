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
                                    <div class="list" data-ui-list="b-r b-3x b-primary" data-ui-list-target="#detail" data-ui-list-target-class="show" id="page">

                                        <?php
                                        if(!empty($pages)) {
                                            foreach ($pages as $page) {
                                                ?>


                                                <div class="list-item ">
                                                    <div class="list-body">
                                                        <div class="pull-right dropdown">
                                                            <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                                    class="fa fa-fw fa-ellipsis-v"></i></a>

                                                            <div class="dropdown-menu pull-right text-color"
                                                                 role="menu">
                                                                <?php echo anchor('page/visit/' . $page->id.'/'.$funnel_id.'/'.$type, '<i class="fa fa-download"></i>Visit Page', 'class="dropdown-item"') ?>

                                                                <?php
                                                                if(isset($user_id)) {
                                                                    echo anchor('page/edit_page/' . $page->id.'/'.$user_id.'/'.$funnel_id.'/'.$type, '<i class="fa fa-edit"></i>Edit Page', 'class="dropdown-item"');
                                                                    echo anchor('page/delete_page/' . $page->id.'/'.$user_id.'/'.$funnel_id.'/'.$type, '<i class="fa fa-trash"></i>Delete Page', 'class="dropdown-item" onclick="if(!confirm(\'Are you sure you want to delete this page?\')){ return false; }"');
                                                                    if(!$this->aauth->is_admin($user_id)) {
                                                                        echo $default_id == $page->id ? "" : anchor('page/set_default_page/' . $page->id . '/' . $user_id, '<i class="fa fa-refresh"></i>Set Default Page', 'class="dropdown-item"');
                                                                    }
                                                                }else{
                                                                    echo anchor('page/edit_page/' . $page->id.'/'.$funnel_id.'/'.$type, '<i class="fa fa-edit"></i>Edit Page', 'class="dropdown-item"');
                                                                    echo anchor('page/delete_page/' . $page->id.'/'.$funnel_id.'/'.$type, '<i class="fa fa-trash"></i>Delete Page', 'class="dropdown-item" onclick="if(!confirm(\'Are you sure you want to delete this page?\')){ return false; }"');
                                                                    if(!$this->aauth->is_admin($user_id)) {
                                                                        echo $default_id == $page->id ? "" : anchor('page/set_default_page/' . $page->id, '<i class="fa fa-refresh"></i>Set Default Page', 'class="dropdown-item"');
                                                                    }
                                                                }
                                                                ?>
                                                                <?php echo anchor('page/download/' . $page->id, '<i class="fa fa-download"></i>Download Page', 'class="dropdown-item"') ?>

                                                            </div>
                                                        </div>
                                                        <?php if($default_id == $page->id){?>
                                                            <span class="nav-label">
                                                                                <b class="label warn rounded">Default Page</b>
                                                                            </span>
                                                        <?php }?>
                                                        <div class="item-title" id="<?php echo $page->id ?>" rel="<?php echo $user_id ?>">
                                                            <a href="#" class="_500" id="user_d">
                                                                <?php
                                                                //echo $home_id == $page->id?'<span class="nav-label"><b class="label warn rounded">Home page</b></span>':"";
                                                                echo strpos($page->title, "----") ? ucwords(substr($page->title, 0, strpos($page->title, "----"))) : ucwords($page->title);  ?></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php }
                                        }else{
                                            echo "<span class='text-center'>".$this->functions->show_msg("There are no Pages.","info")."</span>";
                                        }?>

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
<input type="hidden" value="<?php echo $funnel_id;?>" id="funnel_id"/>
</div>


