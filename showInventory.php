<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<body>
<div style = "width:30%; float:left">
<?php include 'index.html'; ?>
</div>

<?php
include_once 'db.php';
$stmt = $conn->query("SELECT * FROM inventory");

		//PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0 
		$stmt->setFetchMode(PDO::FETCH_NUM);
		echo "<table border=\"1\">\n";
		echo"<tr><td>date purchased</td><td>date implemented</td><td>model</td><td>serial number</td><td>company</td><td>type</td><td>product description</td><td>add notes</td></tr>\n";
		while ($row = $stmt->fetch()) {
     			printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", 	$row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
		}
       		
      		echo "</table>\n";

$stmt = null;
$conn = null;

?>

</body>
</html>