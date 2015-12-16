
<?php

///////////////Connexion a la base de données////////////////////////////////////////////////////////
include('cnxbd.php'); 


////////////////////////////////Requetes SQL////////////////////////////////////////////////////////////////////
$sql22ip=mysql_query("truncate table ip"); 
$sql22=mysql_query("truncate table hosts"); 
$sql23=mysql_query("truncate table node"); 
$sql233=mysql_query("truncate table iproutenexthop"); 
$sql233=mysql_query("truncate table mac"); 
for ($j=1; $j<3; $j++) {
	$sql="sql";
	$sql8=$sql.$j;
	
	$federateur='federateur'.$j;
	echo $federateur;
	$sql8=mysql_query(" select * from tblDemo where fldCertainFields='$federateur' ");
	
	while($row=mysql_fetch_array($sql8)) 
	{ 
    
	
    $ip=$row['fldField1']; 
	
	
    
    }
$sql99=mysql_query("INSERT INTO iproutenexthop(host)VALUES ('$ip')"); 

}


function str($value) { 
    $escapers = array("IpAddress:"," ");
    $replacements = array("","");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
                       }


////////////////////////////////////////////////////////////////////////////////////////////////////

for ($b=1; $b<3; $b++) {
	$sql="sql";
	$sql6=$sql.$b;
	
	$sql6=mysql_query(" select * from iproutenexthop where id=$b  ");
	
	while($row=mysql_fetch_array($sql6)) 
	{ 
    
    $hostf=$row['host']; 
    }
	

///////////////////////////////////////////////////////////////////////////////////////////////////////////// 

/////////////////Recuperation des données de chaque Host////////////////////////////////////////////

$community = 'public';
$object_id = 'interfaces.ifTable.ifEntry.ifDescr';
$sysDescr = snmpget("$hostf","$community","system.sysDescr.0"); 
$ifDescr = snmpwalk("$hostf","$community","interfaces.ifTable.ifEntry.ifDescr"); 
$ifIndex = snmpwalk("$hostf","$community","interfaces.ifTable.ifEntry.ifIndex"); 
$ifAdminStatus = snmpwalk("$hostf","$community","interfaces.ifTable.ifEntry.ifAdminStatus"); 
$ifOperStatus = snmpwalk("$hostf","$community","1.3.6.1.2.1.2.2.1.8"); 
$ifLastChange = snmpwalk("$hostf","$community","interfaces.ifTable.ifEntry.ifLastChange"); 
$ipRouteNextHop = snmpwalk("$hostf","$community","ipRouteNextHop");
$ipNetToMediaNetAddress=snmpwalk("$hostf","$community","ipNetToMediaNetAddress");
$ipRouteDest=snmpwalk("$hostf","$community","ipRouteDest");
$ipRouteType=snmpwalk("$hostf","$community","ipRouteType");
$next=snmp2_walk("$hostf","$community",".1.3.6.1.4.1.9.9.23.1.2.1.1.6");
$name=snmp2_walk("$hostf","$community","1.3.6.1.2.1.1.5");
$inoctets=snmpwalk("$hostf","$community","1.3.6.1.2.1.2.2.1.10");
$outoctets=snmp2_walk("$hostf","$community","1.3.6.1.2.1.2.2.1.16");
$cpu=snmp2_walk("$hostf","$community",".1.3.6.1.4.1.9.9.109.1.1.1.1.2.1");
$temp=snmp2_walk("$hostf","$community",".1.3.6.1.4.1.9.9.13.1.3.1.2");
$mac=snmpwalk("$hostf","$community",".1.3.6.1.2.1.3.1.1.2");
$ipNetToMediaNetphysAddress=snmpwalk("$hostf","$community","ipNetToMediaPhysAddress");
$ipNetToMediaType=snmpwalk("$hostf","$community","1.3.6.1.2.1.4.22.1.4");
$temp=snmpwalk("$hostf","$community","1.3.6.1.4.1.9.9.13.1.3.1.3");
///////////////////////////////////////////////////////////////////////////////////////////////////
$sys=substr($sysDescr,8,10);
$name1 = substr($name[0],8,50);

$w=0;
for ($w=0; $w<count($ifIndex); $w++) { 

$sql9mac=mysql_query("INSERT INTO mac(interface,mac,hostname,hostip,id) VALUES ('$ipNetToMediaNetAddress[$w]','$ipNetToMediaNetphysAddress[$w]','$name1','$ipNetToMediaType[$w]','$w')");

}

for ($k=0; $k<count($ipNetToMediaNetAddress); $k++) { 

$j=array();
$j=explode('.',$ipNetToMediaNetAddress[$k]);
if($j[2]=="100"){

             					$sql99nn=mysql_query("INSERT INTO ip(ip) VALUES ('$ipNetToMediaNetAddress[$k]')"); 
					}
}
for ($i=0; $i<count($next); $i++) { 
      
			$ip1=$next[0];
			                       
			$next1 = substr($next[$i],9,-1);	
					
			$sql=mysql_query("INSERT INTO iproutenexthop(host,nexthop,routedest)VALUES ('$name1','$next1','$ipNetToMediaType[$i]')");  
            $sql=mysql_query("INSERT INTO iproutenexthop(host,nexthop)VALUES ('$next1','$next1')");
					
		
                                            }    



$sql10=mysql_query("INSERT INTO node(iphost,adjacencies,host) VALUES('$name1','1','1')");

$sql10=mysql_query("INSERT INTO node(iphost,adjacencies,host) VALUES('$next1','1','1')");

////////////////////Boucler sur les indexes////////////////////////////////////            
for ($i=0; $i<count($ifIndex); $i++) { 

		
		$idinterface=0;
		$c=count($ifIndex);
		$p=$i+1;
		$temp1 = substr($temp[0],8,12);
        $sql4=mysql_query("INSERT INTO hosts(ifindex,ifdescr,ifoperstatus,host,sysdescr,ip,inoctets,outoctets,cpu,idinterface,temp) VALUES ('$ifIndex[$i]','$ifDescr[$i]','$ifOperStatus[$i]','$name1','$sysDescr','$hostf','$inoctets[$i]','$outoctets[$i]','$c','$p','$temp1')"); 
         $idinterface++;
}       


											
}


$sqlxxb=mysql_query(" select * from ip ");


$c=mysql_num_rows($sqlxxb);

 
 for ($j=1; $j<=12; $j++) {
	$sql="sql";
	$sql6c=$sql.$j;
	
	$sql6c=mysql_query(" select * from ip where id=$j and ip like '%.100.%' and ip like '%.100.%' ");
	
	while($row=mysql_fetch_array($sql6c)) 
	{ 
    
    $hostfbb=$row['ip']; 
	$hostfb=str($hostfbb);
	
    }
	
	
	$community = 'public';
$object_idb = 'interfaces.ifTable.ifEntry.ifDescr';
$sysDescrb = snmpget("$hostfb","$community","system.sysDescr.0"); 
$ifDescrb = snmpwalk("$hostfb","$community","interfaces.ifTable.ifEntry.ifDescr"); 
$ifIndexb = snmpwalk("$hostfb","$community","interfaces.ifTable.ifEntry.ifIndex"); 
$ifAdminStatusb = snmpwalk("$hostfb","$community","interfaces.ifTable.ifEntry.ifAdminStatus"); 
$ifOperStatusb = snmpwalk("$hostfb","$community","interfaces.ifTable.ifEntry.ifOperStatus"); 
$ifLastChangeb = snmpwalk("$hostfb","$community","interfaces.ifTable.ifEntry.ifLastChange"); 
$ipRouteNextHopb = snmpwalk("$hostf","$community","ipRouteNextHop");
$ipNetToMediaNetAddressb=snmpwalk("$hostfb","$community","ipNetToMediaNetAddress");
$ipRouteDestb=snmpwalk("$hostfb","$community","ipRouteDest");
$ipRouteTypeb=snmpwalk("$hostfb","$community","ipRouteType");
$nextb=snmp2_walk("$hostfb","$community",".1.3.6.1.4.1.9.9.23.1.2.1.1.6");
$nameb=snmp2_walk("$hostfb","$community","1.3.6.1.2.1.1.5");
$inoctetsb=snmpwalk("$hostfb","$community","1.3.6.1.2.1.2.2.1.10");	
$outoctetsb=snmpwalk("$hostfb","$community","1.3.6.1.2.1.2.2.1.16");
$mac=snmpwalk("$hostfb","$community",".1.3.6.1.2.1.3.1.1.2");	
	$sysb=substr($sysDescrb,8,15);
$name1b = substr($nameb[0],8,50);
$ipNetToMediaNetphysAddressb=snmpwalk("$hostfb","$community","1.3.6.1.2.1.2.2.1.6");
$ipNetToMediaTypeb=snmpwalk("$hostfb","$community","1.3.6.1.2.1.4.22.1.4");	
$tempb=snmpwalk("$hostfb","$community","1.3.6.1.4.1.9.9.13.1.3.1.3");	

///////////////////////////////////////////////////////////////////////////////////////////////	
$n=0;
for ($n=0; $n<count($ifIndexb); $n++) { 

$sql9physb=mysql_query("INSERT INTO mac(interface,mac,hostname,hostip,id) VALUES ('$ipNetToMediaNetAddressb[$n]','$ipNetToMediaNetphysAddressb[$n]','$name1b','$ipNetToMediaTypeb[$n]','$n')"); 


}

	for ($i=0; $i<count($ifIndexb); $i++) { 

		$cb=count($ifIndexb);
		$p=$i+1;
		$tempb1 = substr($tempb[0],8,12);
        $sql4=mysql_query("INSERT INTO hosts(ifindex,ifdescr,ifoperstatus,host,sysdescr,ip,inoctets,outoctets,cpu,idinterface,temp) VALUES ('$ifIndexb[$i]','$ifDescrb[$i]','$ifOperStatusb[$i]','$name1b','$sysDescrb','$hostfb','$inoctetsb[$i]','$outoctetsb[$i]','$cb','$p','$tempb1')"); 
         

} 
	$sql1012=mysql_query("INSERT INTO node(iphost,adjacencies,host) VALUES('$name1b','1','1')");

 }
 
 //////////////Remplir les fichiers des @ mac des interfaces///////////////////////

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

						for($k=5;$k<17;$k++){
						$sql=mysql_query(" select * from node where id='$k' ");
											
												while($row = mysql_fetch_array($sql)) {
													$device=$row['iphost'];
													}				
							
						$sql6c=mysql_query(" select * from hosts where host='$device' ");
											while($row=mysql_fetch_array($sql6c)) 
											{    $ip=$row['ip'];  }
							
											$sql6=mysql_query(" select * from tblDemo2 where Hostname='$device' ");
											while($row=mysql_fetch_array($sql6)) 
											{     $password=$row['Passwrd'];
												  $username=$row['Username'];
												  
											}
	
	
	
	
	

                     $out.="\n".$device." :  \n";
					 $commande='sh mac address-table static';
					//echo "plink -ssh ".$username."@".$ip." -pw ".' '.$password.' '.'"'. $commande.'"';
					$p2= my_exec("(echo 'y') | /usr/local/bin/plink -ssh ".$username."@".$ip." -pw ".' '.$password.' '.'"'. $commande.'"');
					$out.=$p2["stdout"];

					

				
			
	$name=$device.'.out';
	$monfichier = fopen("Maclogs/$name", "r+");
 

fputs($monfichier,$out);
 

fclose($monfichier);
  
}
		
 
 
 

 
 
date_default_timezone_set('UTC');
                                                $date = date("d-m-Y");
                                                $heure = date("H:i");
												$time=$date."  ".$heure;
                                                Print("Mis à jour le $date à $heure ");
												$sql233=mysql_query("truncate table time"); 
                                                $sqltime=mysql_query("INSERT INTO time(time) VALUES('$time')");
												
	





?>
    