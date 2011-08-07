<?php
Class BrowserIDHooks {
  public static function BeforePageDisplay( &$out, &$sk ){
    global $wgScriptPath;
    $out->addScriptFile( "https://browserid.org/include.js" );
    
    $out->addScriptFile( "{$wgScriptPath}/extensions/browserid_mediawiki/scripts/login.js" );
    return true;
  }
}
?>
