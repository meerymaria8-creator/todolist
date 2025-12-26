<?php
	require "Database.php";

	$id = $_GET['id'];
    //ياخذ قيمة الidمن الurl
	mysqli_query($connect, "DELETE FROM tasks WHERE id=$id");
    //يحذف المهمة الي لهذا الid
	header("Location: list.php");
    //ويرجعني لصفحة الlist.php
	exit;
?>