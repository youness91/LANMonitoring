<!DOCTYPE html>
<html>

<head>

 <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/progressbar/bootstrap-progressbar-3.3.0.css">

    <script src="js/jquery.min.js"></script>


<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include('cnxbd.php'); 

if(empty($_GET['q'])){
$q = 'empty';

                    } else {
					$q = $_GET['q'];
					
                    }

if(empty($_GET['i'])){

$i= 'empty';
                    } else {
					$i = $_GET['i'];
					
                    }
					
					



$result = mysql_query("SELECT * FROM hosts WHERE host like '%$q%'");

while($row = mysql_fetch_array($result)) {
	$ip=$row['ip'];
	$s=$row['ifdescr'];
    
}

$result1 = mysql_query("SELECT * FROM hosts WHERE host like'%$q%' and idinterface ='$i'");
$community = 'public';
$outoctets=snmpwalk("$ip","$community","1.3.6.1.2.1.2.2.1.16");
$inoctets=snmpwalk("$ip","$community","1.3.6.1.2.1.2.2.1.10");
$interf = snmpwalk("$ip","$community","1.3.6.1.2.1.2.2.1.8"); 

while($row1 = mysql_fetch_array($result1)) {
	//$interf=$row1['ifoperstatus'];
	//$inoctets=$row1['inoctets'];
	//$outoctets=$row1['outoctets'];
	$ifdescr=$row1['ifdescr'];
	
    
}


$inoctets1=substr($inoctets[$i],10,17);
$outoctets1=substr($outoctets[$i],10,17);
$ifdescr1=substr($ifdescr,7,17);
$interf1=substr($interf[$i],8,-3);
$inmbps=(int)($inoctets1/1048576)*8;
$outmbps=(int)($outoctets1/1048576)*8;
$ingps=($inmbps/1024);
$ingps1=($outmbps/1024);
?>
 
<?php
if(!empty($ifdescr)){
                                  echo ' <div class="row1">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon">';        if($interf1=="up"){
                                                            echo "<i class=\"fa fa-sort-up\"></i>";													
													
												}else{
													echo "<i class=\"fa fa-sort-desc\"></i>";	
												}                         echo '
                                                </div>
                                                <div class="count">Status</div>
                                                 </br>
                                                <h6  >';  echo $interf1;  echo '</h6>
                                                <p>.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-arrow-down"></i>
                                                </div>
                                                <div class="count">Network IN Mb/s</div>
                                                </br>
                                                <h5 >'; echo $inmbps;  echo 'Mb/s</h5>
                                                <p>';echo $ingps;  echo 'Gb/s</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-arrow-up"></i>
                                                </div>
                                                <div class="count">Network OUT Mo/s</div>
                                                  </br>
                                                <h2>'; echo $outmbps; echo ' Mb/s</h2>
                                                <p>';echo $ingps1;  echo 'Gb/s</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon">
												
												
												<i class="fa fa-flag-o"></i>
												
												
                                                </div>
                                                <div class="count">Interface</div>
                                                 </br>
                                                <h4>'; echo $ifdescr1; echo '</h4>
                                                <p>';  echo '</p>
                                            </div>
                                        </div>
                                    </div>
									
                                    <br />';
                                   
}else{
	
	 echo ' <div class="row1">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-sort-up"></i>
                                                </div>
                                                <div class="count">Status</div>
                                                 </br>
                                                <h6  >empty </h6>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-arrow-down"></i>
                                                </div>
                                                <div class="count">Network IN Kb/s</div>
                                                </br>
                                                <h5 >empty</h5>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-arrow-up"></i>
                                                </div>
                                                <div class="count">Network OUT Kb/s</div>
                                                  </br>
                                                <h2>empty</h2>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon">
												
												
												<i class="fa fa-flag-o"></i>
												
												
                                                </div>
                                                <div class="count">Interface</div>
                                                 </br>
                                                <h4>empty</h4>
                                                <p><empty</p>
                                            </div>
                                        </div>
                                    </div>
									
                                    <br />';
	
	
	
	
}



          ?>                     
                        
					
					<script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
	  <script src="js/moris/morris.js"></script>
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
     <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <!-- easypie -->
    <script src="js/easypie/jquery.easypiechart.min.js"></script>
	
	
	<script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
	
	
					
					<script type='text/javascript'>

$(function(){  
  // test-1
  $('#show-test-1').click(function(){
    $('#test-1').oLoader({
      backgroundColor:'#000',
      fadeInTime: 500,
      fadeOutTime: 1000,
      fadeLevel: 0.5
    });
  });
  $('#hide-test-1').click(function(){
    $('#test-1').oLoader('hide');
  });
  
  // test-2
  $('#show-test-2').click(function(){
    $('#test-2').oLoader({
      backgroundColor:'#000',
      image: 'images/ownageLoader/loader4.gif',
      fadeInTime: 500,
      fadeOutTime: 1000,
      fadeLevel: 0.8
    });
  });
  $('#hide-test-2').click(function(){
    $('#test-2').oLoader('hide');
  });
  
  // test-3
  $('#show-test-3').click(function(){
    $('table td input').oLoader({
      backgroundColor:'#fff',
      image: 'images/ownageLoader/loader2.gif',
      style: 0,
      fadeInTime: 500,
      fadeOutTime: 1000,
      fadeLevel: 0.5
    });
  });
  $('#hide-test-3').click(function(){
    $('table td input').oLoader('hide');
  });
});

</script>

<style type="text/css">
      table td div {
        padding:5px;
        background:#eee;
        height:100px;
      }
    </style>
    <script>
        $(function () {
            $('.chart').easyPieChart({
                easing: 'easeOutElastic',
                delay: 3000,
                barColor: '#26B99A',
                trackColor: '#fff',
                scaleColor: false,
                lineWidth: 20,
                trackWidth: 16,
                lineCap: 'butt',
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
            var chart = window.chart = $('.chart').data('easyPieChart');
            $('.js_update').on('click', function () {
                chart.update(Math.random() * 200 - 100);
            });
        });
    </script>

   
    
</body>
</html>