<?php
    require_once 'Config.php';
    ?>


<!DOCTYPE HTML>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Registration Form</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">

</head>


<body style="overflow-x: hidden;">

  <div>
    <?php
    if(isset($_POST['create'])){
      $firstname   =$_POST['firstname'];
      $lastname    =$_POST['lastname'];
      $email       =$_POST['email'];
      $phonenumber =$_POST['phonenumber'];
      $password    =$_POST['password'];

      $sql = "INSERT INTO users (firstname, lastname, email,phonenumber,password)
              VALUES ('$firstname','$lastname','$email','$phonenumber','$password')";

      $stmt   =$db->prepare($sql);
      $result =$stmt->execute();

    //  $result = $stmtinsert->excute([$firstname,$lastname,$email,$phonenumber,$pass]);

    if($result)  {
      echo "Successfully saved";
    }else{
      echo "There were error while saving the data";
   }





}


     ?>
  </div>


  <!-- start form -->

  <div class="row">

    <div class="col" style="background-image:url('img/bg.jpg')" id="login_img">

    </div>


    <div class="col">
      <div class="wrap_login">




      <form class="loginform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">



        <span class="login_form_tittle"> SIGN UP </span>

        <div class="wrap_input">
          <span class="label_input">First Name</span><br>
          <div class="firstnamerror"> </div>
          <input class="input" type="text" name="firstname" id="firstname" placeholder="First name..." value="<?php if (isset($firstname)) { echo $firstname;}?>" required>
          <span class="asterisx">*</span>
        </div>


        <div class="wrap_input">
          <span class="label_input">last name</span><br>
          <div class="lastnamerror"> </div>
          <input class="input" type="text" name="lastname" id="lastname" placeholder="Last name..." value="<?php if (isset($lastname)) { echo $lastname;}?>" required>
          <span class="asterisx">*</span>
        </div>

        <div class="wrap_input">
          <span class="label_input">Email</span><br>
          <div class="emailerror"></div>
          <input class="input" type="text" name="email" id="email" placeholder="Email Address..." value="<?php if (isset($email)) { echo $email;}?>" required>
          <span class="asterisx">*</span>
        </div>

        <div class="wrap_input">
          <span class="label_input">Phone Number</span><br>
          <div class="phoneerror"></div>
          <input class="input" type="text" name="phonenumber" id="phonenumber" placeholder="Your phone number..." value="<?php if (isset($phonenumber)) { echo $phonenumber;}?>" required>
          <span class="asterisx">*</span>
        </div>

        <div class="wrap_input">
          <span class="label_input">Password</span><br>
          <input class="input" type="Password" name="password"  id="password" placeholder="***********" required>
          <span class="asterisx">*</span>
        </div>



        <div class="form_checkbox">
          <input type="checkbox" class="input_checkbox" id="chb" name="agreement">

          <span class="txt"> I agree to the <a href="#" class="hov1">Terms of User</a></span>

        </div>

    <!-- ---------------------------- submit button ----------------------->
    <div class="container">
      <div class="row">

       <div class="col" style="text-align: center;">
         <input class="login_form_btn reg" type="submit" name="create" id="Register" value="sign up">
       </div>



   </div>
</div>

<div class="text_center">
  <span class="txt2">or sign up using <span><br>
    <div class="social_item">
    <a href="#" ><i class="fab fa-facebook-f"></i></a>
    <a href="#" ><i class="fab fa-twitter"></i></a>
    <a href="#" ><i class="fab fa-google"></i></a>
    </div>
</div>

      </form>

    </div>
</div>
  </div>




    <script src="js/all.min.js"></script>    
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/custom.js"></script>



  </body>
  </html>
