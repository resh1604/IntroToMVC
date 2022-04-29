<?php
$dbhost = "localhost";
$dbname = "lily";
$dbusername = "root";
$dbpassword = "";

$user_conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if($user_conn === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}
print_r($user_conn);

$user_display_query = "SELECT * FROM users";
$user_display_result = mysqli_query($user_conn,$user_display_query);
$total_rows = mysqli_num_rows($user_display_result);
if($total_rows > 0)
{
    while($row = mysqli_fetch_assoc($user_display_result))
    {
        echo "<table>";
        echo "<tr>";
        echo "<td>". $row["userno"] . "</td>";
        echo "<td>". $row["name"] . "</td>";
        echo "<td>". $row["email"] . "</td>";
        echo "<td>". $row["password"] . "</td>";
        echo "<td>". $row["contact"] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    mysqli_close($user_conn);
}
?>



       