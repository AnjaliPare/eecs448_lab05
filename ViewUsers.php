<?php
   $flag = false;
   $mysqli = new mysqli("mysql.eecs.ku.edu", "anjalipare", "ohVeequ3", "anjalipare");
   if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
       exit();
   }
   echo "<h1>Here are the users:</h1>";
    $query = "SELECT * FROM Users";
    if ($result = $mysqli->query($query))
    {
      while ($row = $result->fetch_assoc())
      {
        echo ($row["user_id"]);
        echo "<br>";
      }
    }

 /* check connection */
$mysqli->close();
?>
