<?php
$title = 'Date_Analysis';
$servername = "localhost";
$username = "herb4794";
$password = "4794bbvvhy";
$database = "user_info";
$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// echo '<h3>User_info</h3>';
// $connect_the_table = $conn->query('select * from `userdate` order by date desc');
// while ($writer = $connect_the_table->fetch_object() ){
//     echo $writer->name . '<footer></footer>';
// }

// echo '<h3>USER_ASC</h3>';
// $order_by_asc = $conn->query('select * from `userdate` order by date asc');
// while( $writer_asc = $order_by_asc->fetch_object() ){
//     echo $writer_asc->date . '<footer></footer>';
// }
// //$conn->close();
?>