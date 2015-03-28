header("Location: index.php");
<?php 
    $id = $_POST['id'];
    
  // Соединяемся с MySQL 
    $conn = mysql_connect("localhost", "root", "")
        // Проверка соединения 
		or die("Could not connect : " . mysql_error());
    //print "Connected successfully";
    mysql_select_db("db_students") or die("Could not select database");
	
	 //Выполняем SQL-запрос редактирования данных о студенте 
    $query = mysql_query("DELETE FROM students WHERE ID='$id' "); 
    //$result = mysql_query($query) or die("Query failed : " . mysql_error());
	
	echo '<h4>Данные студента удалены!</h4>';
	 
?>
			
<html lang="ru">
<head>
  <title>Отредактирован</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <META HTTP-EQUIV='Refresh' CONTENT='2; URL=index.php'> 
  
  </head>
<body> 

</body>
</html>
