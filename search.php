<?php
    echo '<link rel="stylesheet" href="style.css">';
    $searchbar = htmlspecialchars(trim($_POST["searchbar"]));
    $results = htmlspecialchars(trim($_POST["res_on_page"]));


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

    if ($result == 0){
        $sql = "SELECT * FROM Storage WHERE Name LIKE '%" . $searchbar . "%' OR StorageID LIKE '%" . $searchbar ."%'";
    }

    else{
        $sql = "SELECT * FROM Storage WHERE Name LIKE '%" . $searchbar . "%' OR StorageID LIKE '%" . $searchbar ."%' LIMIT " . $results . " OFFSET 0";
    }

    
    

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        echo '<table id="table">';
        echo "<tr>";
        echo " <td> ID </td> <td> Name </td> <td> StorageID </td> <td> PCS </td> <td> MinPCS </td>  </tr>";
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. "<br>";
            echo "<tr> <td>". $row["ID"]. "</td> <td>". $row["Name"]. "</td> <td>". $row["StorageID"]. "</td> <td>". $row["PCS"]. "</td> <td>". $row["MinPCS"]. "</td> </tr> ";
        }
        echo "</table>";
    } 
    
    else {
        echo "0 results";
    }
    $conn->close();


    //echo "TEST";

?>