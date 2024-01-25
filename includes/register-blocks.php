<?php

function ept_cookie_register_blocks() {
    $blocks = [
        [ 'name' => 'banner', 'options' => [
        'render_callback' => 'ept_cookie_banner_render_cb'
        ]],
        [ 'name' => 'locationeer', 'options' => [
            'render_callback' => 'ept_cookie_locationeer_render_cb'
            ]],
    ];
 
    foreach($blocks as $block){
        register_block_type(
            EPT_COOKIES_DIR . 'build/blocks/'. $block['name'] .'/block.json',
            isset($block['options']) ? $block['options'] : []
        );
    }
} 