<div class="article-main">
    <div class="images">
        <div class="image-big">
            <?php print render($content['field_image'][0]); ?>
        </div>
        <div class="image-small">
            <?php print render($content['field_image']); ?>
        </div>
    </div>
    <h1><?php print $title; ?></h1>
    <?php print render($content['body']); ?>
</div>