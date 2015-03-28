<?php
	//print_r($_POST);
	$id = $_POST['id'];
	$name =  $_POST['name'];
	$lastname = $_POST['lastname'];
	$sex =  $_POST['sex']; 
	$age =  $_POST['age']; 
	$group = $_POST['gruppa']; 
	$faculty = $_POST['faculty'];
	
	
	/*Проверка значений переменных
  echo 'Номер студента: ' . $id.'<br>';  // Выводим содержимое текстового поля 
  echo "Имя: " . $name.'<br>'; 
  echo "Фамилия: " .$lastname.'<br>'; 
  echo "Пол: " . $sex.'<br>';
  echo "Возраст: " . $age.'<br>';
  echo "Группа: " . $group.'<br>';
  echo "Факультет: " . $faculty.'<br><br>'; */
  
  // Соединяемся с MySQL 
    $conn = mysql_connect("localhost", "root", "")
        // Проверка соединения 
		or die("Could not connect : " . mysql_error());
    //print "Connected successfully";
    mysql_select_db("db_students") or die("Could not select database");
	
	// Выполняем SQL-запрос редактирования данных о студенте 
	$query= "UPDATE students SET Name='$name',LastName='$lastname',Sex='$sex',Age='$age',Gruppa='$group',Faculty='$faculty' WHERE ID=$id;";
	$result = mysql_query($query);
	//echo $query;
	//echo $result;
	 echo "<h4>Данные студента под номером $id отредактированы!</h4>";

?>
<html lang="ru">
<head>
  <title>Отредактирован</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body> 

<META HTTP-EQUIV='Refresh' CONTENT='2; URL=index.php'> 

</body>
</html>
