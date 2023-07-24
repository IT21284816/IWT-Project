
    <?php 
    error_reporting(0);
    //check if form submitted, insert form data into token table.

    if(isset($_POST['Generate Token']))
    {
        $vehicleno=$_POST['vehicleno'];
        $vehicletype=$_POST['vehicletype'];
        $checkin=$_POST['checkin'];
    
        //include database connection file
        require_once("config.php");

        //Insert vehicle data into table
        $sql="INSERT INTO token (vehicleno,vehicletype,checkin) VALUES ('$vehicleno','$vehicletype','$checkin')";
    
          if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        mysqli_close($conn);
        }
?>


