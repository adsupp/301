<?php
// *************************************************************************
// *                                                                       *
// * Adsupp Mobile & Web Advertising Company						       *
// * web: adsupp.com							                           *
// * mail: contact@adsupp.com                                              *
// * Crated Date: 2018-04-03                                               *
// *                                                                       *
// *************************************************************************


if (defined('STDIN') == false) {
	die('It only work on command-line ');
}

$baseDir = '/home';
$htaccessFiles = [];

if ($handle = opendir($baseDir)) {

    while (false !== ($site = readdir($handle))) {

        if ($site != "." && $site != "..") {
	
            $htaccessFiles[] = $baseDir . '/' . $site . '/public_html/.htaccess';
        }
    }

    closedir($handle);
}

$oldDomain = $argv[1];
$newDomain = $argv[2];

foreach($htaccessFiles as $file){
	$str=file_get_contents($file);
	$str=str_replace("$oldDomain", "$newDomain",$str);
	file_put_contents($file, $str);
}



?>