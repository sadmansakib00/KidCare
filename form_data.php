<?php
session_start();

// Checking if an admin is logged in
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Form data</title>
    <?php include "commoncode.php" ?>
</head>

<body>
    <section class="header_info">
        <?php include "headernav.php"; ?>
    </section>

    <section class="form_submissions_info_for_admin">
        <div class="container">
            <h1 class="text-center">Contact Form Submissions</h1>
            <table class="table table-striped form-table">
                <thead class="form-table-head">
                    <tr>
                        <th></th>
                        <th>Index</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Admin remark</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                          $db = mysqli_connect("localhost", "root", "", "kidcarecontactform");
                          if($db-> connect_error) {
                              echo "Failed to connect to MySQL: " . $db -> connect_error;
                              exit();
                          }
                          $query = "SELECT * FROM queryfrompeople";
                          $result = mysqli_query($db, $query);
                          $data = mysqli_fetch_all($result, MYSQLI_ASSOC);


                          foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td>" . "<input type=\"checkbox\" class=\"form-check-input\" />" . "</td>";
                            echo "<td>" . $row["PersonID"] . "</td>";
                            echo "<td>" . $row["FirstName"] . "</td>";
                            echo "<td>" . $row["LastName"] . "</td>";
                            echo "<td>" . $row["Email"] . "</td>";
                            echo "<td>" . $row["Message"] . "</td>";
                            echo "<td class = \"text-truncate\" style=\"max-width: 150px;\">" . $row["AdminMessage"] . "</td>";
                            echo "<td>" . "<button type=\"button\" class=\"btn btn-primary custom-button-color delete-contact-form-row-button\" id=". $row["PersonID"] . ">Delete</button>" .
                                            "<button type=\"button\" class=\"btn btn-primary custom-button-color ms-1 modify-contact-form-row-button\" id=". $row["PersonID"] . ">Comment</button>" . "</td>";
                            echo "</tr>";
                          }

                          mysqli_close($db);
                    ?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript">
            $(".delete-contact-form-row-button").click(function() {
            var confirmed = confirm("Are you sure you want to delete this item?");
            if (!confirmed) {
                return;
            } else {
                var id = this.id;
                var button = $(this);
                $.ajax({
                    type: "POST",
                    url: "form_data_control.php",
                    data: {
                            pid : id
                        },
                    success: function(response) {
                        //console.log("here I am");
                        //button.closest('tr').remove();
                        location.reload();
                    }
                });
            }
            });

            $(".modify-contact-form-row-button").click(function() {
                var id = this.id;
                var url = "admin_message.php?id=" + id;
                window.location.href = url;
            });
        </script>
    </section>

    <section class="footer_info">
        <?php include "footer.html" ?>
    </section>

</body>

</html>
