<?php
include_once 'db.php';
include 'display.php';
echo "<h2> Display the information </h2>";
display("SELECT e.employee_id, e.first_name, e.middle_initial, e.last_name, e.employee_street, e.employee_city, e.employee_state, e.employee_zip, d.division, d.role, s.hours_a_week, s.work_weekends, s.shift, c.certification FROM employee e, department d, empschedule s, certify c WHERE d.department_id=e.department_id AND c.certify_id = e.certify_id AND e.empschedule_id=s.empschedule_id;");
?>
<form action="deleteEmployee.php" method="post">
<h2>Name to Select: </h2>
Employee ID: <input type="text" name="employee_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>

<div style = "width:30%; float:left">
<?php include 'menu.html'; ?>
</div>