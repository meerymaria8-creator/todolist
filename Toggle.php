<?php
	require "Database.php";

	$id = $_GET['id'];
    //ناخذ اسم المهمة من الi idتاعها 
    mysqli_query($connect, "UPDATE tasks SET status = IF(status='true','false','true') WHERE id=$id");
    //اذا المهمة مكتملة خلي الستيتوس فولس لو مش مكتملة خليه ترو
    //يعدل لي حالة المهمة من خلال ال idتاعها  حسب هي كومبليت او لا
	header("Location: list.php");
    //يرجعني للlist.php
	exit;
    //هذا الكود بيعدل لي فقط حالة المهمة لو كانت كومبليت بتصير ترو لو لا فولس والديفولت تاعها هو فولس 
?>