<form action="update.php" method="post">
<?php
include_once 'db.php';
$name =$_POST['name'];
# prepared statement with Unnamed Placeholders
$query = "select * from customer where customer_name = ?;";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $name); # bind by value and assign variables to each place holder

$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_NUM);
$row = $stmt->fetch();
printf("Customer Name: <input type=\"text\" name=\"name\" value=\"%s\"/><br>\n",$row[0]);
printf("Customer Street: <input type=\"text\" name=\"street\" value=\"%s\"/><br>",$row[1]);
printf("Customer City: <input type=\"text\" name=\"city\" value=\"%s\"/><br>\n",$row[2]);
?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>