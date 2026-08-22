<?php
include "../../initionl.php"; 

include("../../".$loginAndSignupController);
if(isset($_POST['login']))
{

$stateusRequestLogin=onSubmitLogin();
if(isset($stateusRequestLogin['state'])) {

    if($stateusRequestLogin['state']==false){

        $message="اسم المستخدم او"."<br>"."كلمة السر غير صحيحة";
        header("refresh:2;url=login_and_signup_scereen.php");
        //exit();
    }

    if($stateusRequestLogin['state']==true){
        $message="تم تسجيل الدخول بنجاح";
        header("refresh:2;url=booking.php");
        //exit();


    }
}}
// if(isset($_POST['login']))
// {
// $name=$_POST["user_name"];
// $password=$_POST["password"];
// $message="تم تسجيل الدخول بنجاح";

// include_once "func_chk_users.php";


// if(checkdata($name,$password)==true)
// {
// setcookie("user",$name,time()+60*60*24);
// header("refresh:2;url=booking.php");}
// else
// {
   
//      $message="اسم المستخدم او"."<br>"."كلمة السر غير صحيحة";
//     header("refresh:2;url=login.php");

// }
// }

// else
// header("location:login.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>  تسجيل الدخول</title>
    <link rel="stylesheet" href="../css/login_and_signup_styles.css">
  
</head>

<body dir="rtl">
 
    <main>
        
        <div class="container">
            <h2>

                <?php  echo $message ?>
            </h2>

        </div>

    </main>
</body>

</html>


<!-- <?php 
// if(isset($stateusRequestLogin['state'])) {

// if($stateusRequestLogin['state']==false){

// echo "هذا الحساب غير موجود";
// 
?>

<h2 class="h2" >"هذا الحساب غير موجود"</h2>   

<?php


// }


// } 

?> -->