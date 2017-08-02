<?php include"conn.php";  $user_id=$_SESSION['user_id'];  set_time_limit(0);?>
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
			
			
			
			<h2> Experimental Analysis </h2>
			<hr>
			<h4 style='color:red'> Sentence Segmentation </h4>
			<hr>		
							<?php 
							
						$id=$_GET['id'];


$user_id=$_SESSION['user_id'];
  		$sql="SELECT * FROM case_study  WHERE id='$id'";
$result=mysql_query($sql);
while($row= mysql_fetch_array($result))
  {

   $idr=$row['id'];
 
   $user_id=$row['user_id'];
   $case_study=$row['case_study'];
  



}
echo $user_id."And Analysis is : ".$case_study;

$exp=explode(".",$case_study);
foreach($exp as $key=>$val){
	echo"<hr>";
	echo"Line Index $key : Line detection : $val";
	
	
	
	echo"<hr>";
}
?>

<h4 style='color:red'> Lexical Analysis</h4>
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
<h4 style='color:red'> Tokenization and POS Tagging </h4>
<?php 
$ext=explode(" ",$case_study);

foreach($ext as $key=>$val){
	echo "<hr>";
	echo "Tokenized index : $key > attribute : $val >> <u> Tagged POS : </u>";
	
	
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://text-processing.com/api/tag/");
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,
//            "postvar1=value1&postvar2=value2&postvar3=value3");

// in real life you should use something like:
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array("text" => "$val")));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo $server_output = curl_exec ($ch);

curl_close ($ch);
	
	
	
echo "<hr>";
	}

?>



<h4 style='color:red'> Stop Words Removal </h4>
<?php 


$stopWords = array("for","and","I","What","so","from","for","also","or","have","been","is","never");
foreach($stopWords as $stopWord){
    $case_study = preg_replace("/(\b)$stopWord(\b)/", "", $case_study);
}



$ext2=explode(".",$case_study);

foreach($ext2 as $key=>$val){
	echo "<hr>";
	echo "Stop Word Removal Index : $key > attribute : $val ";
	
	
	
	
	
echo "<hr>";
	}

?>


<h4 style='color:red'> Result </h4>
<?php 

$exw=explode(" ",$case_study);
$s1=array();

$sql="SELECT * FROM de";
$result=mysql_query($sql);
$cc=0;
$ar=array();
while($row= mysql_fetch_array($result))
  {

   $idx=$row['id'];
 
   $name=$row['name'];
   $attr=$row['attr'];
   $exsl=explode("/",$attr);
  $countx = count(array_intersect($exw, $exsl));
  $arr[]=$countx;
$cc=$cc+$countx;


}

$ixx=0;
$sql1="SELECT * FROM de";
$result1=mysql_query($sql1);
while($row1= mysql_fetch_array($result1))
  {

   $idx1=$row1['id'];
 
   $name1=$row1['name'];
   $attr1=$row1['attr'];
   $exsl1=explode("/",$attr);
   $county = count(array_intersect($exw, $exsl1));
  $ans1=($arr[$ixx]/$cc)*100;
  echo"Statistical Result for $name1 : $ans1 % <br>";

$ixx++;

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

