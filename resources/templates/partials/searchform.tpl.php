<form class="uk-form" action="/" method="GET">
    <label for="search" class="uk-form-label uk-hidden">Search</label>
    <div class="uk-grid uk-child-width-expand uk-grid-collapse" uk-grid>
        <div>
            <input
                type="text"
                class="uk-input"
                id="search"
                name="s"
                value="<?php the_search_query(); ?>"
                placeholder="<?= __('Searching for...', Tonik\Theme\App\config('textdomain')) ?>">
        </div>
        <div class="uk-width-auto">
            <button type="submit" class="uk-button uk-button-primary">Search</button>
        </div>
    </div>
</form>
