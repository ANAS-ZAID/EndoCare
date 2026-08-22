<?php
if(!isset($_COOKIE["userName"]))
header("Location:login.php");
else
{
setcookie("userName","",time()-20);
header("refresh:2;url=login_and_signup_scereen.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>  تسجيل الخروج</title>
    <link rel="stylesheet" href="../Css/style.css">
    <style>
.linklogout{   background-image: linear-gradient(to top, #1D3557,#131832);
        border-radius:10px;
        box-shadow: 0px 0px 5px black;
     }
    .nav li:hover{
        background-image: linear-gradient(to top, #1D3557,#131832);
        transform: scale(1.1);
        border-radius:20px;
     }
    </style>
</head>

<body dir="rtl">

    <main>
        
        <div class="container">
            <h2>

تم تسجيل الخروج
            </h2>

        </div>

    </main>
</body>

</html>