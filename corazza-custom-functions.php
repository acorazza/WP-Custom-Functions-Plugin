<?php

/**
* Plugin Name: Corazza Custom Functions
* Description: This plugin contains custom functions for the website theme.
* Author: Alessandro Corazza
* Version: 1.0
*/

/* GA */

add_action( 'wp_head', 'ps_google_analytics' );

function ps_google_analytics() { ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-26515983-1"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-26515983-1');
            </script>
<?php }