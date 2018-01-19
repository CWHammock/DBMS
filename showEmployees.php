<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<body>

<?php
include_once 'db.php';
include 'display.php';
echo "<h2> Techs </h2>";
display("SELECT e.first_name, e.last_name, e.middle_initial, e.employee_street, e.employee_city, e.employee_state, e.employee_zip, d.division, d.role, s.hours_a_week, s.work_weekends, s.shift, c.certification FROM employee e, department d, empschedule s, certify c WHERE d.department_id=e.department_id AND e.empschedule_id=s.empschedule_id AND c.certify_id = e.certify_id;");
?>
    <FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.html'"> 
</FORM>
</body>
</html>