<ul class="nav nav-pills nav-stacked">

    <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

    <?php
    // Display the menu items.
    // We have already vetted them for permissions
    // in the Admin_Controller, so we can just
    // display them now.
    $i = 0;
    foreach ($menu_items as $key => $menu_item) {
        $i++;
        switch ($i) {
            case 1:
                $class = 'fa fa-file-text';
                break;
            case 2:
                $class = 'fa fa-building';
                break;
            case 3:
                $class = 'fa fa-database';
                break;
            case 4:
                $class = 'fa fa-user';
                break;
            case 5:
                $class = 'fa fa-gears';
                break;
            case 6:
                $class = 'fa fa-plus';
                break;
            case 7:
                $class = 'fa fa-lock';
                break;
        }
        
        
        if (is_array($menu_item)) {
            echo '<li class="parent"><a href="' . current_url() . '#" class="top-link"><i class="'.$class.'"></i> <span>' . lang_label($key) . '</span></a><ul class="children">';

            foreach ($menu_item as $lang_key => $uri) {
                echo '<li><a href="' . site_url($uri) . '" class="">' . lang_label($lang_key) . '</a></li>';
            }

            echo '</ul></li>';
        } elseif (is_array($menu_item) and count($menu_item) == 1) {
            foreach ($menu_item as $lang_key => $uri) {
                echo '<li><a href="' . site_url($menu_item) . '" class="top-link no-submenu"><i class="'.$class.'"></i> <span>' . lang_label($key) . '</span></a></li>';
            }
        } elseif (is_string($menu_item)) {
            echo '<li><a href="' . site_url($menu_item) . '" class="top-link no-submenu"><i class="'.$class.'"></i> <span>' . lang_label($key) . '</span></a></li>';
        }
    }
    ?>

</ul>

