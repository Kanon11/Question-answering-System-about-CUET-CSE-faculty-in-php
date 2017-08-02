<?php
if($_SESSION['user_id']=='admin')
{
	?>
	<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
				
				 <li>
                        <a href="lex.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">LEX Analysis</span> </a>
                    </li>
					
					 <li>
                        <a href="pos.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">POS tagging Analysis</span> </a>
                    </li>
					<li>
                        <a href="stop.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Stopword Detection</span> </a>
                    </li>
                    <li>
                        <a href="account.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Complete Analysis</span> </a>
                    </li>
					
					<li>
                        <a href="account.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label"> Analysis - Charts</span> </a>
                    </li>
				   
                </ul>
            </div>
			</div>
        
<?php	
}




else {
	
	
	
	
	
	?><div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="account.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">HOME</span> </a>
                    </li>
                  
				   

                </ul>
            </div>
			</div>
        <?php

}

?>    