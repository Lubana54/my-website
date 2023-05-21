<?php

$mail = $_POST['email'];
$pass = $_POST['password'];
$kayit_m='b221210572@sakarya.edu.tr';
$kayit_s='b221210572';
 
if($mail == $kayit_m  and $pass == $kayit_s )
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
    echo "<br>";
    echo"Hoşgeldiniz “b221210572”";
    

}elseif($mail != $kayit_m  )
{
    echo "kayıtlı değil bir posta girdiniz";
    header("Refresh: 3; url=../log.html");
}elseif($pass != $kayit_s)
{
    echo "girdiğiniz şefre hatalıdır";
    header("Refresh: 3; url=../log.html");

}
else
{
    header("Refresh: 3; url=../log.html");
    
}


?>