<html>
<body>


<?php 
//form data
$employee_id=$_POST['employee_id'];
$inventory_id=$_POST['inventory_id'];
$date_assigned=$_POST['date_assigned'];
$date_complete=$_POST['date_complete'];
$description=$_POST['description'];
$notes=$_POST['notes'];

//connection DSN
include_once 'db.php';


try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	#use prepared statment with named placeholders :first, :last, :title, :age, :yos, :salary, :email.
	$sql = "insert into works (employee_id, inventory_id, date_assigned, date_complete, description, notes) values(:employee_id, :inventory_id, :date_assigned, :date_complete, :description, :notes)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':employee_id', $employee_id);
	$stmt->bindParam(':inventory_id', $inventory_id);
	$stmt->bindParam(':date_assigned', $date_assigned);
	$stmt->bindParam(':date_complete', $date_complete);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':notes', $notes);
	
	


if($stmt -> execute())
{
   $rows_affected = $stmt->rowCount();
   echo "<h2>".$rows_affected." row updated sucessfully!</h2>";
   include 'display.php';
   display("SELECT * FROM works;");
 
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