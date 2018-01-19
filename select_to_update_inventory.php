<?php
include_once 'db.php';
include 'display.php';
echo "<h2> Inventory </h2>";
display("SELECT i.inventory_id, i.date_purchased, i.date_implemented, i.model, i.serial_number, i.company, i.type, i.product_description, i.add_notes, l.building, l.room_number, s.week, s.months FROM inventory i, location l, invschedule s WHERE i.location_id=l.location_id AND i.invschedule_id=s.invschedule_id;");
?>
<form action="fill_to_update_inventory.php" method="post">
<h2>Update Inventory Information: </h2>
Inventory ID: <input type="text" name="inventory_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
<form action="fill_to_update_inventory.php" method="post">
<h2>Update Inventory Location: </h2>
Inventory ID: <input type="text" name="inventory_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
<form action="fill_to_update_inventory.php" method="post">
<h2>Update Inventory Schedule: </h2>
Inventory ID: <input type="text" name="inventory_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>

