<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<body>
<div style = "width:30%; float:left">
<?php include 'index.html'; ?>
</div>

<?php 
include_once 'db.php';

#form data
$name=$_POST['name'];

$sql = "delete from customer where customer_name = :name;";
$stmt = $conn->prepare($sql);

# data stored in an associative array
$data = array( 'name' => $name);

/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/

if($stmt->execute($data)){
		$rows_affected = $stmt->rowCount();
        	echo "<h2>".$rows_affected." row deleted sucessfully!</h2>";
		$stmt = $conn->query("SELECT * FROM customer");

		//PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0 
		$stmt->setFetchMode(PDO::FETCH_NUM);
		echo "<table border=\"1\">\n";
		echo "<tr><td>Name</td><td>City</td><td>Name</td></tr>\n";
		while ($row = $stmt->fetch()) {
     			printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", 	$row[0], $row[1], $row[2]);
		}
       		
      		echo "</table>\n";
}
else
{
 	echo "\nPDOStatement::errorInfo():\n";
	print_r($stmt->errorInfo());
}
$stmt = null;
$conn = null;

?>

</body>
</html>