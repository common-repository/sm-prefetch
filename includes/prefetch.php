<?php

/**
 * Prefetch Function.
 * First, load the Algorithm using CDN
 * Second, load the logic in WordPress
 * Exclude Pages that generated by WooCommerce from being cached
 */

function sm_prefetch_no_wc()
{
    wp_enqueue_script('sm-prefetch-script-1-no-wc', 'https://cdnjs.cloudflare.com/ajax/libs/quicklink/2.3.0/quicklink.umd.js', [], '', true);
    wp_enqueue_script('sm-prefetch-script-2-no-wc', plugins_url('/script.js', __FILE__), [], '', true);
}

/**
 * This function will remove all your WordPress JavaScript Versioning.
 * Why remove though? Because the downside having the version is bigger than keeping it.
 */
function removeJsVersion($src)
{
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}

/**
 * Execute the Code
 */
add_action('wp_enqueue_scripts', 'sm_prefetch_no_wc', 99);
add_filter('script_loader_src', 'removeJsVersion', 99);