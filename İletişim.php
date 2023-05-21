<?php
echo "bilgiler başarıyla gönderildi\n";
$name=$_POST['flname'];
$email=$_POST['email'];
$msg=$_POST['message'];
echo "<br>";

echo "isim:"."&nbsp;".$name."\n";
echo "<br>";
echo "email:"."&nbsp;".$email."\n";
echo "<br>";

echo "message:"."&nbsp;".$msg."\n";
echo "<br>";


?>