<?php

var_dump($_FILES['post-pic']);

function uploadImg($file ,$postId) {
	if ($file['error'] === 0) {
		$ext = explode('.', $file['name']);
		$newName = $postId . '.' . $ext[1];
		$destination = '../blog/img/' . $newName;
		$success = move_uploaded_file($file['tmp_name'], $destination);
		if ($success) {
			return $newName;
		} else {
			die('Error : Could\'t create new post ,error uploading image ,try again!!!');
		}
	} else {
		die('Error : Could\'t create new post ,image has error ,try again!!!');
	}
}

uploadImg($_FILES['post-pic'] ,'129129');

?>