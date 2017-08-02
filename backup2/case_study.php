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
			  <form action="" method="POST">
			  
			 Case Study : <br><br> <textarea name="m2" id="txtarea1" cols="100" rows="12" class="form-control1" style="background-color:white;margin: 0px; height: 118px; width: 739px;"></textarea>
			<br>  <button type="m3" class="btn-primary btn">Request to System </button>
			  </form>
			  
			  
			  <br><hr>
			  
			  
			  
			  <?php
		if(isset($_POST['m2'])){
		
		$u=$_SESSION['user_id'];
		
		$message=mysql_real_escape_string(trim($_POST['m2']));
		
		$sql2="INSERT INTO `case_study`(`user_id`, `case_study`) VALUES ('$u','$message')";
		mysql_query($sql2);
		
		echo "<h3> Thank you for your Case Study ! </h3>";
		}
		
		?>
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
			 $message= strtolower($_POST['message']);
				$_SESSION['message']=$message;
$sql="select * from kb";
 $query = mysql_query($sql);			
				while($row= mysql_fetch_array($query))
  {
  
  
  
  
    $token= strtolower($row['token']);
    $id=$row['id'];
	
  
  $token = preg_replace('/\s+/', '', $token);
       								$token = preg_replace('/[^a-zA-Z0-9]/', '', $token);

  									//preg_match("#(.{100}$token.{100})#i", strip_tags($message), $matches);

									
									$msg=explode(" ",$message);
									$ex=explode(" ",$token);

       								foreach($msg as $m){
       									foreach($ex as $val){
       										similar_text($m,$val,$percent);
	       									if ($percent > 75)
	       									{
	       										$message = str_replace($m,$val,$message);
	       										echo $message; 
	       										break;
	       									}
	       								}
       								}
 
 foreach($ex as $key=>$val){
	 
//$val = preg_replace('/\s+/', '', $val);
 if (strpos($message,"$val") !== false)
   { 
$_SESSION['id']=$id;

    echo   "<h2 style='color:black'> Your Response Feedback :<br> <br> ".$feedback=$row['feedback']." </h2><br>";
	$sc=score($id);
	echo   "<h4 style='color:green'> UX Feedback Score:<br> <br> ".$sc."</h4><br>";
	//$ex2=explode(" ",$message);
	//var_dump($ex2);
	//break;
}

 }
 



   }  ?><br><br>
   
   <form action="account.php" method="post">
   <h3 id="grid-example-basic">User Experience (UX) Feedback  </h3> <br>
			Is the Feedback Seems Correct ?   <select name="f1" id="selector1" class="form-control1">
										<option value="0">No</option>
										<option value="1">Not so better</option>
										<option value="2">Moderate</option>
										<option value="3">Average</option>
										<option value="4">Better than Average</option>
										<option value="5">Very Much (Yes)</option>
										
									</select> <br>
										Is the Feedback Relevant ?   <select name="f2" id="selector1" class="form-control1">
										
										
										<option value="0">No</option>
										<option value="1">Not so better</option>
										<option value="2">Moderate</option>
										<option value="3">Average</option>
										<option value="4">Better than Average</option>
										<option value="5">Very Much (Yes)</option>
										
									</select>
									
									<br>
										Is the Feedback Helpful ?   <select name="f3" id="selector1" class="form-control1">
									
									
									<option value="0">No</option>
										<option value="1">Not so better</option>
										<option value="2">Moderate</option>
										<option value="3">Average</option>
										<option value="4">Better than Average</option>
										<option value="5">Very Much (Yes)</option>
										
									</select>
									<br>
									Is the Feedback Need Improvement  ?   <select name="f4" id="selector1" class="form-control1">
								
								
								<option value="0">No</option>
										<option value="1">Not so better</option>
										<option value="2">Moderate</option>
										<option value="3">Average</option>
										<option value="4">Better than Average</option>
										<option value="5">Very Much (Yes)</option>
										
									</select>
									<br>  <button type="submit" class="btn-primary btn">UX Feedback</button>
									</form>
			  
		<?php	  }?>
		
		<?php
		if(isset($_POST['f1'])){
		$f1=$_POST['f1'];
		$f2=$_POST['f2'];
		$f3=$_POST['f3'];
		$f4=$_POST['f4'];
		$id=$_SESSION['id'];
		$q=$_SESSION['message'];
		$sql="INSERT INTO `feedback`( `kb_id`, `user_id`, `f1`, `f2`, `f3`, `f4`) VALUES ('$id','$user_id','$f1','$f2','$f3','$f4')";
		mysql_query($sql);
		unset($_SESSION['id']);
		unset($_SESSION['message']);
		
		$sql2="INSERT INTO `history`( `kb_id`, `user_id`, `q`) VALUES ('$id','$user_id','$q')";
		mysql_query($sql2);
		
		echo "<h3> Thank you for your Feedback ! </h3>";
		}
		
		?>
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

