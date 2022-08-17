<?php
        $servername = "localhost";
        $username = "klimma";
        $password = "Synology123.";
        $dbname = "EGDM";
        static $log_succes = false;
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }


            $sql = "SELECT * FROM Storage";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo " <td> ID </td> <td> Name </td> <td> PCS </td> </tr>";
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. "<br>";
                echo "<tr> <td>". $row["ID"]. "</td> <td>". $row["Name"]. "</td> <td>". $row["StorageID"]. "</td> </tr> ";
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
        $conn->close();
    ?>