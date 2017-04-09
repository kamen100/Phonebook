<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_phonenumber = $_POST['emp_phonenumber'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO tbl_phonebook(emp_name,emp_dept,emp_phonenumber) VALUES(:ename, :edept, :ephonenumber)");
			$stmt->bindParam(":ename", $emp_name);
			$stmt->bindParam(":edept", $emp_dept);
			$stmt->bindParam(":ephonenumber", $emp_phonenumber);
			
			if($stmt->execute())
			{
				echo "Успешно добавен запис";
			}
			else{
				echo "Проблем със заявката";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>