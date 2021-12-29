<?php

$NAME ="";
$CONTACT ="";
$NID = "";
$ADDRESS = "";
$POSTAL_CODE = "";
$errors=array();
$db=mysqli_connect('localhost','root','','chasir_gorbo2');
if(isset($_POST['submit'])){
	$NAME=$_POST['NAME'];
	$CONTACT=$_POST['CONTACT'];
	$NID=$_POST['NID'];
	$ADDRESS=$_POST['ADDRESS'];
	$POSTAL_CODE=$_POST['POSTAL_CODE'];
	$PASS=$_POST['PASS'];
	$Rpass= $_POST['Rpass'];
	
	if($PASS != $Rpass){
		array_push($errors,"Pssword do not match");
	}
	if(count($errors)==0){
		
		$PASSWORD=md5($PASS);
		
		$sql="INSERT INTO farmer(NAME,CONTACT,NID,ADDRESS,POSTAL_CODE,PASSWORD) 
				VALUES ('$NAME','$CONTACT','$NID','$ADDRESS',$POSTAL_CODE,'$PASS')";
		mysqli_query($db,$sql);
		
		
		
		
	}
	
	
	
}
if(isset($_POST['Sign In'])){
	 $CONTACT=$_POST['CONTACT'];
	$PASS=$_POST['PASS'];
	if(count($errors)==0){
		$PASSWORD=md5($PASS);
		$query="SELECT * FROM farmer WHERE CONTACT='$CONTACT' AND PASSWORD='$PASS'" ;
		$result= mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['CONTACT']=$CONTACT;
		$_SESSION['success']="";
		header('location:farmer_home.php');
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
		header('location:farmer_home.php');
		
	}
 


?>