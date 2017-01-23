<?php
/*******************************************************************
* Web2VPN is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Web2VPN
* and/or its licensors, successors and assigners. All rights reserved.
******************************************************************/

function preParse($input, $type) {
	switch($type) {
		case 'css':
			$input = preg_replace('#masthead\-positioner\{[^\}]+\}#s', 'masthead-positioner{position:absolute;top:100;right:0;left:0;z-index:1999999999}', $input);

		break;
	}

	return $input;
}
