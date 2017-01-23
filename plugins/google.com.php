<?php
/*******************************************************************
* Web2VPN is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Web2VPN
* and/or its licensors, successors and assigners. All rights reserved.
******************************************************************/

function preParse($html,$type) {
	if (stripos($html,'loadingError')) {
		header("Location: ".proxyURL('http://mail.google.com/mail/?ui=html'));
		exit;
	}
	$html = preg_replace('#viewport\{position:absolute;top:0;#s', 'viewport{position:absolute;top:100;', $html);
	return $html;
}
function postParse(&$in,$type) {
	$in = preg_replace('# style="padding-top:\d+px"#', '', $in);
	return $in;
}
