<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>الاطباء</title>
    <link rel="stylesheet" href="../Css/doctors.css">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/footer.css">
<style>
     
.linkdoctors{   background-image: linear-gradient(to top, #1D3557,#131832);
        border-radius:10px;
        box-shadow: 0px 0px 5px black;
     }
    .nav li:hover{
        background-image: linear-gradient(to top, #1D3557,#131832);
        transform: scale(1.1);
        border-radius:20px;
     }
     summary{
        list-style:none;
     }
     summary:hover{
    transform: scale(1.1);
    margin-right: 30px;
    transition: 0.5;
  cursor:pointer ;
  color:#131832;

}
.p2{ }
     </style>

</head>
<body dir="rtl">
<?php 
include "../../initionl.php"; ?>

<main>
<div class="doctor">
    <div class="imgDoctor">
<img src=" ../img/Dr.-Basem.png" alt="دكتور"></div>
<div class="inforDoctor">
<h1> د/عبدالله حسن المهاجري</h1>
<details>

<summary title=" انقر لعرض المزيد ">

<p>التخصص / غدد صماء وسكري</p>

</summary>
<p style="color: #b0c3ed;">بكالوريوس طب عام وجراحة - القاهرة

ماجستير الأمراض الباطنة - القاهرة

الزمالة البريطانية للأطباء الباطنيين شهادة الإختصاص البريطانية للغدد الصماء والسكري شهادة الاختصاص البريطانية لطب المسنين إستشاري الأمراض الباطنة والغدد الصماء والسكر</p>
    </details>
 


</div>

</div>
<!-- <div class="doctor">
    <div class="imgDoctor">
<img src="../img/Dr.-Basem.png" alt="دكتور"></div>
<div class="inforDoctor">
<h1>د/عبدالله</h1>
<p>التخصص / غدد صماء وسكري</p>
</div>
 -->

</main>



    <?php include "../../core/sheards/footer.php"?>
</body>
</html>