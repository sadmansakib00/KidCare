<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>About - KidCare</title>
    <?php include "commoncode.php" ?>
</head>

<body>
    <section class="header_info">
        <?php include "headernav.html"; ?>
    </section>

    <section class="thank_you_info">
        <div class="container">
            <?php
                if(isset($_GET['full_name'])) {
                    $full_name = $_GET['full_name'];
                    echo "<h1 class=\"display-2 fw-bold text-center\">Thank you, $full_name!</h1>";
                }
             ?>

        </div>
    </section>


    <section class="footer_info fixed-bottom">
        <?php include "footer.html" ?>
    </section>
</body>

</html>
