<section class="title">
    <h4><?php echo $module_details['name'] ?></h4>
</section>

<?php if ($setting_sections): ?>
    <?php echo form_open('admin/settings/edit', 'class="crud"'); ?>


    <ul class="nav nav-tabs">
        <?php
        $i = 0;
        foreach ($setting_sections as $section_slug => $section_name):
            $i++;
            ?>

            <li class="<?php if ($i == 1) echo 'active' ?>">
                <a href="#<?php echo $section_slug ?>" data-toggle="tab">
                    <strong><?php echo $section_name ?></strong>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="tab-content mb30">
        <?php
        $i = 0;
        foreach ($setting_sections as $section_slug => $section_name):
            $i++;
            ?>
            <div class="tab-pane <?php if ($i == 1) echo 'active' ?>" id="<?php echo $section_slug; ?>">
                        <?php
                        $section_count = 1;
                        foreach ($settings[$section_slug] as $setting):
                            ?>
                            <div id="<?php echo $setting->slug ?>" class="form-group <?php echo $section_count++ % 2 == 0 ? 'even' : '' ?>">
                                <label for="<?php echo $setting->slug ?>">
                                    <?php echo $setting->title ?>
                                    <?php
                                    if ($setting->description): echo '<small>' . $setting->description . '</small>';
                                    endif
                                    ?>
                                </label>

                                <div class="input <?php echo 'type-' . $setting->type ?>">
                                    <?php echo $setting->form_control ?>
                                </div>
                                <span class="move-handle"></span>
                            </div>
                        <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </div>

    <div class="buttons padding-top">
        <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save'))) ?>
    </div>

    <?php echo form_close() ?>
<?php else: ?>
    <div>
        <p><?php echo lang('settings:no_settings'); ?></p>
    </div>
<?php endif ?>
