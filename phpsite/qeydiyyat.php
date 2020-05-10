<?php

require_once "giris.php";

if($_POST){

$login = trim($_POST["login"]);
$shifre = trim($_POST["shifre"]);
$email = trim($_POST["email"]);

if(empty($login) or empty($shifre) or empty($email)){
echo "boshluqlari doldur!!";
die();
}

$insert = mysqli_query($db, "insert into users set login = '$login', shifre = '$shifre', email = '$email' ");

if($insert){
	$_SESSION["sgirish"] = true;
	$_SESSION["slogin"] = $login;
	$_SESSION["sshifre"] = $shifre;

	header("refresh: 3, url = panel.php");
	echo "qeydiyyat alindi";
}

}else{
echo '
<form method="post" action="qeydiyyat.php">
Login<br>
<input type="text" name="login"><br>
Kod<br>
<input type="password" name="shifre"><br>
Email<br>
<input type="text" name="email"><br>
<input type="submit" value="Daxil ol"><hr>';}