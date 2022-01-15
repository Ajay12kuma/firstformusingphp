<?php
$insert= false;
if(isset($_POST['name'])){






$SERVER= "localhost";
$username="root";
$password="Aj@y19976";

$con = mysqli_connect($SERVER,$username,$password);

if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$sql="INSERT INTO `trip`.`trip_detail` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dd`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', CURRENT_TIMESTAMP);
";
// echo $sql;

if($con ->query($sql)==true){
    //echo "successfully submitted...";
    $insert= true;
}
else{
    //echo "error encountered: $sql <br> $con->error";
}

$con->close();

}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code With Harry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container">
        <h3>Welcome to IIT kharagpur Travel Form..</h3>
        <p>Enter your details for participation..</p>
        <?php

        if($insert==true){
            echo " <p class='submitMsg'> Thanks for submitting.. <p>";
        }

        ?>


        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter you name..">
            <input type="text" name="age" id="age" placeholder="Enter your age..">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender..">
            <input type="email" name="email" id="email" placeholder="Enter your Email..">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number..">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter more about you"></textarea>
            <button class="btn">Submit</button>


        </form>

    </div>



    <script src="index.js"></script>
</body>

</html>