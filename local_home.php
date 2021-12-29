<?php include('local_server.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chasir Gorbo</title>
<link href="style-home.css" rel="stylesheet" type="text/css">
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
          <button onclick="myFunction1()" class="dropbtn1">Sign Out</button>
          <div id="myDropdown1" class="dropdown-content1"> 
		  
		  
		  <?php if(isset($_SESSION['success'])):?>
		  <div class="error success"> 
		  <h3
		  <?php
		  echo $_SESSION['success'];
		  unset($_SESSION['success']);
		  ?>
		  </h3>
		  
		  </div>
		  <?php endif ?>
		  <?php if(isset($_SESSION['CONTACT']));?>
		  <a href="local_login.php">Sign Out</a>
		  
		  
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
      <div class="menu3">
        <a href="Our products.html" >Our Products</a>
      </div>
      <div class="menu4">
        <a href="All Ads.html" >All Ads</a>
      </div>
      <div class="menu5">
        <a href="Post For Ads.html" >Post For Ads</a>
      </div>
    </div>
  </div>
 
</div>

<div class="container">
  <div class="side-bar">
    <div class="menu">
      <div class="menu-icon"> <a href="#" ><img src="images/menu_icon.png" width="40" height="40" alt=""/> </a></div>
      <div class="catagory">Catagory</div>
    </div>
     <div class="side-menu">
      <li><a href="About.html" title="Welcome"  >About Us</a></li>
      <li><a href="Porblem and Solve.html" title="Welcome"  >Problem And Solve</a></li>
      <li><a href="Agriculture Tips.html" title="Welcome"  >Agriculture Tips</a></li>
      <li><a href="Term and Condition.html" title="Welcome" >Terms And Condition </a></li>
      <li><a href="Future Plan.html" title="Welcome" >Future Plan</a></li>
      <li><a href="Contuct.html" title="Welcome"  >Contact</a></li>
      </ul>
    </div>
  </div>
  <div id="blog-id" class="blog">
    <div id="bcontainer" class="b-container">
      <div class="blog1">
        <div class="img"> </div>
        <div class="headline">
          <p>কেআইবি কৃষি সেবা - বিনামুল্যে জনসাধারণের জন্য <br>
            কৃষি বিষয়ক তথ্য ও বিশেষজ্ঞ সেবা।</p>
        </div>
      </div>
      <div class="blog2">
        <div class="img1"> </div>
        <div class="headline">
          <p>দেশের কৃষি উন্নয়ন এর লক্ষে তথ্য যোগাযোগ  প্রযুক্তি<br>
            ব্যবহারের মাধ্যমে কৃষি প্রযুক্তির দ্রুত সম্প্রসারণ</p>
        </div>
      </div>
      <div class="blog3">
        <div class="img2"> </div>
        <div class="headline">
          <p> ভাসমান চাষাবাদ<br>
            <br>
          </p>
        </div>
      </div>
      <div class="blog4">
        <div class="img3"> </div>
        <div class="headline">
          <p> বোরো ধান চাষের করণীয় <br>
            <br>
          </p>
        </div>
      </div>
      <div class="blog5">
        <div class="img4"> </div>
        <div class="headline">
          <p>মাশরুম চাষের সুবিধাসমূহ<br>
            <br>
          </p>
        </div>
      </div>
      <div class="blog6">
        <div class="img5"> </div>
        <div class="headline">
          <p> ব্রাক বিজ আলুর উৎপাদন বাড়ছে দেশে <br>
            <br>
          </p>
        </div>
      </div>
    </div>
    <div id="fform" class="f-form">Content for  class "f-form" Goes Here</div>
  </div>
</div>
<div class="footer">
  <div class= "footer-menu">
    <div class="footer-logo"> <img src="images/cg.png" width="60px" height="60px"> </div>
    <div class="details">
      <h4>Our Details</h4>
    </div>
  </div>
</div>
</body>
</html>
