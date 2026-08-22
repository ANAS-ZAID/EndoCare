<?php
if(!isset($_COOKIE['userName']))
header("Location: login_and_signup_scereen.php");
function appBooking(){
    $stateusRequestAddBooking=[];
    include '../../core/db_connect/db_connect.php';





if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['booking'])) {
    //echo $_POST['userName'];
    $patName = fileetrRequest('pat_name');
    $patPhone = fileetrRequest('pat_phone');
    $date=fileetrRequest('date');
    $patState=fileetrRequest("pat_state");
     
$addBooking = $con->prepare('INSERT into schedul (`patient_name`,patient_phone,`state`,`date`) values(?,?,?,?)');
        $addBooking->execute([$patName, $patPhone ,$patState,$date]);
        if ($addBooking->rowCount() > 0) {
    
            $message="تم حجز موعد بنجاح ";
            header("refresh:2;url=home_scereen.php");
                
               $stateusRequestAddBooking['state'] = true;
           } else {
               $message="فشل حجز الموعد";
       
               header("refresh:2;url=boking_scereen.php");
               
               $stateusRequestAddBooking['state'] = false;
           }
           echo "  <main>
       
       <div class='container'>   <h2>

               $message 
           </h2>

       </div>

   </main> ";







   return $stateusRequestAddBooking;
}




}
?>