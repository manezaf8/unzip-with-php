<?php

// Get Project path
define('_PATH', dirname(__FILE__));

// Zip file name
$filename = 'sendmail.zip';
$zip = new ZipArchive;
$res = $zip->open($filename);
if ($res === TRUE) {

 // Unzip path
 $path = _PATH."/files/";

 // Extract file
 $zip->extractTo($path);
 $zip->close();

 echo "Unzip! \n";
} else {
 echo "failed! \n";
}

 ?>
