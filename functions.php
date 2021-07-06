<?php

/**
* Plugin Name: Corazza Custom Functions
* Description: This plugin contains custom functions for the website theme.
* Author: Alessandro Corazza
* Version: 1.0
*/

// 🔍🔍🔍 Google Analytics Tracking Code

add_action( 'wp_head', 'ps_google_analytics' );

function ps_google_analytics() { ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=""></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-26515983-1');
            </script>
<?php }