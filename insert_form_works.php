<!DOCTYPE html>
<html>
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>Insert form</title>
    </head>
    <body>

<div style = "width:30%; float:left">
</div>

	<form action="insert_works.php" method="post">
	    Employee ID: <input type="number" min="0" name="employee_id"/><br>
	    Inventory ID: <input type="number" min="0" name="inventory_id"/><br>
        Date Assigned: <input type="date" name="date_assigned"/><br>
	    Inventory ID: <input type="date" name="date_complete"/><br>
        Description: <input type="text" name="description"/><br>
	    Additional Notes: <input type="text" name="notes"/><br>
	    

	    <input type="Submit" value= "Insert"/><input type="Reset"/>
	</form>

<div style = "width:30%; float:left">
</div>

	<form action="insert_form_works2.php" method="post">
    	<h2> Find Tech</h2>
	<p>Select type of certification needed for job:</p>
	    Customer Name: <select name="certify">
        <option value="1">CompTIA A+</option>
  		<option value="2">CompTIA Network+</option>
  		<option value="3">CompTIA Security+</option>
  		<option value="4">MCSE</option>
        <option value="5">MCITP</option>
  		<option value="6">MCTS</option>
  		<option value="7">CompTIA Linux+</option>
		</select><br>
     <h2> Find Inventory</h2>
	<p>Type Description of the job:</p>
	    Description: <input type="text" name="description"/><br>
        <input type="submit" value= "Search"/><input type="reset"/>
	</form>

<FORM>
<INPUT Type="BUTTON" Value="Home Page" Onclick="window.location.href='index.html'"> 
</FORM>
    </body>
   </html>