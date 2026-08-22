<?php
$display="style=display:none";  
if(isset($_COOKIE['userName']))
$display="style=display:block"; 

?>

    <header class="header">
        <h1 >
            مركز إسطبول الطبي
        </h1>

    </header>
    <nav class="nav">
        <ul style="width:900px;">
            <li class="linkhome">
                <a class="main_link" href="home_scereen.php">الصفحة الرئيسية</a>
            </li>
            <li class="linkservices">
                <a class="main_link " href="services_scereen.php"> خدماتنا</a>
            </li>
            <li class="linkbooking">
                <a class="main_link" href="booking_scereen.php">حجز موعد</a>
            </li>
            <li class="linkdoctors">
                <a class="main_link" href="doctors_scereen.php"> الاطباء</a>
            </li>
            <!-- <li class="linkinformation">
                <a class="main_link" href="information.php"> معلومات عنا</a>
            </li> -->
            <li class="linklogin">
                <a class="main_link" href="login_and_signup_scereen.php"> تسجيل الدخول</a>
            </li>
            <li class="linklogout" >

                <a class="main_link" href="logout.php" <?php echo $display ?> > تسجيل الخروج</a>
            </li>
            <li class="linklogout" >

<a class="main_link" href="display_patients.php" <?php echo $display ?> >  المواعيد المحجوزه</a>
</li>
        </ul>

    </nav>