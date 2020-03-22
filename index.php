<?php
include_once "config/dbconfig.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="author" content="Md Sahabuddin Nahid">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <meta name="description" content="Division Information related website">
    <meta http-equiv="X-UA-compatible" content="ie=edge , chrome=1">
    <title>Division</title>

    <!-- Css Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="responsive.css" media="all" />
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />

    <!-- Js Files -->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/modernizr.js" type="text/javascript"></script>

    <style>
        .main-area{
            padding: 50px 0 40px;
            overflow: hidden;
        }
    </style>

</head>
<body>

<h3 class="text-center">Ajax Data Insert Practice | 2020</h3>

<section class="main-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-area">
                    <form id="form-insert" method="post">
                        <div class="form-group">
                            <label for="divname">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Division Name">
                        </div>
                        <div class="form-group">
                            <label for="area">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Area">
                        </div>
                        <div class="form-group">
                            <label for="districtname">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Number of District">
                        </div>

                        <input type="submit" class="btn btn-block btn-success" id="save" name="save" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    
         // $('#save').on('click',function(e){

         $('#form-insert').on('submit',function(e){
            
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            e.preventDefault();
            $.ajax({
                url:'save.php',
                type: 'POST',
                data:{
                    name: name,
                    email: email,
                    phone: phone            
                }
            })
             alert("Success");
        })

</script>

</body>
</html>

<?php

// if(isset($_POST['name'])){

//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $phone = $_POST["phone"];

//     $checkIfExist = "SELECT email FROM users WHERE email = '$email' ";
//     $checkQuery = mysqli_query($conn, $checkIfExist);
//     if(mysqli_num_rows($checkQuery) > 0){
//         echo "<h2  style='color: orange;position:absolute;top:55px;left:40%;font-size:26px;'>Email Already Exist</h2>";
//     }
//     else{
//         $query = "INSERT INTO users(name, email, phone) VALUES('$name','$email','$phone')";

//         $insertResult = mysqli_query($conn, $query);
//         if($insertResult){
//             echo "<h2  style='color: green;position:absolute;top:55px;left:40%;font-size:26px;'>Data Inserted Successfully</h2>";
//             }
//         else{
//             echo "<h2  style='color: red;position:absolute;top:55px;left:40%;font-size:26px;'>Data Inserted Failed!</h2>";
//             }
//     }
// }


?>