<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lists</title>
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
			body { 
				font-family: sans-serif; 
				display: flex; 
				justify-content: center; 
				align-items: center; 
				height: 100vh; 
				margin: 0; 
			}
			.card { 
				display: block;
				width: 100%;
				text-align: center; 
				border: 1px solid #ddd; 
				padding: 40px; 
				margin-bottom:20px;
				border-radius: 5px; 
				box-sizing:border-box; 
			}
			.update-btn { 
				background-color: #bfdbfe; 
				border: 1px solid #3b82f6; 
				padding: 10px 30px; 
				border-radius: 5px; 
				color: #1e40af;
			}
			


		</style>
	</head>
	<body class="<?= $theme ?> <?= $font ?>">
		<?php
		require "Database.php";
		// اتاكد من الاidفي لurl 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			//اجيب البيانات عن هذا الid
			$result = mysqli_query($connect, "SELECT * FROM tasks WHERE id=$id");
			$task = mysqli_fetch_assoc($result);
			if (!$task) {
				die("Task not found!");
			}
		} else {
			die("No task id provided!");
		}
		?>

		<div class="card">
			<h1>Update "to do"</h1>
			<form method="POST" action="update_action.php">
			<!---postالقيم ما بتطلع بال urlاكثر امان -->
				<input type="hidden" name="id" value="<?php echo $task['id']; ?>">
				<!--لحتى يعرض لي الidللمهمة الي بدي اعدل عليها  وهو هايدين لحتى ما يكون قابل للتعديل-->
				<input type="text" name="title" value="<?php echo htmlspecialchars( $task['title']); ?>">
				<!--بيعرض لي عنوان المهمة الي بدي اعدل عليها  بيجيبه من قاعرد البيانات -->
				<!--htmlspecialchars
				لحماية الواجهة من إدخال أكواد HTML أو JavaScript ولمنع XSS-->
				<button class="update-btn" type="submit">Update</button>
				<!--لما ارسل البيانات تروح لملف الupdate_action.php يعدل الid واسم المهمة هناك-->
			</form>
		</div>

	</body>
</html>