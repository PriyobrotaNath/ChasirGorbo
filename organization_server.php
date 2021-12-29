<?php

$NAME ="";
$CATEGORY_TYPE="";
$ORG_ID="";
$CONTACT ="";
$E_MAIL="";
$AREA_CODE = "";
$WEBSITE_LINK = "";
$LICENSE_NO="";
$errors=array();
$db=mysqli_connect('localhost','root','','chasir_gorbo2');
if(isset($_POST['submit'])){
	$NAME=$_POST['NAME'];
	$CATEGORY_TYPE=$_POST['CATEGORY_TYPE'];
	$ORG_ID=$_POST['ORG_ID'];
	$CONTACT=$_POST['CONTACT'];
	$E_MAIL=$_POST['E_MAIL'];
	$AREA_CODE=$_POST['AREA_CODE'];
	$WEBSITE_LINK=$_POST['WEBSITE_LINK'];
	$LICENSE_NO=$_POST['LICENSE_NO'];
	$PASS=$_POST['PASS'];
	$Rpass= $_POST['Rpass'];
	
	if($PASS != $Rpass){
		array_push($errors,"Pssword do not match");
	}
	

	
	
	
	if(count($errors)==0){
		
		$PASSWORD=md5($PASS);
		
		$sql="INSERT INTO organization(NAME,CATEGORY_TYPE,ORG_ID,CONTACT,E_MAIL,AREA_CODE,WEBSITE_LINK,LICENSE_NO,PASSWORD) 
				VALUES ('$NAME','$CATEGORY_TYPE',$ORG_ID,'$CONTACT','$E_MAIL',$AREA_CODE,'$WEBSITE_LINK',$LICENSE_NO,'$PASS')";
		mysqli_query($db,$sql);
		
		$_SESSION['CONTACT']=$CONTACT;
		$_SESSION['success']="";
		header('location:organization_home.php');
		
		
	}
	
	
	
}

if(isset($_POST['Sign In'])){
	 $CONTACT=$_POST['CONTACT'];
	$PASS=$_POST['PASS'];
	if(count($errors)==0){
		$PASSWORD=md5($PASS);
		$query="SELECT * FROM organization WHERE CONTACT='$CONTACT' AND PASSWORD='$PASS'" ;
		$result= mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['CONTACT']=$CONTACT;
		$_SESSION['success']="";
		header('location:organization_home.php');
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
		header('location:organization_home.php');
		
	}


?>