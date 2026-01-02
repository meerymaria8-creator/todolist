<?php
	require "Database.php";
	$id = $_POST['id'];
	$title = $_POST['title'];

	mysqli_query($connect, "UPDATE tasks SET title='$title' WHERE id=$id");
    //بس بيعدل لي اسم المهمة حسب الid تاعها
	header("Location: list.php");
	exit;
?>