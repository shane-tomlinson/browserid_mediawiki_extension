<?php
class SpecialBrowserIDLogin extends SpecialPage {
  function __construct() {
    parent::__construct( 'BrowserIDLogin' );
    wfLoadExtensionMessages('BrowserIDLogin');
  }

  function execute( $par ) {
    global $wgRequest, $wgOut, $wgBrowserIDOptions;

    $this->setHeaders();

    # Get request data from, e.g.
    $param = $wgRequest->getText('param');

    $output='<a href="#" id="login">' .
       '<img src="' . $wgBrowserIDOptions['button'] . '" alt="Login"/>' .
    '</a>';


    $wgOut->addHTML( $output );
  }
}

?>
