
<!DOCTYPE html>
<html>
 <head>
  <title>Display 2</title>
 </head>
 <style type="text/css">
   th {color: maroon;
   background-color: silver;}
 </style>
</head>
<body>
<div style = "width:30%; float:left">
<?php include 'index.html'; ?>
</div>

<?php 
include_once 'db.php';
	$stmt = $conn->query("SELECT c.customer_name, c.customer_city FROM customer c, borrower b, loan l WHERE c.customer_name = b.customer_name and b.loan_number = 
    l.loan_number and l.branch_name ='Perryridge';");
	//PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set 
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
}
catch(PDOException $e) {
   die("Could not connect to the database $dbname :" . $e->getMessage());
}


echo "<table border=1>\n";
echo "<tr><th>Name</th><th>City</th></tr>\n";
 
while ($row = $stmt->fetch()) {
      printf("<tr><td>%s</td><td>%s</td></tr>\n", $row['customer_name'], $row['customer_city']);
}
echo "</table>\n";
$conn = null;

?>
</body>
</html>