<?php
    include ('./db_connection.php');

    if(isset($_POST['VehicleNo']) && isset($_POST['VehicleType']) && isset($_POST['Date']) && isset($_POST['Time'])){

        $VehicleNo=$_POST['VehicleNo'];

        $VehicleType=$_POST['VehicleType'];

        $Date=$_POST['Date'];
    
        $Time=$_POST['Time'];
 
    
        $query = "INSERT INTO Reservation(VehicleNo,VehicleType,Date,Time) VALUES($VehicleNo,$VehicleType,$Date,$Time);
       

        $result = mysqli_query($conn,$query);


        if($result){
            echo "success";
        }else{
            echo "Can not insert data";
        }
    }
?>