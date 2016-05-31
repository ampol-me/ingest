<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

// Define a destination
$targetFolder = '/mnt/mcr'; // Relative to the root and should match the upload folder in the uploader script

if (file_exists($targetFolder . '/' . $_POST['filename'])) {
	echo 1;
    //echo $targetFolder;
} else {
	echo 0;
    //echo $targetFolder;
}
?>