<?php

/**
 * Prefetch Function.
 * First, load the Algorithm using CDN
 * Second, load the logic in WordPress
 * Exclude Pages that generated by WooCommerce from being cached
 */

function sm_prefetch_with_wc()
{
    if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
        wp_enqueue_script('sm-prefetch-script-2-wc', plugins_url('/wc-script.js', __FILE__), [], '', true);
    } else {
        wp_enqueue_script('sm-prefetch-script-1-wc', 'https://cdnjs.cloudflare.com/ajax/libs/quicklink/2.3.0/quicklink.umd.js', [], '', true);
        wp_enqueue_script('sm-prefetch-script-2-wc', plugins_url('/script.js', __FILE__), [], '', true);
    }
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
add_action('wp_enqueue_scripts', 'sm_prefetch_with_wc', 99);
add_filter('script_loader_src', 'removeJsVersion', 99);