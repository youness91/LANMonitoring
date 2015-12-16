<?php include('cnxbd.php'); 

session_start();

	

	if(empty($_GET['q'])){
$q = 'empty';

                    } else {
					$q = $_GET['q'];
					
                    }



$sqlc=mysql_query("SELECT * FROM hosts WHERE host = '%$q%'");
					
						while($row = mysql_fetch_array($sqlc)) {

	$ip=$row['ip'];
	$s=$row['ifdescr'];
    
}

$sqlcx=mysql_query("SELECT * FROM hosts WHERE host like'%$q%'");
					
						while($row = mysql_fetch_array($sqlcx)) {

	$temp=$row1['temp'];
    
}


				
?>

      <div class="">
                        <div class="x_content">
                            <div id="host" class="row1">
											
												   
		
                            </div>
	
							    <div id="interf" class="row1">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Status</div>
                                                 </br>
                                                <p>up/down<p>
                                                
                                            </div>
                                        </div>
                                        <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Mac address</div>
                                                </br>
                                                <p></p>
                                               
                                            </div>
                                        </div>
                                        <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Temperature</div>
                                                </br>
                                                <p><?php echo $temp; ?> <p>
                                               
                                            </div>
                                        </div>
                                       
										
                                 </div>
                                 <br />
                        </div>
                    </div>