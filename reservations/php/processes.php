<?php 
$host='localhost';
$user='root';
$pass='';
$db='STS';

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    echo "Connection is failed";
}else{
    $vNO = $_REQUEST["vehicleno"];
    $type = $_REQUEST["vechicaltype"];
    $depDate = $_REQUEST["depdate"];
    $arrDate = $_REQUEST["arrdate"];
    $depTime = $_REQUEST["deptime"];
    $arrTime = $_REQUEST["arrtime"];

    $sql = "insert into reservation (vehicle_No, Type, departure_date, arrival_date, departue_time, arrival_time) values ('$vNO' , '$type', '$depDate','$arrDate','$depTime','$arrTime')";

    if ($conn->query($sql) === TRUE) {
         $qSqL = "update parkingslots set bookStatus = 1 where bookStatus = 0 limit 1";
         if ($conn->query($qSqL) === TRUE) {
            echo "New record created successfully";
         }
         echo "Error: " . $sql . "<br>" . $conn->error; 
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}

?>

