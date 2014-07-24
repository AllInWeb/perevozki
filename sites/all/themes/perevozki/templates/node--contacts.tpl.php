<div class="contacts">
    <h1><?php print $title; ?></h1>
    <div class="contacts-info">
        <?php print render($content['field_address']); ?><br>
        <?php print render($content['field_grafik']); ?><br>
        <?php print render($content['field_phone']); ?><br>
        <?php print render($content['field_email']); ?>
    </div>
    <div style="float: left">
    <?php print render($content['field_map']); ?>
    </div>
</div>