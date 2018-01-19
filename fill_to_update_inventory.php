<form action="update_employee.php" method="post">
<?php
include_once 'db.php';
$inventory_id =$_POST['inventory_id'];
# prepared statement with Unnamed Placeholders
$query = "SELECT i.inventory_id, i.date_purchased, i.date_implemented, i.model, i.serial_number, i.company, i.type, i.product_description, i.add_notes, l.building, l.room_number, s.week, s.months FROM inventory i, location l, invschedule s WHERE i.location_id=l.location_id AND i.invschedule_id=s.invschedule_id;";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $inventory_id); # bind by value and assign variables to each place holder

$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_NUM);
$row = $stmt->fetch();
printf("<input type=\"hidden\" name=\"inventory_id\" value=\"%s\"/><br>\n",$row[0]);
printf("Date Purchased: <input type=\"text\" name=\"datepurchased\" value=\"%s\"/><br>\n",$row[1]);
printf("Date Implemented: <input type=\"text\" name=\"dateimplemented\" value=\"%s\"/><br>",$row[2]);
printf("Model: <input type=\"text\" name=\"model\" value=\"%s\"/><br>\n",$row[3]);
printf("Serial Number: <input type=\"text\" name=\"serialnumber\" value=\"%s\"/><br>\n",$row[4]);
printf("Company: <input type=\"text\" name=\"company\" value=\"%s\"/><br>",$row[5]);
printf("Type: <input type=\"text\" name=\"type\" value=\"%s\"/><br>\n",$row[6]);
printf("Product Description: <input type=\"text\" name=\"productdescription\" value=\"%s\"/><br>\n",$row[7]);
printf("Additional Notes: <input type=\"text\" name=\"addnotes\" value=\"%s\"/><br>\n",$row[8]);


?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>