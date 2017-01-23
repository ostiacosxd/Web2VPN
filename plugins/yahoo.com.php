<?
/*******************************************************************
* Web2VPN is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Web2VPN
* and/or its licensors, successors and assigners. All rights reserved.
******************************************************************/

define('mobilemail',proxyURL('http://m.yahoo.com/mail'));
if(stripos($toLoad,'mail.yahoo.com')){header('Location: '.mobilemail);exit;}
function preParse($html,$type){
	if($type=='html') {
		$html = preg_replace('#r/(m6|lk|l6|m7|m2|l4)#', mobilemail, $html);
	}
	return $html;
}
