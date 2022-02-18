<?php
$insert = false;
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password, "regis");

  if(!$con){
      die("connection to this database is failed due to" .
      mysqli_connect_error());
  }
    //echo "Success connecting to db";

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $desc = $_POST['desc'];
  $sql="INSERT INTO regis (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
  //echo sql;
  
  if($con->query($sql) == true){
   // echo "Successfully Inserted";
  }
  else{
    echo "Error: $sql <br> $conn->error";
  }

  $con->close();
}
?>
<html>
  <head>
    <title>Thank you</title>
    <link rel="stylesheet" href="stt" class="css">
</head>

<body>

<center>
<h1>Thanks for your Registration<h1>
</center>

<img class="o" src="images/o1.jpg" width="1600" height="800" alt="venture hotel">
</body>
</html>