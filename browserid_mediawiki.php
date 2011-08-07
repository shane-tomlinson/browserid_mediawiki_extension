<?php

// This line should be included for security reasons apparently
if ( !defined( 'MEDIAWIKI' ) ) die();

/**
 * It's usual to create a header like this, describing your
 * extension a bit...
 */


// This is where you 'register' your extension with Special:Version
$wgExtensionCredits['parserhook']['specialpage'] = array(
        'path' => __FILE__,
        'name' => 'browserid_mediawiki',
        'description' => 'User authentication using BrowserID',
        'author' => 'Shane Tomlinson',
        'url' => 'http://www.shanetomlinson.com',
        'version' => '0.0.1a'
);




$wgBrowserIDOptions = array();
$wgBrowserIDOptions['button'] = 'https://browserid.org/i/sign_in_blue.png';

$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['SpecialBrowserIDLogin'] = $dir . 'SpecialBrowserIDLogin.php';
$wgAutoloadClasses['BrowserIDHooks'] = $dir . 'browserid_mediawiki.hooks.php';
$wgAutoloadClasses['BrowserIDVerify'] = $dir . 'browserid_mediawiki.login.php';
$wgSpecialPages['BrowserIDLogin'] = 'SpecialBrowserIDLogin';

$wgHooks['BeforePageDisplay'][] = 'BrowserIDHooks::BeforePageDisplay';

$wgShowExceptionDetails = true; 

$wgAjaxExportList[] = 'verifyAssertion';
function verifyAssertion($assertion) {
  return BrowserIDVerify::login('localhost', $assertion); 
}
?>
