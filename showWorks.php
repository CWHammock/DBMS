<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<body>

<?php
include_once 'db.php';
include 'display.php';
echo "<h2> Tickets </h2>";
display("SELECT e.first_name, e.last_name, d.division, d.role, c.certification, i.model, i.serial_number, i.company, i.type, i.product_description, i.add_notes, l.building, l.room_number, w.date_assigned, w.date_complete FROM department d, certify c, location l, employee e, inventory i, works w  WHERE d.department_id=e.department_id AND c.certify_id=e.certify_id AND l.location_id=i.location_id AND w.inventory_id=i.inventory_id AND w.employee_id=e.employee_id ORDER BY w.date_assigned;");
?>
    <FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.html'"> 
</FORM>
</body>
</html>

