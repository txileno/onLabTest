<?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footerColumn3') ) :

    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>
    <body>
        <header class="site-header">
            <div class="container-fluid">
                <div class="row justify-content-between padding-top-10 padding-bottom-15">
                    <div class="col-3 header-left-section header-title">
                        <a href="#">somesite.org</a>
                    </div>
                    <div class="col-6 header-right-section">
                        <div class="header-menu">
                            <nav class="nav-list">
                                <?php
                                    wp_nav_menu(array('theme_location' => 'headerMenuLocation'));
                                ?>
                            </nav>
                        </div>
                        <?php before_menu_hook()?>
                    </div>
                </div>
            </div>
        </header>
