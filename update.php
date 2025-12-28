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

		// تأكد من وجود id في الرابط
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			// جلب بيانات المهمة من قاعدة البيانات
			$result = mysqli_query($connect, "SELECT * FROM tasks WHERE id=$id");
			$task = mysqli_fetch_assoc($result);

			if (!$task) {
				// إذا ما موجودة المهمة
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
				
				<input type="text" name="title" value="<?php echo htmlspecialchars( $task['title']); ?>">
				
				<button class="update-btn" type="submit">Update</button>
				<!--لما ارسل البيانات تروح لملف الupdate_action.php يعدل الid واسم المهمة هناك-->
			</form>
		</div>

	</body>
</html>