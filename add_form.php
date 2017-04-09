<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Име</td>
            <td><input type='text' name='emp_name' class='form-control' placeholder='Примерно : Иван Иванов' required /></td>
        </tr>
 
        <tr>
            <td>Отдел</td>
            <td><input type='text' name='emp_dept' class='form-control' placeholder='Примерно : Маркетинг' required></td>
        </tr>
 
        <tr>
            <td>Номер</td>
            <td><input type='text' name='emp_phonenumber' class='form-control' placeholder='Примерно : 0888123456' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Запамети
			</button>  
            </td>
        </tr>
 
    </table>
</form>