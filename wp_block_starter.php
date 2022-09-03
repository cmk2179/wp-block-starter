<?php
/**
 * Plugin name: WP Block Starter
 */

if (!function_exists("wp_block_starter_register_blocks")) {
    function wp_block_starter_register_blocks()
    {
        register_block_type(__DIR__ . "/build/blocks/sample-block");
    }
}

add_action("init", "wp_block_starter_register_blocks");
