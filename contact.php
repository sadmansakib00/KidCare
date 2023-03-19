<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Contact - KidCare</title>
    <?php include "commoncode.php" ?>
</head>

<body>
    <section class="header_info">
        <?php include "headernav.php"; ?>
    </section>


    <section class="contact_form_info">
        <div class="container">
            <h1 class=text-center>Write to us</h1>
            <form action="submit_form.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last-name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" name='submit' class="btn btn-success contact-form-btn">Submit</button>
            </form>
        </div>
    </section>

    <section class="contact_address_info">
        <div class="container pt-4">
            <h1 class="text-center">Contact Us</h3>
                <div class="row pt-3">
                    <div class="col-sm">
                        <p>Salts Street, Shaw and Crompton</p>
                        <p>Oldham</p>
                        <p>OL2 7SY</p>
                        <p>Get Directions</p>
                    </div>
                    <div class="col-sm">
                        <p>0800 307 0155</p>
                        <p>Send us an email</p>
                    </div>
                    <div class="col-sm">
                        <p>Mon to Fri - 9am-3:30pm</p>
                        <p>BC - 7.30-8.45am, ASC - 3.15-6.00pm</p>
                    </div>
                </div>
        </div>
    </section>

    <section class="footer_info">
        <?php include "footer.html" ?>
    </section>
</body>

</html>
