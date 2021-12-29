<?php

$NAME ="";
$CONTACT ="";
$NID = "";
$E_MAIL="";
$ADDRESS = "";
$POSTAL_CODE = "";
$LICENSE_NO="";
$errors=array();
$db=mysqli_connect('localhost','root','','chasir_gorbo2');
if(isset($_POST['submit'])){
	$NAME=$_POST['NAME'];
	$CONTACT=$_POST['CONTACT'];
	$NID=$_POST['NID'];
	$E_MAIL=$_POST['E_MAIL'];
	$ADDRESS=$_POST['ADDRESS'];
	$POSTAL_CODE=$_POST['POSTAL_CODE'];
	$LICENSE_NO=$_POST['LICENSE_NO'];
	$PASS=$_POST['PASS'];
	$Rpass= $_POST['Rpass'];
	
	if($PASS != $Rpass){
		array_push($errors,"Pssword do not match");
	}
	if(count($errors)==0){
		
		$PASSWORD=md5($PASS);
		
		$sql="INSERT INTO local_diller(NAME,CONTACT,NID,E_MAIL,ADDRESS,POSTAL_CODE,LICENSE_NO,PASSWORD) 
				VALUES ('$NAME','$CONTACT','$NID','$E_MAIL','$ADDRESS',$POSTAL_CODE,$LICENSE_NO,'$PASS')";
		mysqli_query($db,$sql);
		
		$_SESSION['CONTACT']=$CONTACT;
		$_SESSION['success']="";
		header('location:local_home.php');
	}
	
	
	
}


if(isset($_POST['Sign In'])){
	 $CONTACT=$_POST['CONTACT'];
	$PASS=$_POST['PASS'];
	if(count($errors)==0){
		$PASSWORD=md5($PASS);
		$query="SELECT * FROM local_diller WHERE CONTACT='$CONTACT' AND PASSWORD='$PASS'" ;
		$result= mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['CONTACT']=$CONTACT;
		$_SESSION['success']="";
		header('location:local_home.php');
		}
		else{
			array_push($errors,"wrong contact/password");
		
			
		}
	}
 }

//logout
	if(isset($_GET['Sign Out'])){
		session_destroy();
		unset($_SESSION['CONTACT']);
		header('location:local_login.php');
		
	}


?>