<?php

    class DB
    {
        function openConn()
        {
            $DBHostname = "localhost";
            $DBusername = "root";
            $DBpass = "";
            $DBName = "testdb2";

            $conn = new mysqli($DBHostname,$DBusername,$DBpass,$DBName);
            if ($conn->connect_error)
            {
                die( "connection was unsuccesfull" .$conn->connect_error);
            }
            else
            {
                return $conn;
            }
            
        }

        function insertData($ufname, $ulname, $age, $designation, $pl, $uemail, $upass, $file, $tablename, $conn)
        {
            $sqlstr = "INSERT INTO $tablename (First_Name, Last_Name, Age, Designation, Preffered_Language, Email, Pass, F_Name) VALUES ('$ufname', '$ulname', $age, '$designation', '$pl', '$uemail', '$upass', '$file')";
    
            if($conn->query($sqlstr)===TRUE)
            {
                echo "Data inserted...";
            }
            else
            {
                echo "Failed to insert data...".$conn->error;
            }
        }
        
        function closeConn($conn)
        {
            $conn->close();
        } 
    }

?>