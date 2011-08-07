<?php
class SpecialBrowserIDLogin extends SpecialPage {
        function __construct() {
                parent::__construct( 'BrowserIDLogin' );
                wfLoadExtensionMessages('BrowserIDLogin');
        }

        function execute( $par ) {
                global $wgRequest, $wgOut;

                $this->setHeaders('Login');

                # Get request data from, e.g.
         		$param = $wgRequest->getText('param');

         		$output='<a href="#">' .
						   '<img id="login" src="https://browserid.org/i/sign_in_blue.png" alt="Login"/>' .
         				'</a>';


                $wgOut->addHTML( $output );
        }
}

?>
