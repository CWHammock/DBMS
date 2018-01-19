<?php
function display($query_string)
{
global $conn;
$stmt = $conn->prepare($query_string);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_NUM);
# Number of columns of the most recent query result.
$num_c = $stmt->columnCount();

# var_dump($num_c); //this is for debugging only.
echo "<table border=1>\n";
# display table headers
echo "<tr>";
for ($i = 0; $i < $num_c; $i++) 
{
	$col = $stmt->getColumnMeta($i);
	echo "<th>" . $col['name'] . "</th>";
}
echo "</tr>";
# display table content
while($row = $stmt->fetch()){
	echo "<tr>";
	$i = 0;
while($i < $num_c)
{
	echo "<td>". $row[$i]. "</td>";
	$i++;
}
echo "</tr>";
}
echo "</table>";
}
?>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>