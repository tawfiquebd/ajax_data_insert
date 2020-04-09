<?php
include_once "config/dbconfig.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="author" content="Md Tawfique Hossain">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <meta name="description" content="Division Information related website">
    <meta http-equiv="X-UA-compatible" content="ie=edge , chrome=1">
    <title>Ajax Crud System Practice</title>

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

<!-- Insert data -->
<?php 
    if(isset($_POST['namee'])){

            $name = $_POST["namee"];
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
                // if($insertResult){
                //     echo "<h2  style='color: green;position:absolute;top:55px;left:40%;font-size:26px;'>Data Inserted Successfully</h2>";
                //     }
                // else{
                //     echo "<h2  style='color: red;position:absolute;top:55px;left:40%;font-size:26px;'>Data Inserted Failed!</h2>";
                //     }
            }
        }
?>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="text-center table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <!-- get all data -->

                        <?php
                            $sql = "SELECT * FROM users ORDER BY id DESC";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)) :

                                $name = $row['name'];
                                $email = $row['email'];
                                $phone = $row['phone'];

                         ?>

                            <tr>
                                <td><?php echo $name?></td>
                                <td><?php echo $email?></td>
                                <td><?php echo $phone?></td>
                                <td><button class="btn btn-warning">Edit</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>

                        <?php endwhile ; ?>

                    </tbody>
                    
                    


                </table>
            </div>
        </div>
    </div>


</body>
</html>
