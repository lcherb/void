<table>
<tr><th>編號</th><th>名稱</th><th>數據</th></tr>
<?php
require_once('dbconn.php');
$res=mysqli_query($conn,'select * from userdate');
while ( $row = mysqli_fetch_assoc($res) ) {
	echo '<tr><form action="output.php" method="post">';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<td>', $row['id'], '</td>';
	echo '<td>';
	echo '<input type="text" name="name" value="', $row['name'], '">';
	echo '</td>';
	echo '<td>';
	echo '<input type="text" name="date" value="', $row['date'], '">';
	echo '</td>';
	echo '<td><input type="submit" value="確定修改"></td>';
	echo '</form></tr>';
	echo "\n";
}
?>
</table>