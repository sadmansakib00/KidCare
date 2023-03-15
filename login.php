<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Page - KidCare</title>

    <?php include "commoncode.php" ?>
</head>

<body>

    <section class="header_info">
        <?php include "headernav.html" ?>
    </section>

    <section class="login_info">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Log In</h2>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary custom-button-color">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="footer_info fixed-bottom">
        <?php include "footer.html" ?>
    </section>

</body>

</html>
