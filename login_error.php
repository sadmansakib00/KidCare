<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Error</title>
        <?php include "commoncode.php" ?>
    </head>
    <body>
        <section class="header_info">
            <?php include "headernav.php"; ?>
        </section>

        <section class="login_error_info">
            <div class="container text-center mt-3">
                <h3>Invalid email or password.</h3>
                <a href="login.php" class="btn btn-primary custom-button-color" role="button">Go back to login page</a>
            </div>
        </section>

        <section class="footer_info fixed-bottom">
            <?php include "footer.html" ?>
        </section>
    </body>
</html>
