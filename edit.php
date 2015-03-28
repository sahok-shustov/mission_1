<!DOCTYPE html>
<?php 
	$id = $_GET['id'];
    // Соединяемся с MySQL 
    $conn = mysql_connect("localhost", "root", "")
    // Проверка соединения 
	or die("Could not connect : " . mysql_error());
    // print "Connected successfully";
    mysql_select_db("db_students") or die("Could not select database");
	
	/* Выполняем SQL-запрос */
    $query = "SELECT * FROM students WHERE ID=$id";
  	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	$student= mysql_fetch_array($result, MYSQL_ASSOC);
 
	  $name =  $student['Name'];
	  $lastname = $student['LastName'];
	  $sex =  $student['Sex']; 
	  $age =  $student['Age']; 
	  $group = $student['Gruppa']; 
	  $faculty = $student['Faculty']; 
  
	  /*Проверка значений переменных
	  echo 'Номер студента: ' . $id.'<br>';  // Выводим содержимое текстового поля 
	  echo "Имя: " . $name.'<br>'; 
	  echo "Фамилия: " .$lastname.'<br>'; 
	  echo "Пол: " .$sex.'<br>'; 
	  echo "Возраст: " . $age.'<br>';
	  echo "Группа: " . $group.'<br>';
	  echo "Факультет: " . $faculty.'<br><br>'; */
	
	
?>

<html lang="ru">
<head>
	  <title>Редактирование данных о студенте</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body> 

	<div class="container">
	<div class="jumbotron">
	<legend><h3>Редактирование данных о студенте</h3></legend>
	<form action="action.php" method=post class="form-horizontal" role="form">
		<input type="hidden" name="action" value="edit">
    <div class="form-group">
    
	<label class="control-label col-sm-2" for="ID">№ студента:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" value="<?php echo $id ?>" name="id" class="form-control" id="id" placeholder="Введите № студента">
    </div></div>
	  
	<label class="control-label col-sm-2" for="name">Имя:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" value="<?php echo $name ?>" name="name" class="form-control" id="name" placeholder="Введите имя студента">
    </div></div>
	  
	<label class="control-label col-sm-2" for="lastname">Фамилия:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" value="<?php echo $lastname ?>" name="lastname" class="form-control" id="lastname" placeholder="Введите фамилию">
    </div></div>
	  
	<div class="container">
		<label class="radio-inline">
			<input type="radio" <?php if ($sex=='Мужской') echo checked ?> value="Мужской" name="sex">Мужской</label>
		<label class="radio-inline">
			<input type="radio" <?php if ($sex=='Женский') echo checked ?> value="Женский" name="sex">Женский</label>
	</div>
	  
	<label class="control-label col-sm-2" for="age">Возраст:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" value="<?php echo $age ?>" name="age" class="form-control" id="age" placeholder="Введите возраст">
      </div></div>
	  
	<label class="control-label col-sm-2" for="gruppa">Группа:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" value="<?php echo $group ?>" name="gruppa" class="form-control" id="gruppa" placeholder="Введите группу">
    </div></div>
	  
	<label class="control-label col-sm-2" for="faculty">Факультет:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" value="<?php echo $faculty ?>" name="faculty" class="form-control" id="faculty" placeholder="Введите факультет">
    </div></div>
	</div>
	
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Редактировать</button>
      </div>
    </div>
	</form>  

	<ul class="pager">
		<li class="previous"><a href="index.php"><span class="glyphicon glyphicon-home"></span> На главную</a></li>    
	</ul>

</body>
</html>