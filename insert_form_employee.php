<!DOCTYPE html>
<html>
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>Insert form</title>
    </head>
    <body>

<div style = "width:30%; float:left">
</div>

	<form action="insert_employee.php" method="post">
	    First Name: <input type="text" name="first"/><br>
	    Middle Name: <input type="text" name="middle"/><br>
	    Last Name: <input type="text" name="last" size="45"/><br>
	    Street: <input type="text" name="street"/><br>
	    City: <input type="text" name="city"/><br>
	    State: <input type="text" name="state"/><br>
	    Zip: <input type="text" name="zip"/><br>
        Schedule: <select name="schedule">
        <option value="1">30 week, weekends, 1st shift</option>
  		<option value="2">30 week, weekends, 2nd shift</option>
        <option value="3">30 week, weekends, 3rd shift</option>
        <option value="4">30 week, no-weekends, 1st shift</option>
  		<option value="5">30 week, no-weekends, 2nd shift</option>
        <option value="6">30 week, no-weekends, 3rd shift</option>
        <option value="7">40 week, weekends, 1st shift</option>
  		<option value="8">40 week, weekends, 2nd shift</option>
        <option value="9">40 week, weekends, 3rd shift</option>
        <option value="10">40 week, no-weekends, 1st shift</option>
  		<option value="11">40 week, no-weekends, 2nd shift</option>
        <option value="12">40 week, no-weekends, 3rd shift</option>  		
		</select><br>
	    Department: <select name="department">
        <option value="1">HelpDesk, Phone Tech</option>
  		<option value="2">HelpDesk, Bench Tech</option>
  		<option value="3">HelpDesk, Configuration Tech</option>
  		<option value="4">Network, System Aministrator</option>
        <option value="5">Network, System Redundancy</option>
  		<option value="6">Network, Network Aministrator</option>
  		<option value="7">Network, Network Engineer</option>
		</select><br>
        Main Certification: <select name="certify">
        <option value="1">CompTIA A+</option>
  		<option value="2">CompTIA Network+</option>
  		<option value="3">CompTIA Security+</option>
  		<option value="4">MCSE</option>
        <option value="5">MCITP</option>
  		<option value="6">MCTS</option>
  		<option value="7">CompTIA Linux+</option>
		</select><br>

	    <input type="Submit" value= "Insert"/><input type="Reset"/>
	</form>
<FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.html'"> 
</FORM>

    </body>
   </html>