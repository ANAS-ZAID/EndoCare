 <?php
    include "../../initionl.php"; 
    $name=" ";
if(isset($_COOKIE["userName"]))
$name=$_COOKIE["userName"]."<br>";

    ?>

<!DOCTYPE html>
<html lang="en">
   

<head>

    <title>الرئيسية</title>
    <link rel="stylesheet" href="../css/home_styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
.linkhome{   background-image: linear-gradient(to top, #1D3557,#131832);
        border-radius:10px;
        box-shadow: 0px 0px 5px black;
        
     }
    .nav li a:hover{
        background-image: linear-gradient(to top, #1D3557,#131832);
        transform: scale(1.1);
        border-radius:20px;
     }
     .buttons_links {
  width: 170px;
  padding: 10px; 
   margin: 10px 30px;}
   .buttons_links:hover{
  transform: scale(1.1);
  cursor:pointer ;


}
 summary:hover{
    transform: scale(1.1);
    margin-right: 30px;
    transition: 0.5;
  cursor:pointer ;
  color:#131832;

}

     
    </style>
</head>

<body dir="rtl">

     
    <main>
        <h2 class="content_title">مرحبًا بك  في مركز إسطنبول الطبي </h2>
        <h3>نحن نوفر خدمات طبية متخصصة في مجال غدد الصماء والسكري . نحن هنا لمساعدتك في تشخيص وعلاج مرضك.
            <p> مرحبًا بك    <?php  echo $name;?> في مركز  اسطنبول نحن متخصصون في تشخيص وعلاج اضطرابات الغدد الصماء ونقدم خدمات طبية متميزة لمرضانا. تتكون فرقنا من أطباء متخصصين وذوي خبرة في مجال الغدد الصماء، ونعمل جاهدين لتقديم الرعاية الشاملة والعلاج الملائم لكل مريض.اتصل بنا اليوم لتحديد موعد استشارة مع أحد أطبائنا المتخصصين  . </p>
                
        </h3>
        <details>
            <summary title=" انقر للعرض  ">خدماتنا</summary>
            <ul class="list_servic">
                <li>تشخيص وعلاج اضطرابات الغدد الصماء</li>
                <li>إجراء فحوصات وتحاليل الهرمونات</li>
                <li>إدارة مشاكل الغدة الدرقية والغدة النخامية</li>
                <li>علاج اضطرابات السكري والنمو</li>
                <!-- <li>متابعة الحمل والخصوبة في حالات اضطرابات هرمونية</li> -->
            </ul> <button onclick="location.href='Services.php'" class="buttons_links">  المزيد عن الخدمات </button>
        </details>
        <details>
            <summary title=" انقر للعرض  "> معلومات عنا</summary>
            <p>عيادة غدد صماء هي مركز طبي متخصص يقدم الرعاية الطبية للمرضى الذين يعانون من اضطرابات غدد الصماء. يتكون
                فريقنا من أطباء متخصصين في هذا المجال والذين لديهم خبرة واسعة في تشخيص وعلاج هذه الاضطرابات. نحن ملتزمون
                بتقديم رعاية طبية عالية الجودة وتحسين نوعية حياة المرضى.</p>
            <h2>اتصل بنا</h2>
            <!-- <p>يمكنك الاتصال بنا لتحديد موعد استشارة أو للحصول على مزيد من المعلومات حول خدماتنا.</p> -->
            <p>نحن نلتزم بتقديم رعاية صحية عالية الجودة وشخصية لجميع مرضانا. نحن نهتم بمعرفة تاريخك الطبي وفهم احتياجاتك الفردية لنتمكن من تقديم العلاج الأنسب لك. يعمل فريقنا بتعاون وثيق معك لتوفير الرعاية المستمرة والتشخيص العلاجي المناسب لحالتك.

اتصل بنا اليوم لحجزموعد استشارة مع أحد أطبائنا المتخصصين في الغدد الصماء. نحن هنا لمساعدتك في استعادة صحتك وتحسين جودة حياتك.
<br>
معلومات الاتصال:</p>
            <p>رقم الهاتف: 773729574</p>

            <h2>موقعنا</h2>
            <p>نحن موجودون في العنوان التالي:</p>
            <p> تعز - ماوية - السويداء</p>
            <!-- <button onclick="location.href='information.php'" class="buttons_links" 
            style="width: 180px;padding:10px 0px;  margin: 10px 30px;">     
            
            مزيد من المعومات عنا </button> -->
</details>
</details>
<details>
            <summary title=" انقر للعرض  " > مواعيد العمل</summary>
    

<table>
<tr><th> السبت - الاربعاء  </th> <th> 8 ص :  6 م </th></tr>

</table>
<details>



    </main>

    <?php include "../../core/sheards/footer.php"?>

</body>

</html>