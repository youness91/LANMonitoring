
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('headers/head.php');?>
	<title> Alerts| </title>
</head>


<body    class="nav-sm">

    <div class="container body">
        <div class="main_container">
            <!----------------------------------- COL md3 ---------------------------------->
<div class="col-md-3 left_col">

                <div class="left_col scroll-view">
                    
                    <!-- sidebar menu -->
                    <div class="left_col scroll-view">
                <br /><br /><br />
                    <?php include('sidebar.php'); ?>
                </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

               <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
						<a id="menu_toggle"><i></i></a>
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
							 
                                    <span class="badge bg-green">user 92</span>
                                </a>
                        <div class="profile_pic">
                            
                        </div>
                        
                    </div></a>
                        </div>
                       
                    </nav>

            </div>
            <!-- /top navigation -->
   
            <!-- page content -->
            <div class="right_col" role="main">
            <h3><strong><font ><img src="images/alertb.png"  height="40px"/>Alerts</font></strong></h3>
			<br/><br/>
                <!-- top tiles -->
               
                <!-- /top tiles -->

<div id="container">
			
                <?php print "<table border=0 size=23 bgcolor=#ffffff >";
$file = fopen ("alerts/alltraps.php", "r");

while(!feof($file))
{
$line = fgets ($file, 1000);


$pieces = explode(" ", $line);
$lenght=sizeof ($pieces );

if($lenght>= 10){
//var_dump($pieces);
$date = substr($pieces[0],0,7);
$host = substr($pieces[2],0,10);
$interface = substr($pieces[14],37,37);
$etat = substr($pieces[16],20,28);
if(empty($pieces[17])){$status="";}else{$status = substr($pieces[17],0,17);}



echo "<tr>"."<td>"."</td>"."<td>"."<strong>"."<font color=\"#476BB2\">".$date."</font>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."<br>"."</br>"."</td>"."<td>"."<strong>interface</strong>".$interface.", <strong>OF </strong> ,".$host.",  <strong>CHANGED TO  </strong>  ,".$etat.' '.$status."<br>"."</br>"."</td>"."</tr>";



}
} ?>
                    
<div id="right-container">

</div>
</div>
                <br />
                <div class="row">
                </div>

                </div>
                
            </div>
            <!-- /page content -->
        </div>
    </div>
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        NProgress.done();
    </script>
  
	
	
	
</body>

</html>
