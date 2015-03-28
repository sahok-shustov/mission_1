﻿<?php
	require_once("db.php");
	$db= new DB();
	$students= $db-> get_students();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	  <title>БД</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=0">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>
<body> 


<?php
	if (isset($_GET['error_code'])) { 
		$error_code=$_GET['error_code'];
		//проверить error_code и вывести сообщение об ошибке
		if  ($error_code==1){
			// show message "something goes wrong"
		} elseif ($error_code==0) {
			// show message "operation successful"
		}
		
	}
	
    
	/* Соединяемся с MySQL 
    $conn = mysql_connect("localhost", "root", "")
    // Проверка соединения 
	or die("Could not connect : " . mysql_error());
    
    mysql_select_db("db_students") or die("Could not select database");
	
    // Выполняем SQL-запрос 
    $query = "SELECT * FROM students ORDER BY ID";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());*/
	
	
	print "<div class='text-center'>
	<h2 class='text-info'>База данных студентов вуза Сум ГУ</h2> </div>";
    /* Выводим результаты в html */
   	print "<table class='table table-striped'>
    <thead class='bg-warning'>
      <tr>
	      <th class='text-center'><h4><b>№</b></h4></th>
	      <th class='text-center'><h4><b>Имя</b></h4></th>
	      <th class='text-center'><h4><b>Фамилия</b></h4></th>
	      <th class='text-center'><h4><b>Пол</b></h4></th>
	      <th class='text-center'><h4><b>Возраст</b></h4></th>
		  <th class='text-center'><h4><b>Группа</b></h4></th>
		  <th class='text-center'><h4><b>Факультет</b></h4></th>
 	  </tr>
	</thead>";
    while ($line = mysql_fetch_array($students, MYSQL_ASSOC)) {
    print "<tr ALIGN=CENTER>";
    foreach ($line as $col_value) {
            print "<td>$col_value</td>";
    }
	print "<td><a href='edit.php?id=$line[ID]' class='btn btn-primary' role='button'><span class='glyphicon glyphicon-cog'></span></a></td>";
	print "<td><a href='remove.php?id=$line[ID]' class='btn btn-danger' role='button'><span class='glyphicon glyphicon-trash'></span></a></div>";
					      
    }
    print "</table>";
		
    
    
?>	

<div class="text-right"><a href="create.php" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus"></span> Записать данные о новом студенте</a></div>
</div>
  
</body>
</html>

