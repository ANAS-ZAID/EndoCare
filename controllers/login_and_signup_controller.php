<?php

// $stateusRequestLogin = [];
//   $stateusRequestSignup = [];

function onSubmitLogin(){ 
    $stateusRequestLogin = [];
    include '../../core/db_connect/db_connect.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        //echo $_POST['userName'];
        $userName = fileetrRequest('userName');
        $password = fileetrRequest('password');
      $passwordHash = sha1($password);
       $message="";
            
            $login = $con->prepare('SELECT * FROM users WHERE `name` = ? AND `password` = ?');
            $login->execute([$userName, $passwordHash]);
            if ($login->rowCount() > 0) {
             setcookie("userName",$userName, time()*60*60*24);
             $message="تم تسجيل الدخول بنجاح";
             header("refresh:2;url=login_and_signup_scereen.php");
            // header('location: dashboard.php');
                // exit(); 
                 
                $stateusRequestLogin['state'] = true;
            } else {
                $message="اسم المستخدم او"."<br>"."كلمة السر غير صحيحة";
        
                header("refresh:2;url=login_and_signup_scereen.php");
                
                $stateusRequestLogin['state'] = false;
            }
            echo "  <main>
        
        <div class='container'>   <h2>

                $message 
            </h2>

        </div>

    </main> ";
        
    }
return $stateusRequestLogin;

}



// $insert="insert into users (user_name,user_phone,password) values('$name','$phone','$password')";
// mysqli_query($con,$insert);
// header("refresh:2;url=booking.php");


function onSubmitSignup(){ 
    $stateusRequestSignup = [];
    include '../../core/db_connect/db_connect.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
        //echo $_POST['userName'];
        $userName = fileetrRequest('userName');
        $password = fileetrRequest('password');
        $userPhone=fileetrRequest('userPhone');
      $passwordHash = sha1($password);
       
      
      $login = $con->prepare('SELECT * FROM users WHERE `phone` = ?');
      $login->execute([$userPhone]);
      if ($login->rowCount() > 0) {

  
    //    header("refresh:2;url=login_and_signup_scereen.php");
      // header('location: dashboard.php');
          // exit(); 
           
          $stateusRequestSignup['state'] = false;
          return $stateusRequestSignup;
      } else {
        $signup = $con->prepare('INSERT into users (`name`,phone,`password`) values(?,?,?)');
            $signup->execute([$userName, $userPhone ,$passwordHash]);
            $stateusRequestSignup['state'] = true;
            setcookie("userName",$userName, time()*60);
            header("location:booking_scereen.php");
            return $stateusRequestSignup;

      }
    



    }



    //     if (empty($stateusRequestSignup)) {
            
    //         $signup = $con->prepare('INSERT into users (`name`,phone,`password`) values(?,?,?)');
    //         $signup->execute([$userName, $userPhone ,$passwordHash]);




            
    //         if ($singup->rowCount() > 0) {
    //            // $_SESSION['admins'] = $username;
    //          setcookie("userName",$userName, time()-1);
    //         // header('location: dashboard.php');
    //             // exit(); 
    //           //  $message="تم انشاء حساب بنجاح";
    //             header("refresh:2;url=booKing.php");
                 
    //             $stateusRequestSignup['state'] = true;
    //         } else {
    //             $message="اسم المستخدم او"."<br>"."كلمة السر غير صحيحة";
        
    //             header("refresh:2;url=login_and_signup_scereen.php");
    //             $stateusRequestSignup['state'] = false;
    //         }
    //     }

    //     echo "  <main>
        
    //     <div class='container'>   <h2>

    //             $message 
    //         </h2>

    //     </div>

    // </main> ";
    // }


}