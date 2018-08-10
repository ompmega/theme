<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="app" class="uk-offcanvas-content">
            <div class="uk-navbar-container">
                <nav class="uk-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" href="<?= get_home_url(); ?>"><?= bloginfo('name'); ?></a>
                        <?php wp_nav_menu([
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'uk-navbar-nav uk-visible@m'
                        ]); ?>
                    </div>
                </nav>
            </div>
