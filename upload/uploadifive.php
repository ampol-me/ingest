<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/
function RandomCode($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



// Set the uplaod directory
$uploadDir = '/mnt/mcr/';

$dir_pgm = 'tvc/2/';
// Set the allowed file extensions
$fileTypes = array('MPG', 'mpg'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile   = $_FILES['Filedata']['tmp_name'];
    
    
    

    // array
    $vowels = array(" ", "-");
    $rename = str_replace($vowels, "_", $_FILES['Filedata']['name']);
    $typecode = 'T_'. RandomCode(4). '_' . $rename;
	//$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
	$targetFile = $uploadDir . $dir_pgm . $typecode;

	// Validate the filetype
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

		// Save the file
		move_uploaded_file($tempFile, $targetFile);
		echo 1;


	} else {

		// The file type wasn't allowed
		echo 'Invalid file type.';

	}
}
?>