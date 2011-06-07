<?php
/**
 * sabretooth.ini.php
 * 
 * Defines initialization settings for sabretooth.
 * DO NOT edit this file, to override these settings use sabretooth.local.ini.php instead.  Any
 * changes in the local ini file will override the settings found here.
 * 
 * @author Patrick Emond <emondpd@mcmaster.ca>
 * @package sabretooth
 */

namespace sabretooth;
global $SETTINGS;

// tagged version
$SETTINGS[ 'general' ][ 'version' ] = '0.1.6';

// always leave as false when running as production server
$SETTINGS[ 'general' ][ 'development_mode' ] = false;
$SETTINGS[ 'general' ][ 'script_name' ] = false === strrchr( $_SERVER['SCRIPT_NAME'], '/' )
                                        ? $_SERVER['SCRIPT_NAME']
                                        : substr( strrchr( $_SERVER['SCRIPT_NAME'], '/' ), 1 );

// system URLs
$SETTINGS[ 'url' ][ 'BASE' ] = ( $_SERVER["HTTPS"] ? 'https' : 'http' ).'://'.$_SERVER["HTTP_HOST"];
$SETTINGS[ 'url' ][ 'FULL' ] = $SETTINGS[ 'url' ][ 'BASE' ].$_SERVER["REQUEST_URI"];

// the location of sabretooth internal path
$SETTINGS[ 'path' ][ 'SABRETOOTH' ] = '/usr/local/lib/sabretooth';

// the location of libraries
$SETTINGS[ 'path' ][ 'ADODB' ] = '/usr/local/lib/adodb';
$SETTINGS[ 'path' ][ 'SHIFT8' ] = '/usr/local/lib/shift8';
$SETTINGS[ 'path' ][ 'PHPEXCEL' ] = '/usr/local/lib/phpexcel';
$SETTINGS[ 'path' ][ 'JS' ] = 'js';
$SETTINGS[ 'path' ][ 'CSS' ] = 'css';

// the url of limesurvey
$SETTINGS[ 'path' ][ 'LIMESURVEY' ] = '/var/www/limesurvey';
$SETTINGS[ 'url' ][ 'LIMESURVEY' ] = $SETTINGS[ 'url' ][ 'FULL' ].'/limesurvey';

// javascript libraries
$SETTINGS[ 'version' ][ 'JQUERY' ] = '1.4.4';
$SETTINGS[ 'version' ][ 'JQUERY_UI' ] = '1.8.9';

$SETTINGS[ 'url' ][ 'JQUERY' ] = $SETTINGS[ 'url' ][ 'BASE' ].'/jquery';
$SETTINGS[ 'url' ][ 'JQUERY_UI' ] = $SETTINGS[ 'url' ][ 'JQUERY' ].'/ui';
$SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ] = $SETTINGS[ 'url' ][ 'JQUERY' ].'/plugins';
$SETTINGS[ 'path' ][ 'JQUERY_UI_THEMES' ] = '/var/www/jquery/ui/css';

$SETTINGS[ 'url' ][ 'JQUERY_JS' ] = 
  $SETTINGS[ 'url' ][ 'JQUERY' ].'/jquery-'.$SETTINGS[ 'version' ][ 'JQUERY' ].'.min.js';
$SETTINGS[ 'url' ][ 'JQUERY_UI_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_UI' ].'/js/jquery-ui-'.$SETTINGS[ 'version' ][ 'JQUERY_UI' ].'.custom.min.js';

$SETTINGS[ 'url' ][ 'JQUERY_LAYOUT_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/layout.js';
$SETTINGS[ 'url' ][ 'JQUERY_COOKIE_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/cookie.js';
$SETTINGS[ 'url' ][ 'JQUERY_HOVERINTENT_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/hoverIntent.js';
$SETTINGS[ 'url' ][ 'JQUERY_METADATA_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/metadata.js';
$SETTINGS[ 'url' ][ 'JQUERY_FLIPTEXT_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/flipText.js';
$SETTINGS[ 'url' ][ 'JQUERY_EXTRUDER_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/extruder.js';
$SETTINGS[ 'url' ][ 'JQUERY_LOADING_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/loading.js';
$SETTINGS[ 'url' ][ 'JQUERY_LOADING_OVERFLOW_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/loading.overflow.js';
$SETTINGS[ 'url' ][ 'JQUERY_JEDITABLE_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/jeditable.js';
$SETTINGS[ 'url' ][ 'JQUERY_TIMEPICKER_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/timepicker.js';
$SETTINGS[ 'url' ][ 'JQUERY_RIGHTCLICK_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/rightClick.js';
$SETTINGS[ 'url' ][ 'JQUERY_TOOLTIP_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/tooltip.js';
$SETTINGS[ 'url' ][ 'JQUERY_JSTREE_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/jsTree.js';
$SETTINGS[ 'url' ][ 'JQUERY_FULLCALENDAR_JS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/fullcalendar.js';

// css files
$SETTINGS[ 'url' ][ 'JQUERY_UI_THEMES' ] = $SETTINGS[ 'url' ][ 'JQUERY_UI' ].'/css';
$SETTINGS[ 'url' ][ 'JQUERY_FULLCALENDAR_CSS' ] =
  $SETTINGS[ 'url' ][ 'JQUERY_PLUGINS' ].'/fullcalendar.css';

// the location of log files
$SETTINGS[ 'path' ][ 'LOG_FILE' ] = '/var/local/sabretooth/log';

// the location of the compiled template cache
$SETTINGS[ 'path' ][ 'TEMPLATE_CACHE' ] =
  '/tmp/sabretooth/'.substr( str_replace( '/', '_', dirname( __FILE__ ) ), 1 );

// database settings
$SETTINGS[ 'db' ][ 'driver' ] = 'mysql';
$SETTINGS[ 'db' ][ 'server' ] = 'localhost';
$SETTINGS[ 'db' ][ 'username' ] = 'sabretooth';
$SETTINGS[ 'db' ][ 'password' ] = '';
$SETTINGS[ 'db' ][ 'database' ] = 'sabretooth';
$SETTINGS[ 'db' ][ 'prefix' ] = '';

// ldap settings
$SETTINGS[ 'ldap' ][ 'server' ] = 'localhost';
$SETTINGS[ 'ldap' ][ 'port' ] = 389;
$SETTINGS[ 'ldap' ][ 'base' ] = '';
$SETTINGS[ 'ldap' ][ 'username' ] = '';
$SETTINGS[ 'ldap' ][ 'password' ] = '';
$SETTINGS[ 'ldap' ][ 'active_directory' ] = true;

// voip settings
$SETTINGS[ 'voip' ][ 'enabled' ] = false;
$SETTINGS[ 'voip' ][ 'url' ] = 'http://localhost:8088/mxml';
$SETTINGS[ 'voip' ][ 'username' ] = '';
$SETTINGS[ 'voip' ][ 'password' ] = '';
$SETTINGS[ 'voip' ][ 'prefix' ] = '';

// the directory to write recorded calls
// (must be an absolute path that the asterisk server's user has access to)
$SETTINGS[ 'path' ][ 'VOIP_MONITOR' ] = '/var/local/sabretooth/monitor';

// themes
$SETTINGS[ 'interface' ][ 'default_theme' ] = 'humanity';
?>
