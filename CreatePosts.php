<?php


 $username = $_POST["username"];
 $userpost = $_POST["userpost"];

 if(empty($username))
 {
   echo "You cannot leave the text field blank";
   echo "<br><a href='AdminHome.html'>Admin Home </a>";
 }

 elseif(empty($userpost))
 {
   echo "You cannot leave the post field blank";
   echo "<br><a href='AdminHome.html'>Admin Home </a>";
 }
 else
 {
   $flag = false;
   $mysqli = new mysqli("mysql.eecs.ku.edu", "anjalipare", "ohVeequ3", "anjalipare");
   if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
       exit();
   }
    $query = "SELECT user_id FROM Users";
    if ($result = $mysqli->query($query))
    {

    /* fetch associative array */
      while ($row = $result->fetch_assoc())
      {
        if($username == $row["user_id"])
        {
          $flag = true;
        }
      }
    }

    if ($flag)
    {
        $data = "INSERT INTO Posts(content, author_id) VALUES ('$userpost', '$username')";
        $query = $mysqli->query($data);
        if ($query)
        {
            echo "Post written by " .$username." was successfully saved!";
            echo "<br><a href='AdminHome.html'>Back to Admin Home </a>";
        }
        else
        {
            echo "Error!";
            echo "<br><a href='AdminHome.html'>Back to Admin Home </a>";
        }

      }
      else
      {
        echo "User does not exist so cannot create posts";
        echo "<br><a href='AdminHome.html'>Back to Admin Home </a>";
      }

 }
 /* check connection */
$mysqli->close();
?>
