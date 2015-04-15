<?php	
/**
  * @author Shustov A.
  *
  * Класс DB - управление запросами к БД
  */	
class DB {
	/*@var mixed[]*/
	var $conn;
	/*@var string*/
	var $host= "localhost";
	/*@var string*/
	var $user= "root";
	/*@var string*/
	var $password= "";
	/*@var string*/
	var $base= "db_students";
      
  /**
  * Подключение к БД при инициализации обекта
  *
  * @param mixed[] $array Array массив значений.  
  * @return booll.
  */
  function __construct(){		
		/* Соединяемся с MySQL */
		$this->conn = mysql_connect($this->host, $this->user, $this->password)
        /* Проверка соединения */
		or die("Could not connect : " . mysql_error());
		//print "Connected successfully";
		mysql_select_db($this->base) or die("Could not select database: ". mysql_error());
  }
  
  
  function __destruct() {
		/* Закрываем соединение */
		mysql_close($this->conn);
  }
  
  /**
  * Подключение к БД 
  *
  * @param mixed[] $array Array массив значений.  
  * @return booll.
  */
  private function connect() {				  
		/* Соединяемся с MySQL */
		$this->conn = mysql_connect($this->host, $this->user, $this->password)
		/* Проверка соединения */
		or die("Could not connect : " . mysql_error());
		//print "Connected successfully";
		mysql_select_db($this->base) or die("Could not select database: ". mysql_error());
   
  }
  
  /*
  * Get student - Получение данных студента по id из БД 
  *
  * @param id [int] Student ID
  * @return [mixed] Array result of mysql_fetch_array
  */
  public function get_student($id){
		/* Выполняем SQL-запрос */
		$query = "SELECT * FROM students WHERE ID=$id";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		$student= mysql_fetch_array($result, MYSQL_ASSOC);
		return $student;		
  }
  
  /*
  * Get students - Получение данных о всех студентах из БД 
  *
  * @return [mixed] Array result of mysql_query
  */
  public function get_students() {
		// query to select all students. return result
		/* Выполняем SQL-запрос */
		$query = "SELECT * FROM students ORDER BY ID";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		return $result;
		echo $query;
  }
  
  /*
  * Create student - Занесение данных о новом студенте
  *
  * @param name [string] Student name
  * @param lastmane [string] Student last name
  * @pram sex [string] Student sex
  * @pram age [int] Student age
  * @pram group [string] Student group
  * @pram faculty [string] Student faculty
  * @return booll result of mysql_query
  */
  public function create_student($name, $lastname, $sex, $age, $group, $faculty) {
		// create new student. return result
		// Выполняем SQL-запрос вставки нового студента 
		$query = "INSERT INTO students (Name, LastName, Sex, Age, Gruppa, Faculty) VALUES ('$name', '$lastname', '$sex', '$age', '$group', '$faculty');"; 
		$result = mysql_query($query);
		return $result;
  }
  
  /*
  * Edit student - Редактирование данных студента
  *
  * @param id [int] ID student
  * @param name [string] Student name
  * @param lastmane [string] Student last name
  * @pram sex [string] Student sex
  * @pram age [int] Student age
  * @pram group [string] Student group
  * @pram faculty [string] Student faculty
  * @return booll result of mysql_query
  */
  public function edit_student($id, $name, $lastname, $sex, $age, $group, $faculty) {
		// update query here. return result
		// Выполняем SQL-запрос редактирования данных о студенте 
		$query= "UPDATE students SET Name='$name',LastName='$lastname',Sex='$sex',Age='$age',Gruppa='$group',Faculty='$faculty' WHERE ID=$id;";
		$result = mysql_query($query);
		return result;
  }
      
  /*
  * Remove student - Удаление данных о студенте
  *
  * @return booll result of mysql_query
  */
  public function remove_student($id) {
	    //Выполняем SQL-запрос редактирования данных о студенте 
		$query = "DELETE FROM students WHERE ID='$id' "; 
		$result = mysql_query($query); 
		return $result;
  }
}

?>
