<?php
/*******************************************************************
* Web2VPN is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Web2VPN
* and/or its licensors, successors and assigners. All rights reserved.
******************************************************************/

function preRequest() {
	global $toSet;
	$toSet[CURLOPT_USERAGENT] = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.1)';
}
