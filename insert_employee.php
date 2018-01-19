<html>
<body>


<?php 
//form data
$first=$_POST['first'];
$middle=$_POST['middle'];
$last=$_POST['last'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$schedule=$_POST['schedule'];
$department=$_POST['department'];
$certify=$_POST['certify'];
//connection DSN
include_once 'db.php';


try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	#use prepared statment with named placeholders :first, :last, :title, :age, :yos, :salary, :email.
	$sql = "insert into employee (first_name, middle_initial, last_name, employee_street, employee_city, employee_state, employee_zip, empschedule_id, department_id, certify_id) values(:first, :middle, :last, :street, :city, :state, :zip, :schedule, :department, :certify)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':first', $first);
	$stmt->bindParam(':middle', $middle);
	$stmt->bindParam(':last', $last);
	$stmt->bindParam(':street', $street);
	$stmt->bindParam(':city', $city);
	$stmt->bindParam(':state', $state);
	$stmt->bindParam(':zip', $zip);
	$stmt->bindParam(':schedule', $schedule);
	$stmt->bindParam(':department', $department);
	$stmt->bindParam(':certify', $certify);
	


if($stmt -> execute())
{
   $rows_affected = $stmt->rowCount();
   echo "<h2>".$rows_affected." row updated sucessfully!</h2>";
   include 'display.php';
   display("SELECT e.employee_id, e.first_name, e.last_name, e.middle_initial, e.employee_street, e.employee_city, e.employee_state, e.employee_zip, d.division, d.role, s.hours_a_week, s.work_weekends, s.shift, c.certification FROM employee e, department d, empschedule s, certify c WHERE d.department_id=e.department_id AND e.empschedule_id=s.empschedule_id AND c.certify_id = e.certify_id;");
 
}

	else
	{
	 	echo "Insertion failed: (" . $conn->errno . ") " . $conn->error;
	}

	$conn = null;
}
catch(PDOException $e) {
	die("Could not connect to the database $dbname :" . $e->getMessage());
}


?>
<FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.html'"> 
</FORM>
</body>
</html>