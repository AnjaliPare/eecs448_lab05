<?php


 $username = $_POST["username"];
 if(empty($username))
 {
   echo "You cannot leave the text field blank";
 }
 else
 {
   $mysqli = new mysqli("mysql.eecs.ku.edu", "anjalipare", "ohVeequ3", "anjalipare");
   if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
       exit();
   }

     $query = "INSERT INTO Users(user_id) VALUES ('$username')";
     if ($mysqli->query($query))
     {
       echo "New User Created successfully";
     }
     else {
       echo "This user already exists";
     }
     $mysqli->close();
 }
 /* check connection */

?>
