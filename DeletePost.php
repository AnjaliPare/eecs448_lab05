<?php
   $mysqli = new mysqli("mysql.eecs.ku.edu", "anjalipare", "ohVeequ3", "anjalipare");
   if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
       exit();
   }
   echo "Here are the post ids of the posts that were deleted:<br> ";
    $query = "SELECT * FROM Posts";
    if ($result = $mysqli->query($query))
    {
      while ($row = $result->fetch_assoc())
      {
        if(isset($_POST[$row['post_id']]))
        {
          $deleteWhich = $row['post_id'];
          $deletepost = "DELETE FROM Posts WHERE post_id=$deleteWhich";
        if ($mysqli->query($deletepost))
        {
          echo $row['post_id'];
          echo "<br>";
        }
        }
      }

    }
 /* check connection */
    $mysqli->close();
    echo "<br><br><br>";
    echo "<br><a href='AdminHome.html'>Admin Home </a>";
?>
