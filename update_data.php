<?php
    echo '<link rel="stylesheet" href="mainstyle.css">';
    $ID = htmlspecialchars(trim($_POST["ID"]));
    $Name = htmlspecialchars(trim($_POST["Name"]));
    $SKL = htmlspecialchars(trim($_POST["SKLAD"]));
    $PCS = htmlspecialchars(trim($_POST["PCS"]));
    $MinPCS = htmlspecialchars(trim($_POST["MinPCS"]));


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



    
    $sql = "UPDATE Storage
            SET Name = '" . $Name . "', StorageID = '" . $SKL ."', PCS = '" . $PCS . "', MinPCS = '" . $MinPCS . "'
            WHERE ID = " . $ID;
   
    

    
    if ($conn->query($sql) === TRUE) {
        echo "Record Updated successfully";
    } else {
        echo "Error Updating record: " . $conn->error;
    }
    
    $conn->close();

?>