<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from themepixels.com/demo/webpage/chain/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 May 2015 08:01:29 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $this->settings->site_name; ?> - <?php echo lang('login_title'); ?></title>


        <?php Asset::css('style.default.css'); ?>

        <?php Asset::js('jquery/jquery.js'); ?>
        <?php Asset::js('admin/login.js'); ?>

        <?php echo Asset::render() ?>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="signin">


        <section>

            <div class="panel panel-signin">
                <div class="panel-body">
                    <div class="logo text-center">
                        <?php echo  Asset::img('logo-primary.png', 'Chain Logo') ?>
                    </div>
                    <br />
                    <h4 class="text-center mb5">Already a Member?</h4>
                    <p class="text-center">Sign in to your account</p>

                    <div class="mb30"></div>
                    <?php $this->load->view('admin/partials/notices') ?>
                    <?php echo form_open('admin/login'); ?>
                    <div class="input-group mb15">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Username">
                    </div><!-- input-group -->
                    <div class="input-group mb15">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="<?php echo lang('global:password'); ?>">
                    </div><!-- input-group -->

                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="ckbox ckbox-primary mt10">
                                <input type="checkbox" id="rememberMe" name="remember" checked="">
                                <label for="rememberMe"><?php echo lang('user:remember'); ?></label>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-success">Sign In <i class="fa fa-angle-right ml5"></i></button>
                        </div>
                    </div>                      
                    <?php echo form_close() ?>

                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="signup.html" class="btn btn-primary btn-block">Not yet a Member? Create Account Now</a>
                </div><!-- panel-footer -->
            </div><!-- panel -->

        </section>


    </body>

    <!-- Mirrored from themepixels.com/demo/webpage/chain/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 May 2015 08:01:30 GMT -->
</html>
