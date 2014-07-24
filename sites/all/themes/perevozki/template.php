<?php

function perevozki_preprocess_node(&$variables) {
    $variables['banner'] = block_get_blocks_by_region('banner');
}