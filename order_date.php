<?php include("Order.html")?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chasir Gorbo</title>
<link href="style-bistarito.css" rel="stylesheet" type="text/css">
<script src="jquery-3.3.1.min.js"></script>
</head>

<body class="body">
<div class="header">
  <div class= "top-menu">
    <div class="logo"> <img src="images/cg.png" width="60px" height="60px"> </div>
    <div class="language">
      <h4> Bangla|English</h4>
    </div>
    <div class="search">
      <input type="text" placeholder="Search" size="45" >
    </div>
    <div class="icon"> <a href="#" target="_blank"><img src="images/Search-Icon.png" width="30px" height="30px"></a> </div>
    <div class="navigation-menu">
      <div class="menu1">
        <div class="dropdown1">
          <button onclick="myFunction1()" class="dropbtn1">
          <a href="#">Sign Out</a>
          </button>
          <div id="myDropdown1" class="dropdown-content1">
			 <a href="farmer_login.php">Sign Out</a>
		  </div>
        </div>
        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show1");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show1')) {
        openDropdown.classList.remove('show1');
      }
    }
  }
}
</script> 
      </div>
    <div class="menu6"> <a href="Home.html" >Home</a> </div>
      <div class="menu3"> <a href="Our products.html" >Our Products</a> </div>
      <div class="menu4"> <a href="All Ads.html" >All Ads</a> </div>
      <div class="menu5"> <a href="Post For Ads.html" >Post For Ads</a> </div>
    </div>
  </div>
</div>
<div class="container">
<div class="side-bar">
  <div class="menu">
    <div class="menu-icon"> <a href="#" target="_blank"><img src="images/menu_icon.png" width="40" height="40" alt=""/> </a></div>
    <div class="catagory">Catagory</div>
  </div>
   <div class="side-menu">
      <li><a href="About.html" title="Welcome" target="_blank" >About Us</a></li>
      <li><a href="Porblem and Solve.html" title="Welcome" target="_blank" >Problem And Solve</a></li>
      <li><a href="Agriculture Tips.html" title="Welcome" target="_blank" >Agriculture Tips</a></li>
      <li><a href="Term and Condition.html" title="Welcome" target="_blank">Terms And Condition </a></li>
      <li><a href="Future Plan.html" title="Welcome" target="_blank" >Future Plan</a></li>
      <li><a href="Contuct.html" title="Welcome" target="_blank" >Contact</a></li>
      </ul>
    </div>
</div>
</div>
<?php

$QUANTITY ="";
$CONTACT ="";

$errors=array();
$db=mysqli_connect('localhost','root','','chasir_gorbo2');
if(isset($_POST['order'])){
	$QUANTITY=$_POST['QUANTITY'];
	$DELIVARY_DATE=$_POST['DELIVARY_DATE'];
	$ORDER_DATE=$_POST['ORDER_DATE'];
	
	
	if(count($errors)==0){
		
		$sql="INSERT INTO order_t(QUANTITY,DELIVARY_DATE,ORDER_DATE) 
				VALUES ('$QUANTITY','$DELIVARY_DATE','$ORDER_DATE')";
		mysqli_query($db,$sql);
		
		
		
		
	}
	
	
	
}
?>
  
</body>
</html>


