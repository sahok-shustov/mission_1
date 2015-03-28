<?php 
  //$id = $_POST['id'];
  $name =  $_POST['name'];
  $lastname = $_POST['lastname'];
  $sex =  $_POST['sex']; 
  $age =  $_POST['age']; 
  $group = $_POST['gruppa']; 
  $faculty = $_POST['faculty']; 
  
  /*Проверка значений переменных
  echo 'Номер студента: ' . $id.'<br>'; 
  echo "Имя: " . $name.'<br>'; 
  echo "Фамилия: " .$lastname.'<br>'; 
  echo "Пол: " . $sex.'<br>';
  echo "Возраст: " . $age.'<br>';
  echo "Группа: " . $group.'<br>';
  echo "Факультет: " . $faculty.'<br><br>';*/
  
  // Соединяемся с MySQL 
    $conn = mysql_connect("localhost", "root", "")
        // Проверка соединения 
		or die("Could not connect : " . mysql_error());
    //print "Connected successfully";
    mysql_select_db("db_students") or die("Could not select database");
	
	// Выполняем SQL-запрос вставки нового студента 
    $query = mysql_query("INSERT INTO students (ID, Name, LastName, Sex, Age, Gruppa, Faculty) VALUES (NULL, '$name', '$lastname', '$sex', '$age', '$group', '$faculty');"); 
    //$result = mysql_query($query) or die("Query failed : " . mysql_error());
echo " <br>";

	/* Выполняем SQL-запрос вывода всей таблицы 
    $query = "SELECT * FROM students ORDER BY ID";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	
	// Выводим результаты в html 
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
	    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "<tr ALIGN=CENTER>";
        foreach ($line as $col_value) {
            print "<td>$col_value</td>";
        }
        print "</tr>";
    }
    print "</table>";*/
	
	 echo '<h4>Данные студента занесены в базу!</h4>';
?>

<html lang="ru">
<head>
  <title>Данные занесены</title>
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

