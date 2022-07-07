<?php 
include 'config.php';
$msg = "";

session_start();
 if(isset($_POST['submit'])){
  $email = $_POST['usermail'];
  $name = $_POST['username'];
  $password= $_POST['password'];

  $sql="INSERT INTO user_form (email,name,password) VALUE ('{$email}','{$name}','{$password}')";
  $res = $conn->query($sql);
  if($res === true) $msg = "Data inserted successfully";
  else echo "Error inserting data";



  // $result=mysqli_query($conn, $select);
  
  // $result=mysqli_query($conn, $sql_con) or die("query failed");


  // if(
  //   mysqli_num_rows($result)>0){
  //     $error[]='user already exsist';
  //   }else{
  //     if($password!=$cpassword){
  //       $error[]='password dose not matched';
  //     }
  //     else{
       
  //       $insert="INSERT INTO user_form (email,name,password,cpassword) VALUE('$email','$name','$password',$cpassword)";
  //       musqli_query($conn,$insert);
  //       header('location:Config.php');
  //     }
  //   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
  <title>register form</title>
</head>

<body>
 
  <div class="form-container">
    <form action="registerForm.php" method="post">
    <h3>Registration</h3>
      
     <?php if(!empty($msg)) { ?>
      <div class="alert alert-success" role="alert">
           <?php echo $msg; ?>
      </div> 
      <?php } ?>

     <input type="email" name="usermail" placeholder="pleases enter your email" class="box" required="" >
     <input type="text" name="username" placeholder="pleases enter your name" class="box" required="" >
     <input type="password" name="password" placeholder="password" class="box" required="" >
     <!-- <input type="password" name="cpassword" placeholder="conform your password" class="box" required="" > -->
     <input type="Submit" value="register now" name="submit" class="form-btn">

    </form>
  </div>
  
</body>
</html>