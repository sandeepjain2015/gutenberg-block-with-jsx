<?php
/**
 * Plugin Name: Gutenberg block with jsx
 * Plugin URI: https://github.com/sandeepjain2015/gutenberg-block-with-jsx
 * Description: A simple example of using jsx with Gutenberg
 * Author: byjsx
 * Author URI: https://github.com/sandeepjain2015
 * Version: 1.0.0
 * License: GPLv2 or later
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */

function my_theme_ragister_block_type($block,$options=array()) {
    register_block_type('myjsxblock/'.$block,
    array_merge(
        array(
            'editor_script'=>'mytheme_blocks_editor_script',
        ),
        $options
    ),
    );
}
 function my_theme_blocks(){
     wp_enqueue_script( 
         'mytheme_blocks_editor_script',
        plugins_url( 'js/block.build.js', __FILE__ ),
         array('wp-blocks','wp-i18n','wp-element'),
          '1.781',
          true 
        );
        my_theme_ragister_block_type('first');
 }
add_action( 'init', 'my_theme_blocks' );