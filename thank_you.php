<?php
session_start();

// Checking if an admin is logged in
if(!isset($_SESSION['email']) && isset($_SESSION['loginFlag'])) {
    $_SESSION['loginFlag'] = 0;
    header("Location: thank_you.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>About - KidCare</title>
    <?php include "commoncode.php" ?>
</head>

<body>
    <section class="header_info">
        <?php include "headernav.php"; ?>
    </section>

    <section class="thank_you_info">
        <div class="container">
            <h1 class="display-2 fw-bold text-center">Thank you,
                <?php
                    if(isset($_GET['full_name'])) {
                        $full_name = $_GET['full_name'];
                        echo " $full_name!";
                    }
                 ?>
            </h1>

        </div>
    </section>


    <section class="footer_info fixed-bottom">
        <?php include "footer.html" ?>
    </section>
</body>

</html>
