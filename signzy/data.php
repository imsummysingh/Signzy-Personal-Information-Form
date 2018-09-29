<?php
        session_start();

        if (isset($_POST['name'])) {

            if (empty(($_POST['name'])) || empty(($_POST['username'])) 
            || empty(($_POST['password'])) || empty(($_POST['confirmpassword'])) 
            || empty(($_POST['phoneno'])) || empty(($_POST['email'])) || empty(($_POST['address']))) 
            {
                echo "All the fields are required";
            } else {
                $conn = new mysqli("localhost", 'root', '');
                $conn->select_db("signzy");
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirmpassword'];
                $phone_no = $_POST['phoneno'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $sql="INSERT INTO Personal_Information(`name`, `username`, `password`, `confirm_password`, `phone_no`, `email`, `address`) 
                VALUES ('$name' ,'$username','$password','$confirm_password','$phone_no','$email','$address')";
                $conn->query($sql);

                if($conn==TRUE)
                {
                    $success="Success";
                    $_SESSION['success']=$success;
                    header("Location:index.php");
                }
            }
        }
    ?>