<div class="row">
    <div class="col-md-6">

        <section class="title">
            <h4><?php echo $module_details['name'] ?></h4>
        </section>
        <section class="item">
            <div class="content">
                <p><?php echo lang('permissions:introduction') ?></p>
                <table border="0" class="table table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo lang('permissions:group') ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($groups as $group): ?>
                            <tr>
                                <td><?php echo $group->description ?></td>
                                <td class="buttons actions">
                                    <?php if ($admin_group != $group->name): ?>
                                        <?php echo anchor('admin/permissions/group/' . $group->id, lang('permissions:edit'), array('class' => 'btn btn-rounded btn-xs btn-default')) ?>
                                    <?php else: ?>
                                        <?php echo lang('permissions:admin_has_all_permissions') ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
