<?php
    //Sending mail to admin
    if(isset($_POST['submit'])){
        $to = "md.sadman.sakib2@g.bracu.ac.bd"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $subject = "Form submission by " . $first_name . " " . $last_name;
        $temp_message = $_POST['message'];
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message']
                    . "\n\nSenders email address: " . $from;
        /*
        $subject2 = "Copy of your form submission";
        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
        */

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;

        //mail($to, $subject, $message, $headers);
        //mail($to, $subject, $message, "From:". "admin01@kidcare.com"); //Only works when I keep header to local server admin account. I gotta check why this happens
        //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        mail("admin01@kidcare.com", $subject, $message, $headers); //sends the admin a copy of the message

        $full_name = $first_name . " " . $last_name;     //Full name to be used in thank you page.
        header("Location: thank_you.php?full_name=$full_name");
        //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
     }


    //Storing contact form data in database
    $con = mysqli_connect('localhost', 'root');
    if($con) {
        //echo "connection successful";
        mysqli_select_db($con, 'KidCareContactForm');
        $query = "INSERT INTO queryfrompeople(FirstName, LastName, Email, Message)
                    VALUES ('$first_name','$last_name','$from','$temp_message')";
        mysqli_query($con, $query);
    } else {
        echo "Connection unsuccessful";
    }

?>
