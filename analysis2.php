<?php include"conn.php";  $user_id=$_SESSION['user_id']; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Automated Q/A system </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/Chart.js"></script>
</head>
<body>
<div id="wrapper">
       <!----->
   <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="account.php">Q/ A  System</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $user_id; ?><i class="caret"></i></span><img src="images/wo.jpg"></a>
		            
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  <?php include"nav.php"; ?>
		</nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Graphs</span>
				</h2>
		    </div>
		<!--//banner-->
	<div class="col-md-12 graph-box1 clearfix">	
						
					</div>	
 	<!--//grid-->
 	<div class="graph">
<div class="graph-grid">
	<div class="col-md-6 graph-1">
		<div class="grid-1">
									<h4>Experimental Analysis</h4>
									<canvas id="bar1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
									<script>
										var barChartData = {
											labels : ["Factor One","Factor Two","Factor Three","Factor Foour","Ideal"],
											datasets : [
												{
													fillColor : "#E91E63",
													strokeColor : "#FBB03B",
													data : [<?php echo $_GET['f1']; ?>,<?php echo $_GET['f2']; ?>,<?php echo $_GET['f3']; ?>,<?php echo $_GET['f4']; ?>,30]
												},
												
											]
											
										};
											new Chart(document.getElementById("bar1").getContext("2d")).Bar(barChartData);
									</script>
								</div>
	</div>
	<div class="col-md-6 graph-2">
		<div class="grid-1">
							<h4>Experimental Analysis</h4>
								<canvas id="line1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
								<script>
										var lineChartData = {
											labels : ["Factor One","Factor Two","Factor Three","Factor Foour","Ideal"],
											datasets : [
												{
													fillColor : "#fff",
													strokeColor : "#1ABC9C",
													pointColor : "#1ABC9C",
													pointStrokeColor : "#1ABC9C",
													data : [<?php echo $_GET['f1']; ?>,<?php echo $_GET['f2']; ?>,<?php echo $_GET['f3']; ?>,<?php echo $_GET['f4']; ?>,30]
												}
											]
											
										};
										new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
								</script>
							</div>
	</div>
	<div class="clearfix"> </div>
</div>
	
<!------------------------------------->
				
			</div>
				
		<!---->
		<?php include"footer.php"; ?>
		</div>
		<div class="clearfix"> </div>
       </div>
  
<!---->

<script src="js/bootstrap.min.js"> </script>
  
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

