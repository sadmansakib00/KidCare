<!-- admin_panel.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Form data</title>
    <?php include "commoncode.php" ?>
</head>

<body>
    <section class="header_info">
        <?php include "headernav.html"; ?>
    </section>

    <section class="form_submissions_info_for_admin">
        <div class="container">
            <h1 class="text-center">Contact Form Submissions</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Admin remark</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                          // Retrieve data from MySQL database and store it in an array
                          $db = mysqli_connect("localhost", "root", "", "kidcarecontactform");
                          $result = mysqli_query($db, "SELECT * FROM queryfrompeople");
                          $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

                          // Use a foreach loop to display the data in the table
                          foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td>" . $row["PersonID"] . "</td>";
                            echo "<td>" . $row["FirstName"] . "</td>";
                            echo "<td>" . $row["LastName"] . "</td>";
                            echo "<td>" . $row["Email"] . "</td>";
                            echo "<td>" . $row["Message"] . "</td>";
                            echo "</tr>";
                          }

                          mysqli_close($db);
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="footer_info fixed-bottom">
        <?php include "footer.html" ?>
    </section>

</body>

</html>
