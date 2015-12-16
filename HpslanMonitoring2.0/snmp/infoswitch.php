<?php include('cnxbd.php'); 

session_start();

	

	if(empty($_GET['q'])){
$q = 'empty';

                    } else {
					$q = $_GET['q'];
					
                    }

if(empty($_GET['s'])){

$s= 'empty';
                    } else {
					$s = $_GET['s'];
					
                    }
					
					






$sql=mysql_query("SELECT * FROM hosts WHERE host = '%$q%' ");
					
						while($row = mysql_fetch_array($sql)) {

	$ip=$row['ip'];
	$s=$row['ifdescr'];
    
}


$sql1=mysql_query("SELECT * FROM hosts WHERE host like'%$q%' and idinterface ='$s' ");



while($row1 = mysql_fetch_array($sql1)) {
	$interf=$row1['ifoperstatus'];
	$inoctets=$row1['inoctets'];
	$outoctets=$row1['outoctets'];
	$ifdescr=$row1['ifdescr'];
	$temp=$row1['temp'];
    
}


$inoctets1=substr($inoctets,10,17);
$outoctets1=substr($outoctets,10,17);
$ifdescr1=substr($ifdescr,7,17);
$interf1=substr($interf,8,-3);
$inmbps=(int)($inoctets1/1048576)*8;
$inmbps1=(int)($outoctets1/1048576)*8;
$ingps=($inmbps/1024);
$ingps1=($inmbps1/1024);

		
	$sql8=mysql_query(" select * from mac where hostname like '%$q%' and hostip like '%INTEGER: dynamic%' and id='$s' limit 1  ");
	
				
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
                                                <div >Type</div>
                                                 </br>
                                                <p><?php echo $ifdescr1; ?><p>
                                                
                                            </div>
                                        </div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Vlan</div>
                                                 </br>
                                                <p><?php 
												if(($q=='Core2-4506-253.hps.int' or $q=='Core1-4506-252.hps.int')){
	echo $ifdescr1;   }else{
												
$name='Maclogs/'.$q.'.out';
	
	$file = $name;
$searchfor = 'Gi0/'.$s.PHP_EOL;

// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
												
												if(preg_match_all($pattern, $contents, $matches)){
   
   echo substr(implode("\t", $matches[0]),0,7);
   
}
else{
   echo "";
} }?><p>
                                                
                                            </div>
                                        </div>
                                        <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Mac address</div>
                                                </br>
                                                <p><?php 
 

 
if($q=='Core2-4506-253.hps.int' or $q=='Core1-4506-252.hps.int'){
	while ($row = mysql_fetch_row($sql8)) {
    echo '<tr>';
 
    for ($j = 1; $j < 2; $j++) {
        echo '<td>';
        echo ($row[$j] == NULL) ? '<i>NULL</i>' : substr($row[$j],7,19);
        echo '</td>';
    }
 
}}else{
	$name='Maclogs/'.$q.'.out';
	
	$file = $name;
$searchfor = 'Gi0/'.$s.PHP_EOL;

// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
   
  echo substr(implode("\n ipPhone", $matches[0]),7,19);
}
else{
   echo "";
}}	 ?></p>
                                               
                                            </div>
                                        </div>
                                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >ipPhone mac</div>
                                                 </br>
                                                <p><?php  
												if($q=='Core2-4506-253.hps.int' or $q=='Core1-4506-252.hps.int'){
												}else{
												$name='Maclogs/'.$q.'.out';
	
	$file = $name;
$searchfor = 'Gi0/'.$s.PHP_EOL;

// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
												
												if(preg_match_all($pattern, $contents, $matches)){
   
   echo substr(implode("\t", $matches[0]),52,-19);
   
}
else{
   echo "";
												} }?><p>
                                                
                                            </div>
                                        </div>
                                       
										
                                 </div>
                                 <br />
                        </div>
                    </div>