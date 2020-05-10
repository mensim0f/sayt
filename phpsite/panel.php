<?php
session_start();


if($_SESSION["girish"] != true){
	header("Location: esas.php");
	die();
}

echo "Istifadeci paneli";