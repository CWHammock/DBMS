

<form action="update_employee.php" method="post">
<?php
include_once 'db.php';
$employee_id =$_POST['employee_id'];
# prepared statement with Unnamed Placeholders
$query = "SELECT e.employee_id, e.first_name, e.middle_initial, e.last_name, e.employee_street, e.employee_city, e.employee_state, e.employee_zip, e.empschedule_id, e.department_id, e.certify_id FROM employee e WHERE e.employee_id = ?;";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $employee_id); # bind by value and assign variables to each place holder

$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_NUM);
$row = $stmt->fetch();
printf("<input type=\"hidden\" name=\"employee_id\" value=\"%s\"/><br>\n",$row[0]);
printf("Firstname: <input type=\"text\" name=\"firstname\" value=\"%s\"/><br>\n",$row[1]);
printf("Middle: <input type=\"text\" name=\"middlename\" value=\"%s\"/><br>",$row[2]);
printf("Lastname: <input type=\"text\" name=\"lastname\" value=\"%s\"/><br>\n",$row[3]);
printf("Street: <input type=\"text\" name=\"street\" value=\"%s\"/><br>\n",$row[4]);
printf("City: <input type=\"text\" name=\"city\" value=\"%s\"/><br>",$row[5]);
printf("State: <input type=\"text\" name=\"state\" value=\"%s\"/><br>\n",$row[6]);
printf("Zip: <input type=\"text\" name=\"zip\" value=\"%s\"/><br>\n",$row[7]);
/* printf("Schedule: <select name=\"schedule\" value=\"%s\">
        <option value=\"1\">30 week, weekends, 1st shift</option>
  		<option value=\"2\">30 week, weekends, 2nd shift</option>
        <option value=\"3\">30 week, weekends, 3rd shift</option>
        <option value=\"4\">30 week, no-weekends, 1st shift</option>
  		<option value=\"5\">30 week, no-weekends, 2nd shift</option>
        <option value=\"6\">30 week, no-weekends, 3rd shift</option>
        <option value=\"7\">40 week, weekends, 1st shift</option>
  		<option value=\"8\">40 week, weekends, 2nd shift</option>
        <option value=\"9\">40 week, weekends, 3rd shift</option>
        <option value=\"10\">40 week, no-weekends, 1st shift</option>
  		<option value=\"11\">40 week, no-weekends, 2nd shift</option>
        <option value=\"12\">40 week, no-weekends, 3rd shift</option>  		
		</select></><br>\n",$row[8]);

 printf("Department: <select name=\"department\" value=\"%s\"/>
        <option value="1">HelpDesk, Phone Tech</option>
  		<option value="2">HelpDesk, Bench Tech</option>
  		<option value="3">HelpDesk, Configuration Tech</option>
  		<option value="4">Network, System Aministrator</option>
        <option value="5">Network, System Redundancy</option>
  		<option value="6">Network, Network Aministrator</option>
  		<option value="7">Network, Network Engineer</option>
		</select><br>\n",$row[9]);
printf("Main Certification: <select name=\"certify\" value=\"%s\"/>
        <option value="1">CompTIA A+</option>
  		<option value="2">CompTIA Network+</option>
  		<option value="3">CompTIA Security+</option>
  		<option value="4">MCSE</option>
        <option value="5">MCITP</option>
  		<option value="6">MCTS</option>
  		<option value="7">CompTIA Linux+</option>
		</select><br>\n",$row[10]);
 */
?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>
<div style = "width:30%; float:left">
<?php include 'menu.html'; ?>
</div>
