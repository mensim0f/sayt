<?php
session_start();
require_once "giris.php";

if($_POST){
	$login = trim($_POST["login"]);
	$shifre = trim($_POST["shifre"]);

	$yoxla = mysqli_query($db, "select * from users where 
		login = '$login' and shifre = '$shifre' ");

	$say = mysqli_num_rows($yoxla);

	if($say > 0){
		$_SESSION["sgirish"] = true;
		$_SESSION["slogin"] = $login;
		$_SESSION["sshifre"] = $shifre;
		    header("Location:panel.php");
	}else{
		echo "Login ve ya shifre yanlisdir";
		die();
	}

}else{
echo '
<form method="post" action="">
Login<br>
<input type="text" name="login"><br>
Kod<br>
<input type="password" name="shifre"><br>
<input type="submit" value="Daxil ol"><hr>
<a href="qeydiyyat.php">Qeydiyyat</a><br>';}