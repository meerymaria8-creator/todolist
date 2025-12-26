<?php
	$connect = mysqli_connect("localhost", "root", "", "todo_list");

	if ($connect == false) {
		die("Connection failed");
	}
    //هذا الملف الي يربط لي المشروع مع قاعدة البيانات
    //اي ملف داخل المشروع بيتواص مع قاعدة البياات من خلاله باستخدامrequire"Database.php
    
?>