<?php
    $con = mysqli_connect("localhost", "root", "", "kidcarecontactform");
    $pid = $_POST['pid'];
    $query = "DELETE FROM queryfrompeople WHERE PersonID = $pid";
    mysqli_query($con, $query);
    mysqli_close($con);

 ?>
