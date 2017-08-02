<?php include"conn.php";  $user_id=$_SESSION['user_id']; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>AI Based Client Support System</title>
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
               <h1> <a class="navbar-brand" href="account.php">Support System</a></h1>         
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
		           
		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">0</span></a>
		            </li>
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
				<span>Support System</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		<div class="horz-grid">
 		<div class="grid-hor">
 		<h3 id="grid-example-basic">Seek for Help to AI System</h3>
 		<p class=""> Feel Free to ask any query !</p>
			</div>
			<!----> 
			
			
			<div class="row show-grid">
			  <div class="col-md-12">
			
			
			
			<h4>Feedback Information</h4>
							<table class="table table-bordered"> 
							<thead> <tr>  
							<th>ID  </th> <th>Query ID </th> <th>User ID </th> <th> Feedback ( F1 ) </th> <th>Feedback ( F2 )</th> <th>Feedback ( F3 ) </th> <th>Feedback ( F4 ) </th></tr> 
							</thead> 
							
							<tbody>
							<?php 
							
						


$user_id=$_SESSION['user_id'];
  		$sql="SELECT * FROM feedback WHERE user_id='$user_id'";
$result=mysql_query($sql);
while($row= mysql_fetch_array($result))
  {
  echo "<tr>";
   $idr=$row['id'];
   $id=$row['kb_id'];
   $v_type=$row['user_id'];
   $v_name=$row['f1'];
   $status=$row['f2'];
   $factor=$row['f3'];
   $ff=$row['f4'];
echo"<td> $idr</td>";
echo"<td> $id</td>";
echo"<td> $v_type</td>";
echo"<td> $v_name</td>";
echo"<td> $status</td>";
echo"<td> $factor</td>";
echo"<td> $ff</td>";
 echo "</tr>";
}

?>
							
							</tbody>
							</table> 
			  </div>
			  
			</div>
			
			
		</div>
	</div>
 	<!--//grid-->
		<!---->
<?php include"footer.php"; ?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

