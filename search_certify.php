<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<head>
<title>searchCert</title>
</head>

<body>

<?php 
include_once 'db.php';

#form data

$certify=$_POST['certify'];
 
$sql = "select c.certification, e.employee_id, e.first_name, e.last_name, d.division, d.role, s.hours_a_week, s.work_weekends, s.shift FROM employee e, department d, empschedule s, certify c WHERE d.department_id=e.department_id AND e.empschedule_id=s.empschedule_id AND c.certify_id = e.certify_id AND c.certify_id = :certify";  
$stmt = $conn->prepare($sql);
$stmt->bindValue(':certify', $certify);

If($stmt->execute())
{
	$rows_affected = $stmt->rowCount();

	if($rows_affected > 0)
	{
    		$result = $stmt->fetchAll();
                                       echo '<h2>Search Results:</h2>';
    		echo "<table border=1>\n";
    		echo "<tr><th>Certification</th><th>ID</th><th>First</th><th>Last</th><th>Division</th><th>Role</th><th>Hours</th><th>Weekends</th><th>Shift</th></tr>\n";
    		foreach($result as $row){
          			printf("<tr><td>%s </td><td>%s</td><td>%s</td><td>%s </td><td>%s</td><td>%s</td><td>%s </td><td>%s</td><td>%s</td></tr>\n", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
   
  		}
   	echo "</table>\n";
	}
                   else{
		echo 'There is no techs found';
	}
}
else
{
 	echo "\nPDOStatement::errorInfo():\n";
	print_r($stmt->errorInfo());
}
$stmt = null;
$conn = null;

?>
<FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.html'"> 
</FORM>
</body>
</html>