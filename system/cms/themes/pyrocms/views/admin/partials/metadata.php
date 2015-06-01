<?php
Asset::js(
        array(
            'jquery-1.11.1.min.js',
            'jquery-migrate-1.2.1.min.js',
            'bootstrap.min.js',
            'modernizr.min.js',
            'pace.min.js',
            'retina.min.js',
            'jquery.cookies.js',
            'custom.js',            
));
?>


<script type="text/javascript">
    pyro = {'lang': {}};
    var APPPATH_URI = "<?php echo APPPATH_URI; ?>";
    var SITE_URL = "<?php echo rtrim(site_url(), '/') . '/'; ?>";
    var BASE_URL = "<?php echo BASE_URL; ?>";
    var BASE_URI = "<?php echo BASE_URI; ?>";
    var UPLOAD_PATH = "<?php echo UPLOAD_PATH; ?>";
    var DEFAULT_TITLE = "<?php echo addslashes($this->settings->site_name); ?>";
    pyro.admin_theme_url = "<?php echo BASE_URL . $this->admin_theme->path; ?>";
    pyro.apppath_uri = "<?php echo APPPATH_URI; ?>";
    pyro.base_uri = "<?php echo BASE_URI; ?>";
    pyro.lang.remove = "<?php echo lang('global:remove'); ?>";
    pyro.lang.dialog_message = "<?php echo lang('global:dialog:delete_message'); ?>";
    pyro.csrf_cookie_name = "<?php echo config_item('cookie_prefix') . config_item('csrf_cookie_name'); ?>";
</script>

<?php echo Asset::render(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->


<?php echo $template['metadata']; ?>
