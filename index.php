<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<img src="Rectangle 1.png" class="bg" width="100%" height="110%" alt="">
    <div class="container">
        <h1>Welcome To Lbs HArda Trip Form</h1>
        <p>Enter Your Details to confirm your participants in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name?">
            <input type="text" name="age" id="age" placeholder="Enter your age?">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender?">
            <input type="email" name="email" id="email" placeholder="Enter your email?">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="7" placeholder="Enter any other information here"></textarea>

            
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
</body>
<script src="index.js"></script>
</body>
</html>

<?php

if(isset($_POST['name'])){

    $server= "localhost";
    $username= "root";
    $password= "";
    $db = "trip";
    
    $con= mysqli_connect( $server ,$username , $password , $db);
    
    if(!$con){
        die("connection to this data failed due to". mysqli_connect_error());
    }
    echo "Success connecting to the dp";
    
    
    $name = $_POST['name'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $desc= $_POST['desc'];
    
    $sql = "INSERT INTO trip ( name, age, gender, email, phone, other, date) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;
    
    if($con-> query($sql)== TRUE){
        echo "Successfuly Inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    
    $con->close();
    
}
    ?>