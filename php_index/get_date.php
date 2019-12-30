<?php
//require_once ('dbconn.php');

function selDB($conn){
    //global $conn;
    $sql = "SELECT * FROM `userdate`";
    $result = mysqli_query($conn,$sql);
    $dates = [];
    while($row = mysqli_fetch_assoc($result)){
        //print_r($row);
        $dates[] = $row;
    };
    $dates_in_json = json_encode($dates);
    return $dates_in_json;
}

function updb ($conn){
    //require_once ('dbconn.php');
    //global $conn;
    $sql = "UPDATE userdate SET `date`='923' where id=7 ";

    if ($conn->query($sql) === TRUE) {
        "Record updated successfully";
    } else {
       echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>