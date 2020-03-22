<?php

    include_once 'config/dbconfig.php';

    if(isset($_POST['name'])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $checkIfExist = "SELECT email FROM users WHERE email = '$email' ";
        $checkQuery = mysqli_query($conn, $checkIfExist);
        if(mysqli_num_rows($checkQuery) > 0){
            echo "<h2  style='color: orange;position:absolute;top:55px;left:40%;font-size:26px;'>Email Already Exist</h2>";
        }
        else{
            $query = "INSERT INTO users(name, email, phone) VALUES('$name','$email','$phone')";

            $insertResult = mysqli_query($conn, $query);
            if($insertResult){
                echo "<h2  style='color: green;position:absolute;top:55px;left:40%;font-size:26px;'>Data Inserted Successfully</h2>";
                }
            else{
                echo "<h2  style='color: red;position:absolute;top:55px;left:40%;font-size:26px;'>Data Inserted Failed!</h2>";
                }
        }
    }

?>