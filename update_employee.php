<!DOCTYPE html>
<html>
<body>
<div style = "width:30%; float:left">
<?php include 'menu.html'; ?>
</div>

<p>
  <?php 

include_once 'db.php';

# form data
$employee_id = $_POST['employee_id'];
$first=$_POST['firstname'];
$middle=$_POST['middlename'];
$last=$_POST['lastname'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];


$query = "update employee set first_name = :first, middle_initial = :middle, last_name = :last, employee_street = :street, employee_city = :city, employee_state = :state, employee_zip = :zip where employee_id = :employee_id;";
$data = array( 'first' => $first, 'middle' => $middle, 'last' => $last, 'street' => $street, 'city' => $city, 'state' => $state, 'zip' => $zip, 'employee_id' => $employee_id);
$stmt = $conn->prepare($query);

if($stmt -> execute($data))
{
   $rows_affected = $stmt->rowCount();
   echo "<h2>".$rows_affected." row updated sucessfully!</h2>";
   include 'display.php';
display("SELECT e.employee_id, e.first_name,  e.middle_initial, e.last_name, e.employee_street, e.employee_city, e.employee_state, e.employee_zip, d.division, d.role, s.hours_a_week, s.work_weekends, s.shift, c.certification FROM employee e, department d, empschedule s, certify c WHERE d.department_id=e.department_id AND e.empschedule_id=s.empschedule_id AND c.certify_id = e.certify_id;");
 
}
else
{
  echo "update failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();
   
?>
  
</p>
<FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.php'"/> 
</FORM>
<p>&nbsp;</p>
</body>
</html>
