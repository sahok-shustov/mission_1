<?php
	/**
	* @author Shustov A.
	*
	* Контроллер логики действий взаимодействия форм и БД
	*/	
	
	/*Подключаем файл управления запросами*/
	require_once("db.php");

	$action= $_POST["action"];
	/*Проверка на заполнение данных*/
	if (!$action) {
	header("Location: index.php?error_code=1");
	die();
  }
	
    /*Соединяемся с БД*/
	$db = new DB();
	
	
	if ($action== "create"){
	  //получить поля из формы
	  $id = $_POST['id'];
	  $name =  $_POST['name'];
	  $lastname = $_POST['lastname'];
	  $sex =  $_POST['sex']; 
	  $age =  $_POST['age']; 
	  $group = $_POST['gruppa']; 
	  $faculty = $_POST['faculty'];	  	  
	  
	  //вызвать мотод create_student
	  $result = $db->create_student($name, $lastname, $sex, $age, $group, $faculty);
	  //редирект на index.php
	  if (!$result){
		header("Location: index.php?error_code=1");
	  }
	  else {
		  header("Location: index.php?error_code=0");
	  }  	  
	}
  
	elseif ($action== "edit"){
	  //получить поля из формы
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
	}
  
	elseif ($action== "remove"){
		//получить поля из формы
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
	}
  
	else {
	  header("Location: index.php?error_code=1"); 
	  die();
	}
  
?>