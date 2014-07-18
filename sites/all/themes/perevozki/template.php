<?php

function perevozki_preprocess_node(&$variables) {
    //бла-бла-бла
    $variables['banner'] = block_get_blocks_by_region('banner');
}