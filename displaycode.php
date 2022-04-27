<?php

//CLASS 
class callMyDatabase 
{
  function __construct()
  {
      $this->displayallusers();
  }
 
  function displayallusers()
  {
    require 'userdatabase.php';
    $user_displaytable = "SELECT * FROM users";
    $user_result = mysqli_query($user_conn, $user_displaytable);
    while($row = mysqli_fetch_array($user_result))
    {
      echo "<table>";
      echo "<tr>";
      echo "<td>". $row["name"] . "</td>";
      echo "<td>". $row["email"] . "</td>";
      echo "<td>". $row["password"] . "</td>";
      echo "<td>". $row["contact"] . "</td>";
      echo "</tr>";
    }
      echo "</table>";
      mysqli_close($user_conn);
  }
}
?>

