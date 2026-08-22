<?php 





include '../../core/constants/roots.php';
 include("../../".$loginAndSignupController);
// include "../../controllers/login_and_signup_controller.php";
// if () {
//     # code...
// }
if(isset($_POST['login']))
{$stateusRequestAddBooking=onSubmitLogin();

   
}
if(isset($_POST['signup']))
{
    
    $stateusRequestSignup=onSubmitSignup();}

if(isset($_COOKIE['userName']))
header("Location:home_scereen.php");
 
?> 


<!DOCTYPE html>
<head>


<link rel="stylesheet" href=" ../css/sheard_styles.css">

<link rel="stylesheet" href=" ../css/login_and_signup_styles.css">
</head>


<body dir="rtl" class="body">
<?php if(!isset($stateusRequestLogin)){?>
   
<form action="" method="get" class="form-button-login-signup">
<button class="button-login-signup button-login  hover-button" type="submit" name="display_form_login" value="login">تسجيل الدخول</button>
<button class=" button-login-signup button-signup hover-button" type="submit" name="display_form_signup" value="signup">انشاء حساب</button>

</form>

<main >
    
<?php

if(isset($_GET["display_form_signup"])|| isset($POST["signup"]))
{
?>
<form class="form"   action="#" method="post">
    <label> انشاء حساب</label>
<input type="text" name="userName"  class="input" placeholder="الاسم" required  autofocus="on">

<input type="tel" name="userPhone"  class="input" placeholder="رقم الهاتف"  maxlength="9">
<?php
//   if(isset($stateusRequestSignup['state'])&&$stateusRequestSignup['state']==false) {
    
//     echo"<h2>

// لا يمكنك انشاء حسابين بنفس الرقم
//             </h2>";
         


// } 
 
 ?>
<input type="password" name="password"  class="input" placeholder="كلمة السر" required minlength="4">
<input type="submit" value="انشاء" name="signup" class="button  hover-button">
<!-- <input type="button" value="الغاء" onclick="location.href='home.php'"> -->

</form>
<?php  }  else { ?>

    <form class="form form-login" action="#" method="post"  >
    <label>تسجيل الدخول</label>
<input type="text" name="userName"  class="input" placeholder="الاسم"  required  autofocus="on" >
<?php
//  if(isset($stateusRequestLogin['erorrUserName'])) {echo $stateusRequestLogin['errorUserName'];} 
 
 ?>


<input type="password" name="password"  class="input"  placeholder="كلمة السر" required >

<input type="submit" value="تسجيل" name="login"  class="button  hover-button">


<!-- <input type="button" value="الغاء" onclick="location.href='home.php'"> -->

</form>


<?php }?>
</main>
<?php }?>





</body>


