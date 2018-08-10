<header class="header">
    <div class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <h2 class="uk-heading-primary"><?= $title ?></h2>
            <p><?= $lead ?></p>

            <?php
                /**
                 * Functions hooked into `theme/header/end` action.
                 *
                 * @hooked Tonik\Theme\App\Structure\render_documentation_button - 10
                 */
                do_action('theme/header/end')
            ?>
        </div>
    </div>
</header>
