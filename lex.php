<?php include"conn.php";  $user_id=$_SESSION['user_id']; set_time_limit(0);?>
<!DOCTYPE HTML>
<html>
<head>
<title>Automated Q/A System</title>
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
               <h1> <a class="navbar-brand" href="account.php">Q/A System</a></h1>         
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
				<span>Q/A</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		<div class="horz-grid">
 		<div class="grid-hor">
 		<h3 id="grid-example-basic">Automatic Q/A System</h3>
 		<p class=""> Ask anything related to Computer Science of CUET</p>
			</div>
			<!----> 
			
			
			<div class="row show-grid">
			  <div class="col-md-12">
			  <form action="" method="POST">
			<center> <hr> Ask A Question to the system:</center><hr><br><br> <textarea name="message" id="txtarea1" cols="50" rows="8" class="form-control1" style="background-color:white;margin: 0px; height: 118px; width: 739px;"></textarea>
			<br>  <center> <button style="background-color: #E91E63 !important" type="submit" class="btn-primary btn">ASK to the System </button> </center>
			  </form>
			  
			  
			  <br><hr>
			  <?php
			  
			  function score($idx){
				  
				  $sql="SELECT id,kb_id as kkb_id,SUM(f1) as ff1,SUM(f2) as ff2,SUM(f3) 
						as ff3,SUM(f4) as ff4,(SUM(f1)+SUM(f2)+SUM(f3)+SUM(f4)) as total_sum FROM `feedback` WHERE kb_id='$idx'";
$result=mysql_query($sql);
while($row= mysql_fetch_array($result))
  {
	  $rr=$row['total_sum'];
  }		  
			return $rr;	  
			  }
			  
			  function lexical_analysis($source) {
    $tokens = array();

    foreach($source as $number => $line) {            
        $offset = 0;
        while($offset < strlen($line)) {
            $result = static::_match($line, $number, $offset);
            if($result === false) {
                throw new Exception("Unable to parse line " . ($line+1) . ".");
            }
            $tokens[] = $result;
            $offset += strlen($result['match']);
        }
    }

    return $tokens;
}

 function tokenize($line, $number, $offset) {
    $string = substr($line, $offset);

    foreach(static::$_terminals as $pattern => $name) {
        if(preg_match($pattern, $string, $matches)) {
            return array(
                'match' => $matches[1],
                'token' => $name,
                'line' => $number+1
            );
        }
    }

    return false;
}

			  if(isset($_POST['message'])){

			  
			  ?>
			  
			  <h2> Experimental Analysis </h2>
			<hr>
			<h3 style='color:yellow'> Module : Q/ A Segmentation </h3>
			<hr>		
							<?php 
							
						


$user_id=$_SESSION['user_id'];
  		
		
		
		$case_study=$_POST['message'];
echo "Root Q/ A is  : ".$case_study;

$exp=explode(".",$case_study);
foreach($exp as $key=>$val){
	echo"<hr>";
	echo"Line Index $key : Line detection : $val";
	
	
	
	echo"<hr>";
}
?>

<h3 style='color:yellow'> Module : LEX  Analysis</h3><hr>
<?php 
function clean($string) {
   $string = str_replace('-', ' ', $string); // Re
   $string = str_replace('_', ' ', $string); // R
   $string = str_replace('@', ' ', $string); // R
   $string = str_replace('!', ' ', $string); // R
   $string = str_replace(',', ' ', $string); // R
   $string = str_replace('&', ' ', $string); // R

   return $string; // Removes special chars.
}




$case_study=clean($case_study);
$ext2=explode(".",$case_study);

foreach($ext2 as $key=>$val){

	echo "<hr>";
	echo "Lexical Anlysis Index : $key > Result  : $val ";
	
	
	
	
	
echo "<hr>";
	}

?>







			  <?php 
			  
			  }

			  ?>
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

