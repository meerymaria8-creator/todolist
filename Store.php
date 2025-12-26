<?php
	require "Database.php";

	$title = $_POST['title'];
    //ياخذ اسم المهمة من قاعدةالبيانات ويرسلها للurl
	$sql = "INSERT INTO tasks (title) VALUES ('$title')";
	mysqli_query($connect, $sql);
    //نضيف مهمة لقاعدة  البيانات  من اسمها 
	header("Location: list.php");
    //يرجعني للlist.php
	exit;
?>