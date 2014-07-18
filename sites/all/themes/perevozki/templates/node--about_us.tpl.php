<div class="about_us">
    <div class="banners">
        <?php print render($banner); ?>
    </div>
    <div class="about-info">
        <?php print render($content['field_image_about_us']); ?>
        <h1><?php print $title; ?></h1>
        <?php print render($content['body']); ?>
    </div>
</div>