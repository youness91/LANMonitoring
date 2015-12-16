	
	
	<?php   
	

session_start();
$j=array();
if( isset( $_GET['login']) ){
    $name = $_GET['login'];
}
$nbrport = $_GET['nbrport'];
if( isset( $_GET['password']) ){
$pass = $_GET['password'];
}
for($i=1;$i<$nbrport;$i++){
	$m=$i+1;
if( isset( $_GET[$i]) ){
$_0 = $_GET[$i];
$j[$i]=$_0;
}
}
include('cnxbd.php'); 




$result1 = mysql_query("SELECT * FROM hosts WHERE host like'%$name%' ");

while($row1 = mysql_fetch_array($result1)) {
	$temp=$row1['temp'];
    $descr=$row1['sysdescr'];
}

echo'<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Step sequencer UI test</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize1.css">
    <link rel="stylesheet" href="css/style.css">
   </head>

  <body>';
  echo $descr.'<br/>';
   echo $name.'<br/>';
   echo "Total interfaces :" .$nbrport.'</br>';
  echo "Temperature:" .$temp.'°c';
   
         echo'<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Step sequencer UI test</title>
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/normalize1.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
     <div id="ajax" class="col-md-12">
                    <div class="">
                        <div class="x_content">
                            <div id="host" class="row1">
									
                            </div>
	
							    <div id="interf" class="row1">
                                        <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Type</div>
                                                 </br>
                                                <p>interface type</p>
                                                
                                            </div>
                                        </div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Vlan</div>
                                                </br>
                                                <p >0 </p>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >Mac address</div>
                                                </br>
                                                <p >0 </p>
                                               
                                            </div>
                                        </div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-122">
                                            <div class="tile-stats">
                                                <div >
                                                </div>
                                                <div >ipPhone mac</div>
                                                </br>
                                                <p >0 </p>
                                               
                                            </div>
                                        </div>
                                       
                                       
										
                                 </div>
                                 <br />
                        </div>
                    </div>
            </div>
  
  ';
	 echo '<div id="mac"></div>';	 
/////////////////////////////////////dessiner les interfaces////////////////////////////////		 
		 
	  	 
				for($i=1;$i<($nbrport);$i++){
					  if($j[$i]=="INTEGER: up(1)"){
		  		  echo '<button id="'.$i.'" style="background-color:lightgreen" type="submit" style=""  class="button1" value="'.$i.'"  onclick="myFunction()"><p>'.$i.'</p><img src="images/portv.png" height="20px" width="20px"></button>';
			            }else{echo '<button id="'.$i.'" type="submit" style="background-color:#B2B2B2"  class="button1" value="'.$i.'"  onclick="myFunction()"><p>'.$i.'</p><img src="images/port.png" height="20px" width="20px"></button>';  }
		  }
		         
		          echo'</div></div>
                       <div id="resultat"></div>
                       <script src="js/index.js"></script>
                       </body>
                       </html>';

	                  
	                          
//////////////////////////////////////////pour ajouter les adresses mac aux interfaces////////////////////////////////////
      for($i=0;$i<$nbrport;$i++){
	
	echo '<script type="text/javascript">
//////////////////////////////////////////AJAX3////////////////////////////////////
var nbrport="'.$nbrport."\";".'
                           $(document).ready(function () {
                           $("#'.$i.'").click(function () {
								var n="'.$name.'";'.'
								  var btt = document.getElementById(\''.$i.'\').value;
                           $.ajax({
                                type: "GET",
                                 url: "infoswitch.php",
                                   data: { q : n,
								   s : btt
								   } ,

success: function(response) { $("#ajax").html(response);
                                                  }
                                 
					                        });
						   });
								   });
 //////////////////////////////////////////////FIN AJAX3								   
                             </script>';
						
}
		?>					 
									


