<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lists</title>
		<style type="text/css">
			body { 
				display: flex; 
				flex-direction: column; 
				align-items: center; 
				background: #f9f9f9; 
				padding-top: 50px; 
			}/*لحتى اخلي كل العناصر بنص صفحة المتصفح */
			.header { 
				text-align: center; 
				margin-bottom: 30px; 
			}/*ترتيب مسافات*/
			.add-btn { 
				background-color: #4ade80; 
				border: none; 
				padding: 8px 20px; 
				border-radius: 5px; 
				cursor: pointer; 
				color: white; 
				margin-bottom: 20px; 
			}
			.todo-item { 
				background: #e5e7eb; 
				width: 500px; 
				padding: 15px; 
				margin-bottom: 10px; 
				border-radius: 8px;
				display: flex; 
				justify-content: space-between; 
				align-items: center;
			}
			.todo-title { font-size: 18px; }
			.completed-title { text-decoration: line-through; color: #6b7280; }
			.a { 
				border: none; 
				padding: 5px 10px; 
				border-radius: 4px; 
				cursor: pointer; 
				margin-left: 5px; 
				color: white; 
			}
			.btn-complete { background-color: #efd686ff; color: #000000ff ; text-decoration:linethrough;}
			.btn-uncomp { background-color: #86efbeff; color: #000000ff ; }
			.btn-update { background-color: #3b82f6; } 
    		.btn-delete { background-color: #ef4444; } 

		</style>
	</head>
	<body>
		
		<div class="header">
			<h1>Focus Board</h1>
			<p>"Great things start here"</p>
			<a href="create.php" class="add-btn">Add+</a>
		</div>

		<?php
			require "Database.php";

			// التأكد من الاتصال
			if (!$connect) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// تنفيذ الاستعلام
			$result = mysqli_query($connect, "SELECT * FROM tasks");
			if (!$result) {
				die("Query failed: " . mysqli_error($connect));
			}

			// المرور على الصفوف
			while ($row = mysqli_fetch_assoc($result)) {
				$completedClass = ($row['status'] === 'true') ? 'completed-title' : '';
				$toggleText = ($row['status'] === 'true') ? 'Uncomplete' : 'Complete';
		?>

		
		<div class="todo-item">
			<span class="todo-title  <?php echo $completedClass; ?>" >
				<?php echo htmlspecialchars($row['title']); ?>
				<!--يعرض لي اسم المهمة من قاعدة البيانات بيجيبه-->
			</span>
			<!--اسم المهمة الي لازم يتم انجازها المستخدم بيدخلها من كرييت بيج-->
			<div class="a">
				<!--لما تكون المهمة مكتمله تصير مشطوب عليها-->
				<a href="Toggle.php?id=<?php echo $row['id']; ?>">
					<button class="<?php echo ($row['status'] === 'true') ? 'btn-complete' : 'btn-complete btn-uncomp'; ?>">
						<?php echo $toggleText; ?>
					</button>
				</a>
				<a href="update.php?id=<?php echo $row['id']; ?>">
					<button class="btn-update">Update</button></a>
				<!--ينقلني لصفحة الابديت لو  ضغط عليه-->
				<a href="Delete.php?id=<?php echo $row['id']; ?>">
					<button class="btn-delete">Delete</button>
				</a>
				<!--يحذف المهمة لو ضغط عليه المستخدم-->
			</div>
		</div>
	<?php } ?>
		
	</body>
</html>