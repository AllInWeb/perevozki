<table class="about_us">
    <td class="banners">
        <?php print render($banner); ?>
    </td>
    <td class="about-info">
        <?php print render($content['field_image_about_us']); ?>
        <h1><?php print $title; ?></h1>
        <?php print render($content['body']); ?>
    </td>
</table>