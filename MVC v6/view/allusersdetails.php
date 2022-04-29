<?php

//Useful for bootstrap implementation
include 'bootstrap/linksandsources.php'; 

?>

<html>
    <title>User List</title>
    <body>
        <div class="container mt-3">
            <table class="table table-hover table-bordered">
                <tr class="table-success"> 
                    <td> <b> User No </b> </td>
                    <td> <b> Name </b> </td>
                    <td> <b> Email </b> </td>
                    <td> <b> Password </b> </td>
                    <td> <b> Contact </b> </td>
                </tr>   
                <?php 
                    foreach ($returnedData as $data)
                    {
                        echo "<tr>";
                        echo "<td>". $data["userno"] . "</td>";
                        echo "<td>". $data["name"] . "</td>";
                        echo "<td>". $data["email"] . "</td>";
                        echo "<td>". $data["password"] . "</td>";
                        echo "<td>". $data["contact"] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>




    </body>
</html>

