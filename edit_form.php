<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_phonebook WHERE emp_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['emp_id']; ?>' />
        <tr>
            <td>Име</td>
            <td><input type='text' name='emp_name' class='form-control' value='<?php echo $row['emp_name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Отдел</td>
            <td><input type='text' name='emp_dept' class='form-control' value='<?php echo $row['emp_dept']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Телефонен номер</td>
            <td><input type='text' name='emp_phonenumber' class='form-control' value='<?php echo $row['emp_phonenumber']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Запамети промените
			</button>
            </td>
        </tr>
 
    </table>
</form>