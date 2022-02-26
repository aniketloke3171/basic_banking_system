<?php
$insert = false;
if(isset($_POST['enterSName'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $enterSName = $_POST['enterSName'];
    $enterName = $_POST['enterName'];
    $enterAmount = $_POST['enterAmount'];
    
    
   
    $sql = "INSERT INTO `banks`.`money` (`Sname`, `Rname`, `amount`, `dt`) VALUES ('$enterSName', '$enterName', '$enterAmount', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

 
