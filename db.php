<?php

class DB {
	var $conn;
  
  function __construct(){
		//this->connect();
		$host= "localhost";
		$user= "root";
		$password= "";
  
		/* Соединяемся с MySQL */
		$this->conn = mysql_connect($host,$user,$password)
        /* Проверка соединения */
		or die("Could not connect : " . mysql_error());
		//print "Connected successfully";
		mysql_select_db("db_students") or die("Could not select database");
  }
  
  function __destruct() {
		/* Закрываем соединение */
		mysql_close($this->conn);
  }
  
  private function connect() {
		// logic to connect to database
		$host= "localhost";
		$user= "root";
		$password= "";
	  
		/* Соединяемся с MySQL */
		$this->conn = mysql_connect($host,$user,$password)
		/* Проверка соединения */
		or die("Could not connect : " . mysql_error());
		print "Connected successfully";
		mysql_select_db("db_students") or die("Could not select database");
   
  }
  
  public function get_student($id){
		$id = $_GET['id'];
		/* Выполняем SQL-запрос */
		$query = "SELECT * FROM students WHERE ID=$id";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		$student= mysql_fetch_array($result, MYSQL_ASSOC);
		return $student;
  }
  
  public function get_students() {
		// query to select all students. return result
		/* Выполняем SQL-запрос */
		$query = "SELECT * FROM students ORDER BY ID";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		return $result;
  }
  
  /**
   * Create student
   @param name [string] Student name
   @param lastmane [string] Student last name
   
   @return [mixed] result of mysql_query
   */
  public function create_student($name, $lastname, $sex, $age, $group, $faculty) {
		// create new student. return result
		// Выполняем SQL-запрос вставки нового студента 
		$query = "INSERT INTO students (Name, LastName, Sex, Age, Gruppa, Faculty) VALUES ('$name', '$lastname', '$sex', '$age', '$group', '$faculty');"; 
		$result = mysql_query($query);
		return $result;
  }
  
  public function edit_student($id, $name, $lastname, $sex, $age, $group, $faculty) {
		// update query here. return result
		// Выполняем SQL-запрос редактирования данных о студенте 
		$query= "UPDATE students SET Name='$name',LastName='$lastname',Sex='$sex',Age='$age',Gruppa='$group',Faculty='$faculty' WHERE ID=$id;";
		$result = mysql_query($query);
		return result;
  }
      
  public function remove_student($id) {
	    //Выполняем SQL-запрос редактирования данных о студенте 
		$query = "DELETE FROM students WHERE ID='$id' "; 
		$result = mysql_query($query); 
		return $result;
  }
}

?>