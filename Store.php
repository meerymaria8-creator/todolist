<?php
session_start();                
require "Database.php"; 
//نتأكد إن الفورم انرسل
if (isset($_POST['title'])) {
	//تأكد إن المستخدم كبس Add وبعت الفورم
    $title = $_POST['title'];
	//خذ اسم المهمة اللي كتبها المستخدم
    $sql = "INSERT INTO tasks (title, status) VALUES ('$title', 'false')";
	//خزّن المهمة بقاعدة البيانات تكون فولس باي ديفولت يعي مش مكتملة 
    mysqli_query($connect, $sql);
    $_SESSION['message'] = "Task added successfully!";
    header("Location: list.php");
	//يرجعني للlist.php
    exit;
}
?>
