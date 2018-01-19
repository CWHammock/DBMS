<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <title>Insert form</title>
 </head>
 <body>
<div style = "width:60%; float:left">
<?php include 'index.html'; ?>
</div>
<form action="insert.php" method="post">
 name: <input type="text" name="name"/><br>
 street: <input type="text" name="street"/><br>
 city: <input type="text" name="city"/><br>
 <input type="Submit" value= "Insert"/><input type="Reset"/>
</form>
 </body>
 </html>