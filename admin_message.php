<?php
session_start();

// Checking if an admin is logged in
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "kidcarecontactform");

    if($con) {
            $query = "SELECT * FROM queryfrompeople WHERE PersonID=$id";
            $result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);
            mysqli_close($con);
    } else {
        echo "Connection unsuccessful";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['person_id']) && isset($_POST['admin_message'])) {
        $person_id = $_POST['person_id'];
        $admin_message = $_POST['admin_message'];

        $con = mysqli_connect("localhost", "root", "", "kidcarecontactform");
        if($con) {
        $query = "UPDATE queryfrompeople SET AdminMessage='$admin_message' WHERE PersonID=$person_id";
        mysqli_query($con, $query);
        mysqli_close($con);
    } else {
        echo "Connection unsuccessful";
    }

        header("Location: form_data.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add remark</title>
    <?php include "commoncode.php" ?>
</head>

<body>
    <section class="header_info">
        <?php include "headernav.php"; ?>
    </section>

    <section class="form_submissions_info_for_admin">
        <div class="container mb-2">
            <h1 class="text-center">A single contact form data</h1>
            <table class="table table-striped form-table">
                <tbody>
                    <tr>
                        <th>Index</th>
                        <td><?php echo $data['PersonID']; ?></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><?php echo $data['FirstName']; ?></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><?php echo $data['LastName']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $data['Email']; ?></td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td><?php echo $data['Message']; ?></td>
                    </tr>
                    <tr>
                        <th>Admin Message</th>
                        <td><?php if(isset($data['AdminMessage'])) echo $data['AdminMessage']; else echo "No admin remarks yet."; ?></td>
                    </tr>
                </tbody>
            </table>
            <form method="post" action="">
                <input type="hidden" name="person_id" value="<?php echo $data['PersonID']; ?>">
                <div class="form-group">
                    <label for="admin_message">Admin Message</label>
                    <textarea class="form-control" id="admin_message" name="admin_message" rows="5" required><?php if(isset($_SESSION['AdminMessage'])) echo $data['AdminMessage']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary custom-button-color">Add Admin Message</button>
            </form>
        </div>
    </section>

    <section class="footer_info">
        <?php include "footer.html" ?>
    </section>
</body>

</html>
