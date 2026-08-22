<?php

function display(){
$connect=mysqli_connect("localhost","root","","users");
$select="select * from users ";
$requrds=mysqli_query($connect,$select);
while($requrd=mysqli_fetch_array($requrds))
{
    echo "<tr>".
    "<td>".$requrd["user_id"]."</td>".
    "<td>".$requrd["user_name"]."</td>".
    "<td>".$requrd["user_phone"]."</td>".
    "<td>".$requrd["password"]."</td>".
   
    "</tr>";
    
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title> تسجيل الدخول</title>
    <link rel="stylesheet" href="../Css/login.css">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <style>
          .nav li:hover{
        background-image: linear-gradient(to top, #1D3557,#131832);
        transform: scale(1.1);
        border-radius:20px;
     }
        main{
        height: 100vh;
     }
        table {
            width: 95%;
            border: 1px solid black;
            text-align: center;

            box-shadow: 0px 0px 20px black;
            margin-top: 10px;
            background-color: #e0e0e0;
            margin: 25px;

        }

        table td {


            border: 1px solid black;
            margin: 0px;
            color: #1D3557;
            padding: 10px;
            font-size: 20px;
        }

        table th {
            border: 1px solid black;
            padding: 10px;
            background-color: #1D3557;
            font-weight: bold;
            font-size: 25px;
        }
   
    </style>
</head>

<body dir="rtl">
     <?php include_once "header.php"?>
   


    <main>
        <table>
            <thead>
                <th colspan="5" style="  font-size: 35px;  padding: 15px;">    المستخدمين </th>
            </thead>
            <tr>
                <th> المعرف</th>
                <th>الاسم</th>
                <th>الهاتف</th>
                <th>كلمة السر </th>
                
            </tr>
            <?php display() ?>
        </table>
    </main>

    <?php include_once "footer.php"?>
</body>

</html>
