<!DOCTYPE html>
<html lang="ru">
<head>
	  <title>Создание нового студента</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body> 

	<div class="container">
	<div class="jumbotron">
	<legend><h3>Запись данных о новом студенте</h3></legend>
	<h5>Все поля являются обязательными</h5>
	
	<form action="action.php" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="action" value="create">
    
	<div class="form-group">
    <label class="control-label col-sm-2" for="name">Имя:</label>
    
	<div class="col-sm-10"><div class="col-xs-4">
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя студента" pattern="^[ А-я-A-z]+$" title="Только буквы" required>
    </div></div> 
	
	<label class="control-label col-sm-2" for="lastname">Фамилия:</label>
    <div class="col-sm-10"><div class="col-xs-4">
    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Введите фамилию" pattern="^[ А-я-A-z]+$" title="Только буквы" required>
    </div></div>
	  
	<div class="container">
	<label class="radio-inline">
	<input type="radio" <?php if ($sex=='Мужской') echo checked ?> value="Мужской" name="sex" required>Мужской</label>
	<label class="radio-inline">
	<input type="radio" <?php if ($sex=='Женский') echo checked ?> value="Женский" name="sex" required>Женский</label>
	</div>
	  
	<label class="control-label col-sm-2" for="age">Возраст:</label>
    <div class="col-sm-10"><div class="col-xs-4">
    <input type="text" class="form-control" name="age" id="age" placeholder="Введите возраст" pattern="^[ 0-9]+$" title="Только цифры" required>
    </div></div>
	  
	<label class="control-label col-sm-2" for="gruppa">Группа:</label>
    <div class="col-sm-10"><div class="col-xs-4">
    <input type="text" class="form-control" name="gruppa" id="gruppa" placeholder="Введите группу" required>
    </div></div>
	  
	<label class="control-label col-sm-2" for="faculty">Факультет:</label>
    <div class="col-sm-10"><div class="col-xs-4">
		<input type="text" class="form-control" name="faculty" id="faculty" placeholder="Введите факультет" pattern="^[ А-я-A-z]+$" title="Только буквы" required>
    </div></div>
	</div>
	
	<div class="form-group">        
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-success">Добавить</button>
    </div>
    </div>
	</form>  


	<ul class="pager">
		<li class="previous"><a href="index.php"><span class="glyphicon glyphicon-home"></span> На главную</a></li>    
	</ul>

</body>
</html>