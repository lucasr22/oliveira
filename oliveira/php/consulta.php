<?php 

include("barco.php");

session_start();



		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST["senha"];
	
		if (strlen($_SESSION['email']) AND strlen($_SESSION['senha']) == 0) {
			header("location:./index.php");
		}
		else{

				$sql="SELECT email,senha FROM usuario WHERE email={$_SESSION['email']} AND senha={$_SESSION['senha']}";
				$result=mysqli_query($conn,$sql);
				header("location:./painel.php");

}


?>