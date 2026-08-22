<?php
//    include '../functions/function_fileetr_request.php';
$con;
function fileetrRequest($name)
{
    return htmlspecialchars(strip_tags($_POST[$name]));
}
try {
    $con = new PDO('mysql:host=localhost; dbname=endocare_db', 'root', '', [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
    ]);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // include '../functions/function_fileetr_request.php';
 

} catch (PDOException $e) {
    echo 'Server Is Not Found';
}