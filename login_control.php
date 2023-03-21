<?php
$con = mysqli_connect("localhost", "root", "", "kidcareadmin");

if($con) {
    //echo "connection successful";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admincreds WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if ($result === false) {
        echo "Error executing query: " . mysqli_error($con);
        exit();
    }

    if($result->num_rows == 1) {
    	session_start();
    	$_SESSION['email'] = $email;
        $_SESSION['loginFlag'] = 1;
    	header("Location: form_data.php");
    	exit();
    } else {
    	//echo "Invalid email or password.";
    	header("Location: login_error.php");
    	exit();
    }

    // Close the database connection
    mysqli_close($db);
} else {
    echo "Connection unsuccessful";
}
?>
