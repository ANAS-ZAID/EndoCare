

<?php
if(!isset($_COOKIE['userName']))
header("Location: login_and_signup_scereen.php");
else
echo "";


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>حجز موعد</title>
    <link rel="stylesheet" href="../Css/Booking.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <style>
        .linkbooking{   background-image: linear-gradient(to top, #1D3557,#131832);
        border-radius:10px;
        box-shadow: 0px 0px 5px black;
     }
    .nav li:hover{
        background-image: linear-gradient(to top, #1D3557,#131832);
        transform: scale(1.1);
        border-radius:20px;
     }
form{
    width: 350px;
    height: 390px;
}
main{
height: 500px;
}
input[type="date"] {
  width: 80%;
  margin: auto;
  padding: 5%;
  border-radius: 5px; /*لسحب اطار العنصر الى الداخل بمقدار معين*/
  border: 1px solid #1d3557;
  font-size: 20px;
  color: #1d3557;
}
input:focus{
outline: 1px solid #131832;
box-shadow:0px 0px 10px #131832;
}
</style>
</head>
<?php
  ?>
<body dir="rtl">
<?php    include "../../initionl.php"; 
 include "../../controllers/booking_controller.php";
 if(isset($_POST['booking']))
{
   
    
    $stateusRequestAddBooking=appBooking();

}


?>
    
  

    <main>
  <?php if(!isset($stateusRequestAddBooking)){  
   echo    ' <form action="#" method="POST">
            <label>حجز موعد استشارة</label>
            <input type="text" name=" pat_name" placeholder="الاسم" require autofocus="on"><br>
            <input type="tel" name="  pat_phone" placeholder="رفم الهاتف" require  maxlength="9" ><br>
            <input type="text" name="pat_state" placeholder="الحالة"><br>
            <input type="date" name=" date" placeholder="مةعد الحجز" required>
            <!-- <textarea name="massage" cols="20" rows="2" placeholder="رساله"></textarea><br> -->
            <input type="submit" value="حجز" name="booking">




        </form>





    </main>';

}?>



<?php include "../../core/sheards/footer.php"?>
    </body>
    </html>