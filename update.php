<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_phonenumber = $_POST['emp_phonenumber'];
		
		$stmt = $db_con->prepare("UPDATE tbl_phonebook SET emp_name=:en, emp_dept=:ed, emp_phonenumber=:ep WHERE emp_id=:id");
		$stmt->bindParam(":en", $emp_name);
		$stmt->bindParam(":ed", $emp_dept);
		$stmt->bindParam(":ep", $emp_phonenumber);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Успешно е актуализирана информацията";
		}
		else{
			echo "Проблем със заявката";
		}
	}

?>