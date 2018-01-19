<!DOCTYPE html>
<html>
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>Insert form</title>
    </head>
<body>

<div style = "width:30%; float:left">
</div>

	<form action="insert_works.php" method="post">
	    Employee ID: <input type="number" min="0" name="employee_id"/><br>
	    Inventory ID: <input type="number" min="0" name="inventory_id"/><br>
        Date Assigned: <input type="date" name="date_assigned"/><br>
	    Inventory ID: <input type="date" name="date_complete"/><br>
        Description: <input type="text" name="description"/><br>
	    Additional Notes: <input type="text" name="notes"/><br>
	    

	    <input type="Submit" value= "Insert"/><input type="Reset"/>
	</form>




<?php 
include_once 'db.php';

#form data
$description=$_POST['description'];

$sql = "SELECT i.inventory_id, i.model, i.serial_number, i.company, i.type, i.product_description, i.add_notes, l.building, l.room_number FROM inventory i, location l WHERE i.location_id=l.location_id AND i.product_description like :description";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':description', '%'.$description.'%');

If($stmt->execute())
{
	$rows_affected = $stmt->rowCount();

	if($rows_affected > 0)
	{
    		$result = $stmt->fetchAll();
                                       echo '<h2>Search Results:</h2>';
    		echo "<table border=1>\n";
    		echo "<tr><th>ID</th><th>Model</th><th>Serial Number</th><th>Company</th><th>Type</th><th>Description</th><th>Notes</th><th>Building</th><th>Room</th></tr>\n";
    		foreach($result as $row){
          			printf("<tr><td>%s </td><td>%s</td><td>%s</td><td>%s </td><td>%s</td><td>%s</td><td>%s </td><td>%s</td><td>%s</td></tr>\n", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
   
  		}
   	echo "</table>\n";
	}
                   else{
		echo 'There inventory found';
	}
}
else
{
 	echo "\nPDOStatement::errorInfo():\n";
	print_r($stmt->errorInfo());
}
$stmt = null;
$conn = null;

?>
<FORM>
<INPUT Type="BUTTON" Value="Insert Job" Onclick="window.location.href='insert_form_works.php'"> 
</FORM>

    </body>
   </html>