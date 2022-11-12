<!-- 
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		/*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-info' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span> Dashboard</a>
				<a href="index.php?page=fees" class="nav-item nav-fees"><span class='icon-field'><i class="fa fa-money-check "></i></span> Student Fees</a>
				<a href="index.php?page=payments" class="nav-item nav-payments"><span class='icon-field'><i class="fa fa-receipt "></i></span> Payments</a>
				<div class="mx-2 text-white">Master List</div>
				<a href="index.php?page=courses" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-scroll "></i></span> Courses & Fees</a>
				<a href="index.php?page=students" class="nav-item nav-students"><span class='icon-field'><i class="fa fa-users "></i></span> Students</a>
				<div class="mx-2 text-white">Report</div>
				<a href="index.php?page=payments_report" class="nav-item nav-payments_report"><span class='icon-field'><i class="fa fa-th-list"></i></span> Payments Report</a>
				<div class="mx-2 text-white">Systems</div>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users "></i></span> Users</a>
				<!-- <a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a> -->
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
 -->


		<div class="container d-flex align-items-stretch">
			<nav id="sidebar" class="img" style="background-image: url(assets/navbar/images/bg_1.jpg);">
				<div class="p-3">
		  		<h1><a href="index.php" class="logo">TMS <span>Tuition System</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="index.php?page=home" ><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="index.php?page=fees"><span class='icon-field'><i class="fa fa-money-check "></i></span> Student Fees</a>
	          </li>
	          <li>
              <a href="index.php?page=payments"><span class='icon-field'><i class="fa fa-receipt "></i></span> Payments</a>
	          </li>
	          <li>
	          	Master List
	          </li>
	          <div class="mx-4 text-white">
	          <li>
              <a href="index.php?page=courses"><span class='icon-field'><i class="fa fa-scroll "></i></span> Courses & Fees</a>
	          </li>
	          <li>
              <a href="index.php?page=students"><span class='icon-field'><i class="fa fa-users "></i></span> Students</a>
	          </li>
	      	  </div>
	          <li>
	          	Reports
	          </li>
	          <div class="mx-4 text-white">
	          <li>
	          	<a href="index.php?page=payments_report" ><span class='icon-field'><i class="fa fa-th-list"></i></span> Payments Report</a>
	          </li>
	      	  </div>
	          <li>
	          	<?php if($_SESSION['login_type'] == 1): ?>
	          	Systems
	          </li>
	          <div class="mx-4 text-white">
	          <li>
              <a href="index.php?page=users"><span class='icon-field'><i class="fa fa-users "></i></span> Users</a>
	          </li>
	          	<?php endif; ?>
	    	  </div>
	        </ul>

	         <!-- <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
			 </div> 

	        <div class="footer">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						</p>
	        </div> -->

	      </div>
    	</nav>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/navbar/js/main.js"></script>