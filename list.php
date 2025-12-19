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
			.btn-complete { background-color: #86efac; color: #065f46 !important; }


		</style>
	</head>
	<body>
		
		<div class="header">
			<h1>Focus Board</h1>
			<p>"Great things start here"</p>
			<a href="create.php" class="add-btn">Add +</a>
		</div>
		
		<div class="todo-item">
			<span class="todo-title"></span>
			<!--اسم المهمة الي لازم يتم انجازها المستخدم بيدخلها من كرييت بيج-->
			<div class="a">
				<button class="btn-complete">Complete</button>
				<!--لما تكون المهمة مكتمله تصير مشطوب عليها-->
				<a href="update.php?id=1"><button class="btn-update">Update</button></a>
				<!--ينقلني لصفحة الابديت لو  ضغط عليه-->
				<button class="btn-delete">Delete</button>
				<!--يحذف المهمة لو ضغط عليه المستخدم-->
			</div>
		</div>
		<!--مهمات مكتملة-->
		<div class="todo-item">
			<span class="todo-title completed-title"></span>
			<div class="a">
				<button class="btn-uncomplete">Uncomplete</button>
				<a href="update.php?id=2"><button class="btn-update">Update</button></a>
				<button class="btn-delete">Delete</button>
			</div>
		</div>

		
	</body>
</html>