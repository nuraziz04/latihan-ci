<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'          => 'ProUI Frontend',
    'author'        => 'pixelcave',
    'robots'        => 'noindex, nofollow',
    'title'         => 'cv dwi abadi teknik',
    'description'   => 'ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.',
    // true             for a boxed layout
    // false            for a full width layout
    'boxed'         => false,
    'active_page'   => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array) */
$primary_nav = array(
    array(
        'name'  => 'Home',
        'url'   => base_url()
    ),
    array(
        'name'  => 'Product',
        'url'   => base_url('product')
    ),
    array(
        'name'  => 'Features',
        'url'   => 'features.php'
    ),
    array(
        'name'  => 'Pricing',
        'url'   => 'pricing.php'
    ),
    array(
        'name'  => 'Contact',
        'url'   => 'contact.php'
    ),
    array(
        'name'  => 'About',
        'url'   => 'about.php'
    )
);