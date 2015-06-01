<?php
$title = array();
if ($this->method == 'edit'):
    $title = sprintf(lang('groups:edit_title'), $group->name);
else:
    $title = lang('groups:add_title');
endif;
?>


<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="#" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                    <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                </div><!-- panel-btns -->
                <h4 class="panel-title"><?php echo $title ?></h4>
                <p>Tại đây bạn có thể thêm hoặc chỉnh sửa nhóm thành viên</p>
            </div><!-- panel-heading -->

            <div class="panel-body nopadding">
                <?php echo form_open(uri_string(), 'class="form-horizontal form-bordered"') ?>


                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo lang('groups:name'); ?> <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <?php echo form_input('description', $group->description, 'class="form-control"'); ?>
                    </div>
                </div>
                <!-- form-group -->
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo lang('groups:short_name'); ?> <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <?php if (!in_array($group->name, array('user', 'admin'))): ?>
                            <?php echo form_input('name', $group->name, 'class="form-control"'); ?>

                        <?php else: ?>
                            <p><?php echo $group->name ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <!-- form-group -->

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))) ?>
                    </div>
                </div>

                <?php echo form_close() ?>        
            </div><!-- panel-body -->       
        </div>

    </div>
</div>

<script type="text/javascript">
    jQuery(function ($) {
        $('form input[name="description"]').keyup($.debounce(300, function () {

            var slug = $('input[name="name"]');

            $.post(SITE_URL + 'ajax/url_title', {title: $(this).val()}, function (new_slug) {
                slug.val(new_slug);
            });
        }));
    });
</script>