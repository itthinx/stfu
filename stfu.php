<?php
/**
 * stfu.php
 *
 * Plugin Name: STFU
 * Plugin URI: https://github.com/itthinx/stfu
 * Description: A <a href="https://wordpress.org/support/article/must-use-plugins/">Must Use Plugin</a> that excludes deprecated notices from being logged. Must reside in the site's <code>mu-plugins</code> folder.
 * Version: 1.0.0
 * Author: itthinx
 * Author URI: https://www.itthinx.com
 * License: GPLv3
 */

//
// This plugin uses the error_reporting() function which is documented here: https://www.php.net/manual/en/function.error-reporting
// 
// Report all except deprecated ...
error_reporting( E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED );

//
// You can also fine-tune the error levels that are reported, for example to exclude also warnings and notices:
//
// error_reporting( E_ALL & ~E_WARNING & ~E_DEPRECATED & ~E_USER_DEPRECATED & ~E_NOTICE );
