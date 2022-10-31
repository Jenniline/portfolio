<?php

// with database

if (isset($_POST['submit']))
   {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   }

   if (!empty($name) || !empty($email) || !empty($subject) || !empty($message)) {
       $host = "localhost";
       $dbUsername = "root";
       $dbPassword = "swordholder";
       $dbname = "portfolio";

    //    create connection 
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_errno(). ')'. mysqli_connect_error());
        }else {
            // every user has to have a unique email
            $SELECT = "SELECT email From contact where email = ? Limit 1"; 
            $INSERT = "INSERT Into contact (name, email, subject, message) values(?,?,?,?)";

            // Prepare statement for select query
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0) {
                    $stmt->close();

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssss", $name,$email,$subject,$message); 
                    $stmt->execute();
                    echo "New record Thank you for contacting";
            }  else {
                 echo "You contacted before";
            }
            $stmt->close();
            $conn->close();
        }
   }
    else {
       echo "All field are required";
       die();
   }







?>