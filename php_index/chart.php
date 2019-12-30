<!-- https://www.chartjs.org/ -->
<?php
require_once('dbconn.php');
require_once('get_date.php');
require_once('input.php');
require_once('chart.php');

//Do Search


//Do Update
$dates_in_json = selDB($conn);
updb($conn);

//
// require_once ('dbconn.php');

// $sql = "INSERT INTO userdate (`date`, id, );
// VALUES ('John', 'Doe')";

// $conn = db_connect();
// $sql = "";
// $data = $conn->fetchData();
// $return_data = [];
// for($i = 0; $i < sizeof($data); $i++){
// 	$return_data[$i] = array(
// 			backgroundColor => utils.transparentize(presets.red),
// 			borderColor => presets.red,
// 			data => generateData(),
// 			hidden => true,
// 			label => 'D0'
// 	);
// }
// return json_encode($return_data);
// $title = str_replace("\"","\\\"",$title);//Add annotations_02
//wait of using 小浩指教


// Create connection
// echo $dates_in_json;

// Check connection

// echo "Connected successfully";

//For PDO Connection // follow dy https://www.w3schools.com/php/php_mysql_connect.asp
// $servername = "localhost";
// $username = "herb4794";
// $password = "4794bbvvhy";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password,"user_info");
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }

