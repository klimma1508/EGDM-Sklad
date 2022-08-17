<?php
    $ID = htmlspecialchars(trim($_POST["ID"]));
    $name = htmlspecialchars(trim($_POST["Name"]));
    $pcs = htmlspecialchars(trim($_POST["PCS"]));
    

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


    $sql = "INSERT INTO Storage (ID, Name, StorageID, PCS) VALUES ('0','" . $name . "','" . $ID . "','" . $pcs . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();


    echo "<p>Got: ID:" . $ID . "Name:" . $name . "PCS:" . $pcs . "</p>";
?>