<?php
/*******************************************************************
* Web2VPN is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Web2VPN
* and/or its licensors, successors and assigners. All rights reserved.
*
******************************************************************/

$options['stripJS'] = true;
$options['allowCookies'] = true;

function preRequest() {
	global $URL;
	if ($URL['host'] != 'm.facebook.com') {
		$URL['host'] = preg_replace('/((www\.)?facebook\.com)/', 'm.facebook.com', $URL['host']);
		$URL['href'] = preg_replace('/\/\/((www\.)?facebook\.com)/', '//m.facebook.com', $URL['href']);
	}
}
