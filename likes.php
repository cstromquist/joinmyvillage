<?php
/********************************
 * SIMPLE PHP SCRIPT
 * TO COUNT LIKES IN EACH CHAPTER
 * THIS WAY IT DOESN'T MATTER IF
 * A USER UNLIKES A CHAPTER
 ********************************/
session_start();
if(isset($_POST)) {
	$chapter = $_POST['chapter'];
	if($chapter != '') {
		// ensure they only like once for this session
		if(!isset($_SESSION['chapter_' . $chapter])) {
			$dir = "likes_data/chapter_".$chapter;
			$data = unserialize(file_get_contents($dir));
			$data[count]++;
			if(file_put_contents($dir,serialize($data))) {
				$_SESSION['chapter_' . $chapter] = true;
				echo true;
			}
		}
	}
}
if(isset($_GET['chapter'])) {
	$chapter = $_GET['chapter'];
	$dir = "likes_data/chapter_".$chapter;
	$data = unserialize(file_get_contents($dir));
	echo json_encode($data);
}
?>