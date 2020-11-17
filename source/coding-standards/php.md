---
title: PHP Coding Standards
description:
extends: _layouts.main
section: content
---

# PHP Coding Standards

## Style
Add comments using **DocBlock** syntax. An example of a DocBlock comment describing a function:
```php
/**
 * Provide a custom display key for a WC order item.
 *
 * @param  string        $key
 * @param  WC_Meta_Data  $meta
 * @param  WC_Order_Item $item
 */
add_filter('woocommerce_order_item_display_meta_key', function ($key, $meta, $item) {
  ...
```

## Organization
PHP code should be logically organized by its purpose. In the context of our starter theme, the majority of this code would normally be placed in a `functions.php` file to extend or customize WordPress functionality. Rather than place all this code in one long functions.php file, we instead recommend organizing it inside the `/app` directory (either by adding it to an existing file or creating a new one).

For example:

* `/app/gravityforms.php` contains modifications for Gravity Forms
* `/app/extras.php` contains any custom helper functions
* `/app/nav.php` contains any modifications to the WordPress navigation walker
* `/app/woocommerce.php` contains any modifications for WooCommerce actions

## Errors
When developing for WordPress, catching and correcting errors before a website goes live is essential to its success. When working locally on a WordPress project, always use the `WP_DEBUG` constant to identify and fix issues (notices, warnings, and fatal errors) before they make it to production.

```php
// wp-config.php

define( 'WP_DEBUG', TRUE );
```

As of WordPress 5.5, we can now use `wp_get_environment_type()` function in our projects. This native functionality can now allow our team to execute code on different environments (dev, staging, or production). When `development` is returned from this function, `WP_DEBUG` will be automatically set to `TRUE` (if it is not already defined in wp-config.php).

## Additional Resources
* [PHP](https://www.php.net/)
* [WordPress Developer Resources](https://developer.wordpress.org/)
* [Roots Sage](https://roots.io/sage/)
* [Laravel Blade](https://laravel.com/docs/8.x/blade)
* [Composer](https://getcomposer.org/)
