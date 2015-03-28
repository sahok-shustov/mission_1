<?php
require_once("db.php");

	$action= $_POST["action"];
	
	if (!$action) {
	header("Location: index.php?error_code=1");
	die();
  }
	// TODO reed about constructors!
    /*Соединяемся с БД*/
	$db = new DB();
	
	
	if ($action== "create"){
	  //получить поля из поста
	  $id = $_POST['id'];
	  $name =  $_POST['name'];
	  $lastname = $_POST['lastname'];
	  $sex =  $_POST['sex']; 
	  $age =  $_POST['age']; 
	  $group = $_POST['gruppa']; 
	  $faculty = $_POST['faculty'];
	  
	  /* Проверка значений переменных
	  echo 'Номер студента: ' . $id.'<br>'; 
	  echo "Имя: " . $name.'<br>'; 
	  echo "Фамилия: " .$lastname.'<br>'; 
	  echo "Пол: " . $sex.'<br>';
	  echo "Возраст: " . $age.'<br>';
	  echo "Группа: " . $group.'<br>';
	  echo "Факультет: " . $faculty.'<br><br>';*/
	  
	  //вызвать мотод create_student
	  $result = $db->create_student($name, $lastname, $sex, $age, $group, $faculty);
	  //редирект на index
	  if (!$result){
		header("Location: index.php?error_code=1");
	  }
	  else {
		  header("Location: index.php?error_code=0");
	  }  
	  //redirect to: index.php?error_code=0 // success
	  //index.php?error_code=1 // ошибка
	}
  
	elseif ($action== "edit"){
	  //получить поля из поста
	  $id= $_POST['id'];
	  $name =  $_POST['name'];
	  $lastname = $_POST['lastname'];
	  $sex =  $_POST['sex']; 
	  $age =  $_POST['age']; 
	  $group = $_POST['gruppa']; 
	  $faculty = $_POST['faculty']; 
	  	 	  
	  //вызвать мотод edit_student
	  $db->edit_student($id, $name, $lastname, $sex, $age, $group, $faculty);
	  //редирект на index
	  if (!$db){
		header("Location: index.php?error_code=1");
	  }
	  else {
		  header("Location: index.php");
	  }  
	  //redirect to: index.php?error_code=0 // success
	  //index.php?error_code=1 // ошибка
	}
  
	elseif ($action== "remove"){
		//получить поля из поста
		$id= $_POST['id'];
		//вызвать мотод remove_student
		$db->remove_student($id);
		//редирект на index
		if (!$db){
		header("Location: index.php?error_code=1");
		}
		else {
		  header("Location: index.php");
		}  
		//redirect to: index.php?error_code=0 // success
		//index.php?error_code=1 // ошибка
	}
  
	else {
	  header("Location: index.php?error_code=1"); 
	  die();
	}
  
?>