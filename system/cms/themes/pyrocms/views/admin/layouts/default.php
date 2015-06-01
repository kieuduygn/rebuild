<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $template['title'] . ' - ' . lang('cp:admin_title') ?></title>

        <?php echo Asset::css('style.default.css') ?>
        <?php echo Asset::css('rain.css') ?>

        <?php file_partial('metadata'); ?>
    </head>

    <body>

        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <?php echo Asset::img('logo.png', "Logo Image") ?>
                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->

                <div class="header-right">

                    <div class="pull-right">


                        <form class="topbar-search form form-search">
                            <input type="text" class="search-query form-control" id="nav-search" placeholder="<?php echo lang("cp:search"); ?>" ontouchstart="">
                        </form>



                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->

                    </div><!-- pull-right -->

                </div><!-- header-right -->

            </div><!-- headerwrapper -->
        </header>

        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <?php echo Asset::img('photos/profile.png', 'Profile Image', array('class' => 'img-circle')) ?>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Elen Adarna</h4>
                            <small class="text-muted">Beach Lover</small>
                        </div>
                    </div><!-- media -->

                    <h5 class="leftpanel-title">Navigation</h5>
                    <?php file_partial('navigation') ?>
                </div><!-- leftpanel -->

                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media pull-left">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo base_url('admin') ?>"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><?php echo $module_details['name'] ? anchor('admin/' . $module_details['slug'], $module_details['name']) : lang('global:dashboard') ?></li>
                                </ul>
                                <h4><?php echo $module_details['name'] ? anchor('admin/' . $module_details['slug'], $module_details['name']) : lang('global:dashboard') ?></h4>
                            </div>
                        </div><!-- media -->
                        <div class="pull-right">
                            <?php file_partial('shortcuts') ?>
                        </div>
                    </div><!-- pageheader -->

                    <div class="contentpanel">

                        <?php echo $template['body']; ?>

                    </div><!-- contentpanel -->

                </div>
            </div><!-- mainwrapper -->
        </section>



    </body>
</html>
