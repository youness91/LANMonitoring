<?php 
include('json1.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('headers/head.php'); ?>
	
<!------------------------jit--------------------------------------->
 	<?php include('jit.php'); ?>
</head>

<body  onload="init();"  class="nav-sm">

<div class="container body">

<!----------------------------------- MAin container ---------------------------------->
<div class="main_container">
<!----------------------------------- COL md3 ---------------------------------->
<div class="col-md-3 left_col">
<!-- sidebar menu ------------------->
                <div class="left_col scroll-view">
                <br /><br /><br />
                    <?php include('sidebar.php'); ?>
                </div>
	<!-- /sidebar menu FIN ------------------------------>
 </div>
<!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            
                        <div class="profile_pic">
                            
                        </div>
                        <div class="profile_info">
                           
                        </div>
                    </div></a>
                        </div>
                       
                    </nav>
					
                        </ul>
                </div>

</div>
     <!----------------------------------- FIN COL md3 ---------------------------------->
     <!----------------------------------- Main container FIN ---------------------------------->
     <!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">

<!-- top tiles -->
				
<!----------------------------------- ALerts   ---------------------------------->          
<?php include('profilehead.php'); ?>																					
     <!----------------------------------- ALerts  FIN ---------------------------------->
											
     
                    
  

				
<div id="log"></div>
                    
     <!-- /top tiles -->

<div id="container">
<?php include('alerts/alerts.php'); ?>	
           <div id="infovis"></div>
		   <!----------------------------------- ALerts   ---------------------------------->          
																			
     <!----------------------------------- ALerts  FIN ---------------------------------->
<div id="right-container">


<!------------------Mise à jour------------------------>                      

                                <div id="misajour" >
					
                                            <div class="tile-stats">
											<div class="count" ><p  id="maj"><?php
											include('cnxbd.php'); 
										            $sql6=mysql_query(" select * from time ");
											while($row=mysql_fetch_array($sql6)) 
											{     $time=$row['time'];}
										
												 echo"Last update at ".$time;
												  
                                                ?>
												</p>
                                                <input type="submit" onclick="this.value='updating...';" width="10" height="2" id="confirms"  value="Update" class="button1" ></p>
                                                
                                                <div  class="count"></div>

                                                
                                                </div>
                                            </div>
											
                            <script type="text/javascript">
//////////////////////////////////////////AJAX3
                            $(document).ready(function () {
                            $("#confirms").click(function () {
                           $.ajax({
                                type: "GET",
                                 url: "collecte-info-snmp.php",
                                   data: {  }                  
                                   })
                                 .done(function (response) {	
								 
								 $("#confirms").removeAttr('disabled');
								 
								 location.reload(); 
                                  
								 });
					                        });
                                   });
//////////////////////////////////////////////FIN AJAX3								   
                             </script>
								
				</div> 
				
<!-------------------pour ajouter les details a coté-------------------->				
				
      <!------------------Mise à jour FIN------------------------>	
					
          </div>
		  <div id="inner"></div>
		 
  <script>
  $(function() {
    
    });
  });
  </script>
</head>
<body>
 
<div id="dialog-form" title="Switch interface & info">
  <div id="resultat1" >
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
 <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

    <script src="js/custom.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="js/flot/date.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
    <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.css">
	
	
    <script>
        NProgress.done();
    </script>
	
 

    
	   
</body>

</html>
