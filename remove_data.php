<?php
    echo '<link rel="stylesheet" href="mainstyle.css">';
    $ID = htmlspecialchars(trim($_POST["ID"]));


    $servername = "localhost";
    $username = "klimma";
    $password = "Synology123.";
    $dbname = "EGDM";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }



    
    $sql = "DELETE FROM Storage WHERE ID = " . $ID . "";
   
    

    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();

?>