<!DOCTYPE html>
<html lang="en">

<head>
 <title>Commands | </title>
  <?php include('headers/head-dashboard.php');?>
</head>
<body class="nav-sm">
    <div class="container body">
<div class="navbar nav_title" style="border: 0;"> </div>
                      
                   
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
						<a id="menu_toggle"><i></i></a>
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						    <span class="badge bg-green">user 92</span>
                            </a>
                        <div class="profile_pic"> </div>
                        </div></a>
                </div>
                    </nav>
	            </div>

         </div>
     <!----------------------------------- FIN COL md3 ---------------------------------->
     <!----------------------------------- Main container FIN ---------------------------------->
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Commands</h3>
							</br></br>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row2">
					
					
		<!----------------------------------- Form ---------------------------------->			
			        <form action="commands.php" method="POST" >
			        <?php //include('cnxbd.php'); 
									function my_exec($cmd, $input='')
									{	$proc=proc_open($cmd, array(0=>array('pipe', 'r'), 1=>array('pipe', 'w'), 2=>array('pipe', 'w')), $pipes); 
											fwrite($pipes[0], $input);
												fclose($pipes[0]); 
											$stdout=stream_get_contents($pipes[1]);
												fclose($pipes[1]); 
											$stderr=stream_get_contents($pipes[2]);
												fclose($pipes[2]); 
											$rtn=proc_close($proc); 
										return array('stdout'=>$stdout, 
													 'stderr'=>$stderr, 
													 'return'=>$rtn 
													); 
					                }
									
						echo 'Select devices to apply command:</br>';
	///////////////////////Recuperer les cases cochées///////////////////////////////////////////////////////					
							$Name = $_POST['name'];
					if(empty($Name)) 
						  {
							echo("You didn't select any.");
						  }else{ 
							$N = count($Name);
							//echo("<br/>You selected $N Switch(s)<br/> ");
						  }
					if(empty($_POST['text'])){
						$commande = 'empt';
							}else{
								$commande = $_POST['text'];
    						     }			
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////                
					
					$out="";
					for($k=0;$k<(sizeof($Name));$k++){
					echo '</br>';
	/////////////////////////////////////////////////Recuperer les mots de passe et Usernames/////////////////////									
							$sql6c=mysql_query(" select * from hosts where host='$Name[$k]' ");
							while($row=mysql_fetch_array($sql6c)) 
							{    $ip=$row['ip'];  }
			
							$sql6=mysql_query(" select * from tblDemo2 where Hostname='$Name[$k]' ");
							while($row=mysql_fetch_array($sql6)) 
							{    $password=$row['Password'];
								  $username=$row['Username'];
							}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////						
							
	/////////////////////////////Plink command///////////////////////////////////////////////////////
					$out.="\n".$Name[$k]." :  \n";
					//echo "plink -ssh ".$username."@".$ip." -pw ".' '.$password.' '.'"'. $commande.'"';
					$p2= my_exec("(echo 'y') | /usr/local/bin/plink -ssh ".$username."@".$ip." -pw ".' '.$password.' '.'"'. $commande.'"');
					$out.=$p2["stdout"];
    /////////////////////////////////////////////////////////////////////////////////////////////////											
					}	
					
	///////////////////////////////////////Dessiner les checkboxes//////////////////////////////////				
					print "<table border=0 size=23 >";

					for($k=5;$k<17;$k++){
					$sql=mysql_query(" select * from node where id='$k' ");
					
						while($row = mysql_fetch_array($sql)) {
							$device=$row['iphost'];
					        }				
								if($device!='Core1-4506-252.hps.int' && $device!='Core2-4506-253.hps.int'){
		                        echo "<td>".' <input type="checkbox" name="name[]" value="'.$device.'">'.$device.'</option></br> '."</td>";	
	                                                                                      }	
	
                                        }
                     print "</table>";
					 echo "</br>";
    /////////////////////////////////////////////////////////////////////////////////////////////////

?>
			  
			  </br>
			  <div><strong>Enter command</strong> (e.g : "sh mac address-table static"):</div>
			  <textarea name="text" style={width="100px"}></textarea>
			 
			  <input id="checkbox" type="submit" value="apply">
  
			   <?php 
    			  echo "<textarea type=\"text\" style=\"height: 240px; width: 849px;\" name=\"input1\" value=\"".$out."\" disabled/>".$out."</textarea>"; 
			   ?>
      </form>
      </div>
                
    </div>
  <!-- /Fin page content -->

</div>

    </div>

   

  






<script>
$(document).ready(function () {
                            $("#che").click(function () {
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
</script>
</body>

</html>