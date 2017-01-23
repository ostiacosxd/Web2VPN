<?php
/*******************************************************************
* Web2VPN is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Web2VPN
* and/or its licensors, successors and assigners. All rights reserved.
******************************************************************/

function preParse($html,$type) {
	if ( stripos($html,'JavaScript required to sign in') ) {
		header("Location: " . proxyURL('https://mid.live.com/si/login.aspx'));
		exit;
	}
    return $html;
}
