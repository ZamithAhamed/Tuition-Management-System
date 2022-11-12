<!-- <style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>
 -->

<script type="text/javascript">
  var refresh=1000; // Refresh rate in milli seconds
  mytime=setTimeout('display_ct()',refresh)
</script>

<nav class="navbar navbar-light fixed-top bg-success" style="padding:0; background: skyblue;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  		
  		</div>
      <!-- <div class="col-md-4 float-left text-white">
        <large><b><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></b></large>
      </div> -->
	  	<div class="float-right">
        <div class=" dropdown mr-5">
            <a href="#" class="text-white" style="font-size: 17px;" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -5.5em;">
                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
        </div>
      </div>
      <div class="float-left">
        <div class="text-white"><b><span id="date" style="font-size: 17px;"></span></b> 
        </div>
      </div>
  </div>
  
</nav>

<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>

<script type="text/javascript"> 
                function display_c(){
                  var refresh=1000; // Refresh rate in milli seconds
                  mytime=setTimeout('display_ct()',refresh)
                }

                function display_ct() {
                  var x = new Date()
                  document.getElementById('date').innerHTML = x;
                  display_c();
                }
</script>

