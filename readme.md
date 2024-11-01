# SM - Prefetch

Contributors: sulaimanmisri

Tags: speed optimization, prefetch, bani kelajuan

Requires at least: 5.0

Tested up to: 6.1.1

Stable tag: 1.5

License: GPLv2 or later

Requires PHP: 7.0

## Description

SM Fetch is built to make your website load blazing fast using Prefetch Algorithm. In order to make this plugin work perfectly, you need to :

1. Have multiple pages in the website. But single page also work, as long as you have Button to link to other pages / website.
2. This plugin handle the front-end caching. If your current plugin is already handle that part, you can disable that function and use this plugin function to see the differences.

<!-- ## Do not install if you're : -->

## How this plugin work?

1. User visits a page.
2. In the background, the algorithm will prefetches other pages data.
3. When the user visits the next page, it will loads faster because it's already downloaded.
4. The data will be stored at User browser (front-end). Not server (back-end).

## Installation

1. Upload the plugin folder to your /wp-content/plugins/ folder.
2. Go to the **Plugins** page and activate the plugin.

## Frequently Asked Questions

### How do I use this plugin?

1. Simply install the plugin and then the plugin will make a prefetch automatic to all your pages. It just works!

### How to uninstall the plugin?

1. Simply deactivate and delete the plugin.

### Do you offer PRO version?

1. No. This plugin will be free. Always.
2. But I do accept Freelance work. Please go to my website (https://sulaimanmisri.com).

## Changelog

### 1.5.1

- Create new logic for woocommerce plugin.
- Fix Website show `Critical Error` when there's no Woocommerce plugin active.
- Introducing `prefetch-wc` for Woocommerce user.
- Introduction `is_cart`, `is_checkout`, `is_account_page` to make sure all Woocommerce pages is excluded.

### 1.5.0

- Exclude all Woocommerce Pages using `is_woocommerce` and `woocommerce_myaccount_page_id` built-in function.
- Fix Woocommerce theme such as Storefront not load data in `my-accounts` page.
- Fix `my-accounts` page not changed even after user save the details.

### 1.4.2

- Change from Event `DOMContentLoaded` into `Load` as the original developers suggest.

### 1.4.1

- Fix the plugin is not compatible with Oxygen and Breakdance Page Builder.
- Fix the plugin is not compatible with Twenty-Two Theme.
- Change from `get_footer` hook to `wp_enqueue_scripts` hook.
- Change from Event `Load` into `DOMContentLoaded` to make the code load Async-like.

### 1.4.0

- Enqueue the script properly using WordPress default `wp_enqueue_script`.
- Adding new function, which is to remove all the versioning tag in WordPress JavaScript file.
- Refactoring files.

### 1.3.0

- Change from serve locally to serve JS file using CDN.
- Remove Assets.
- Change content.

### 1.2.2

- Fix WordPress error show Header Send even though nothing will happen.
- Optimize and remove unused images.

### 1.2.1

- Edit content.

### 1.2.0

- Change Plugin Descriptions.
- Insert Assets.

### 1.1.0

- Fix plugin and serve all the files locally.

### 1.0.0

- Plugin released.
