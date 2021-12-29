<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chasir Gorbo</title>
<link href="style-sign up.css" rel="stylesheet" type="text/css">
<script src="jquery-3.3.1.min.js"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
</head>

<body>	

<div class="header">
  <div class= "top-menu">
		<div class="logo"> <img src="images/cg.png" width="60px" height="60px"> 
		</div>
			<div class="language">
			  <h4> Bangla|English</h4>
			</div>
		<div class="search">
		  <input type="text" placeholder="Search" size="45" >
		</div>
		<div class="icon"> <a href="#" target="_blank"><img src="images/Search-Icon.png" width="30px" height="30px"></a> 
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
		  <li><a href="#" title="Welcome" target="_blank" >About Us</a></li>
		  <li><a href="Porblem and Solve.html" title="Welcome" target="_blank" >Problem And Solve</a></li>
		  <li><a href="Agriculture Tips.html" title="Welcome" target="_blank" >Agriculture Tips</a></li>
		  <li><a href="Term and Condition.html" title="Welcome" target="_blank">Terms And Condition </a></li>
		  <li><a href="Future Plan.html" title="Welcome" target="_blank" >Future Plan</a></li>
		  <li><a href="Contuct.html" title="Welcome" target="_blank" >Contact</a></li>
		  </ul>
		</div>
  </div>
</div>
<div id="blog-id" class="blog">
  <div class="FormTypeContainer" id="FormType">
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Farmer</li>
        <li class="TabbedPanelsTab" tabindex="0">Local Diller</li>
        <li class="TabbedPanelsTab" tabindex="0">Exporter</li>
        <li class="TabbedPanelsTab" tabindex="0">Organization</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
	  
        <div class="TabbedPanelsContent">
		<?php 
							 
			include('farmer_server.php');
		?>


				<form method="post" action="farmer_register.php">

						<?php 
							include('errors.php');
						?>
						<div class="input-group">
						<br>
						<br>
						<input type="text" placeholder="Name" name="NAME" value="<?php echo $NAME;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Contact" name="CONTACT" value="<?php echo $CONTACT;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="NID" name="NID" value="<?php echo $NID;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Address" name="ADDRESS" value="<?php echo $ADDRESS;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="Postal Code" name="POSTAL_CODE" value="<?php echo $POSTAL_CODE;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Password" name= "PASS" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Re_Password" name= "Rpass" required>
						<br>
						<br>
						</div>

						<div class="input-group">
						<button type="submit" name= "submit" class="btn">submit</button>
						<br>
						</div>
						<p>
							Already a member? <a href="farmer_login.php">Sign In</a>
						</p>

	</form>
	</div>
	
	 <div class="TabbedPanelsContent">
	 <?php 
	 include('local_server.php');
	 ?>
          <form method="post" action="farmer_register.php">
			<?php 
				include('errors.php');
			?>
           <div class="input-group">
						<br>
						<br>
						<input type="text" placeholder="Name" name="NAME" value="<?php echo $NAME;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Contact" name="CONTACT" value="<?php echo $CONTACT;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="NID" name="NID" value="<?php echo $NID;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="email" placeholder="E-mail" name="E_MAIL" value="<?php echo $E_MAIL;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Address" name="ADDRESS" value="<?php echo $ADDRESS;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="Postal Code" name="POSTAL_CODE" value="<?php echo $POSTAL_CODE;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="License No" name="LICENSE_NO" value="<?php echo $LICENSE_NO;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Password" name= "PASS" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Re_Password" name= "Rpass" required>
						<br>
						<br>
						</div>

						<div class="input-group">
						<button type="submit" name= "submit" class="btn">submit</button>
						<br>
						</div>
						<p>
							Already a member? <a href="local_login.php">Sign In</a>
						</p>

          </form>
        </div>
		
        
        <div class="TabbedPanelsContent">
		<?php 
		 include('exporter_server.php');
		 ?>
          <form method="post" action="farmer_register.php">
			<?php 
				include('errors.php');
			?>
           <div class="input-group">
						<br>
						<br>
						<input type="text" placeholder="Name" name="NAME" value="<?php echo $NAME;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Contact" name="CONTACT" value="<?php echo $CONTACT;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="NID" name="NID" value="<?php echo $NID;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="email" placeholder="E-mail" name="E_MAIL" value="<?php echo $E_MAIL;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Address" name="ADDRESS" value="<?php echo $ADDRESS;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="Postal Code" name="POSTAL_CODE" value="<?php echo $POSTAL_CODE;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="License No" name="LICENSE_NO" value="<?php echo $LICENSE_NO;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Password" name= "PASS" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Re_Password" name= "Rpass" required>
						<br>
						<br>
						</div>

						<div class="input-group">
						<button type="submit" name= "submit" class="btn">submit</button>
						<br>
						</div>
						<p>
							Already a member? <a href="exporter_login.php">Sign In</a>
						</p>

          </form>
        </div>
     
        
        <div class="TabbedPanelsContent">
		 <?php 
		 include('organization_server.php');
		 ?>
          <form method="post" action="farmer_register.php">
			<?php 
				include('errors.php');
			?>
						<div class="input-group">
						<br>
						<br>
						<input type="text" placeholder="Name" name="NAME" value="<?php echo $NAME;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Organization Type" name="CATEGORY_TYPE" value="<?php echo $CATEGORY_TYPE;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="Organization ID" name="ORG_ID" value="<?php echo $ORG_ID;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Contact" name="CONTACT" value="<?php echo $CONTACT;?>" required >
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="email" placeholder="E-mail" name="E_MAIL" value="<?php echo $E_MAIL;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="Area Code" name="AREA_CODE" value="<?php echo $AREA_CODE;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="text" placeholder="Website Link" name="WEBSITE_LINK" value="<?php echo $WEBSITE_LINK;?>">
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="number" placeholder="License No" name="LICENSE_NO" value="<?php echo $LICENSE_NO;?>" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Password" name= "PASS" required>
						<br>
						<br>
						</div>
						<div class="input-group">
						<input type="password" placeholder="Re_Password" name= "Rpass" required>
						<br>
						<br>
						</div>

						<div class="input-group">
						<button type="submit" name= "submit" class="btn">submit</button>
						<br>
						</div>
						<p>
							Already a member? <a href="organzation_login.php">Sign In</a>
						</p>

          </form>
        </div>
      </div>
    </div>
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
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>


      

       
	   
</body>
</html>