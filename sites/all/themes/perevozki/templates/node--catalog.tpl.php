<?php if ($teaser): ?>
    <div class="catalog-main">
        <?php print render($content['field_image_catalog']); ?>
        <h2><?php print $title; ?></h2>
        <?php print render($content['body']); ?>
    </div>
<?php endif ?>