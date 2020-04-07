<?php
    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','paint and pixel');

    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");
return $conn;
?>
<!--
<html>
    <head>
    </head>
    <body>
        <h1>Admin table :</h1>
        <p>
<!--
//                $query1 = "SELECT * FROM Admin;";
//                $result1 = mysqli_query($conn, $query1);
//                if ($result1) {
//                    while ($row = mysqli_fetch_row($result1)) {
//                        print "<b>username:</b>" . $row[0] . "<br>";
//                        print "<b>password:</b> " . $row[1] . "<br>";
//                      
//                    }
//                }
//                else
//                    echo mysqli_error();
-->
<!--
        </p>
       

    </body>
</html>
-->

