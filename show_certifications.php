<?php
include_once 'db.php';
include 'display.php';
echo "<h2> Techs </h2>";
display("SELECT e.first_name, e.last_name, c.certification FROM certify c, employee e, certify_employee ce WHERE ce.employee_id = ce.certify_id;");
?>
<form action="fill_to_update_employee.php" method="post">
<h2>Name to Select: </h2>
Employee ID: <input type="text" name="employee_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
