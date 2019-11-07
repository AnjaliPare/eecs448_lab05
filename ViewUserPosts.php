<?php
   $mysqli = new mysqli("mysql.eecs.ku.edu", "anjalipare", "ohVeequ3", "anjalipare");
   if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
       exit();
   }
   $user = $_POST["selectedUser"];
   echo "Displaying posts from user " . $user . "<br><br>";
   echo "<table>";
    $query = "SELECT content FROM Posts WHERE author_id='$user'";
    if ($result = $mysqli->query($query))
    {

      echo "<tr><th>Posts written by user:" . $user . "</th></tr>";
      while ($row = $result->fetch_assoc())
      {
        echo "<tr><td>" . $row["content"] . "</td></tr>";
      }

    }
 echo "</table>";
 /* check connection */
    $mysqli->close();
    echo "<br><br><br>";
    echo "<br><a href='AdminHome.html'>Admin Home </a>";
?>
