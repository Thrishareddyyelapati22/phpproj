<?php
$insert=false;
if(isset($_POST['name'])){
    //database variables
$server="localhost";
$username="root";
$password="";
//create connection
$con=mysqli_connect($server,$username,$password);
//check connection
if(!$con){
    die("connection to this database failed".mysqli_connect_error());
}
// else{
//     echo "connected successfully to db";
// }
//collect post variables
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];   //in db its other but be careful with the names given
$sql="INSERT INTO `trip`.`trip` ( `name`, `gender`, `email`, `phone`, `desc`, `datetime`) VALUES ( '$name', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
//insert into database name table name
//execute query
if($con->query($sql)==true){
   // echo "successfully inserted";
   //flag for successful insertion
   $insert=true;
}
else{
echo "ERROR: $sql <br> $con->error";
}
//close database connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital@1&family=Nunito+Sans:ital,opsz,wght@1,6..12,700&display=swap" rel="stylesheet">

</head>
<body>
    <img class="bg" src="Anurag.jpeg" alt="au">
    <div class="container">
  <h1>Welcome to Anurag University Travel Tour </h1>
  <p>Enter your details to confirm your ticket</p>
  <?php
  if($insert==true){
  echo "<p class='Msg'>Thank you for Submiting the form for the AU's Trip</p>";
  }
  ?>
  <form action="index1.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your Name">
    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
    <input type="Email" name="email" id="email" placeholder="Enter your email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
  <textarea name="desc" id="desc" cols="30" rows="10 "placeholder="Enter your address info"></textarea>
  <button class="btn">Submit</button>
  
  </form>
    </div>
    <script src="index.js">
   
    </script>
</body>
</html>