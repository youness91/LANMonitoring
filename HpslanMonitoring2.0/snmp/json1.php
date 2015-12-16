<?php 
/////////////Les fonctions pour enlever les / et mettre le resultat sous un format json adequat/////////

function escapeJsonString($value) { 
$escapers = array("\"","\"[]\"",",[","]],","]]","[{\"band","\"}]");
    $replacements = array("\"","[]",",","],","]","{\"band","\"}");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
                                  }
								  
								  
		function escapeJsonStringjs($value) { 
$escapers = array("data\":[{","\"}],","png\"},","\"{}\"","{}}",",[{\"adjacencies\":","}]]","adjacencies\":\"[]\"","],[","[{\\","o\\",":\\","\\\",\\\"","nodefrom\\","\\\"nodeto","data\\","],{\"","]\"","\"[{","{}}]]",":[[{","{\"nodeTo","},[{","{\"adjacencies\"","{\"adjacencies\":[[",",[{\"adjacencies\"","[[{\"adj","{\\\"\$c","\\\":\"#000\\\"","\"{\"\$color\":\"#000\"}\"","}},\"id\"","\"0\":{","nbrport\":\"11\",\"0\":[]},"); 
    $replacements = array("data\":{","\"},","png\"},","{}","{}}]",",{\"adjacencies\":","}]","adjacencies\":[]",",","[{","o",":","\",\"","nodefrom","\"nodeto","data",",{\"","","[{","{}}]",":[{","[{\"nodeTo","},{","[{\"adjacencies\"","{\"adjacencies\":[",",{\"adjacencies\"","[{\"adj","{\"\$c","\":\"#000\"","{\"\$color\":\"#000\"}","},\"id\"","","nbrport\":\"11\"},");
    $result = str_replace($escapers, $replacements, $value);
    return $result;		
	}	
								  
								  
function escapeJsonStringData($value) { 
$escapers = array("[{","}]","\"","\"[]\"",",[","]],","]]","{}}]]","Gauge32:","IpAddress: ");
    $replacements = array("{","}","\"","[]",",","],","]","{}}]","","");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}

///////////////La connexion a la base de données///////////////////////////////////////////////////
include('cnxbd.php'); 
///////////////////Declaration de tableau que l'on va utiliser apres////////////////////////////////////////////
$js=array();
$js1=array();         
$hosti=array();
/////////////////////////////////Boucler sur la table iproutenexthop pour recuperer les hosts///////////////////////////////////
for ($i=1; $i<48; $i++) {
						$sql="sql1";
						$sql7=$sql.$i;
//////////////////////////////////////////////////////////////////////////////////////////////////////
						$data="data";
						$data=$data.$i;
//////////////////////////////////////////////////////////////////////////////////////////////////////
						$js1="js1";
						$js1=$js1.$i;
    
////////////////////////////Pour mettre les icons selon le type d'equipements/////////////////////////////////////////////		
	$datae = array('$type'=>'image1','$color'=> '#416D9C','$url'=>'yellow.png');          
    $datajsone =json_encode($datae);  
    $datare=escapeJsonStringData($datae);
	
	$data = array('$type'=>'image','$color'=> '#416D9C','$url'=>'images/switchfed.png','$interfacef0'=>'$interfacef0','dim'=>'27');          
    $datajson =json_encode($data);  
    $datar=escapeJsonStringData($data);

///////////////////////////////////////////////////////////////////////////////////////////////////////	
	$sql7=mysql_query(" select distinct host  from iproutenexthop where id=$i and nexthop not like'%NULL%'");
	while($row1=mysql_fetch_array($sql7)) 
	{ 
			$hostf=$row1['host'];
			/////////////////////
			$sql="sql";
			$sql6=$sql.$i;

/////////////////////////////////////////////////////////////////////////////////////////////////////////	
	$sql6=mysql_query(" select * from iproutenexthop where host like '%$hostf%' ;");
	$c=mysql_num_rows($sql6);////////////////
	
			for ($j=0; $j<=$c; $j++) {
				$adj="adj";
				$adj6=$adj.$j;
				$adj6=array();
				$adj8=array();
				while($row=mysql_fetch_array($sql6)) 
				{
				$c=mysql_num_rows($sql6);
		//////////////////Pour remplir le tableau des voisins dans Json (adjacencies)/////////////////
					$nexthop1=$row['nexthop'];
					$nexthop=escapeJsonStringData($nexthop1);
					$adj6 = array('nodeTo'=>$nexthop,'nodeFrom'=>$hostf,'data'=>'{}');
					$txt1= escapeJsonStringjs(json_encode($adj6));
					array_push($adj8,$adj6);
				
				$js3= array('adjacencies'=>'[]','data'=>$datar,'id'=>$nexthop,'name'=>$nexthop);
				$j=array();
		//////////////////////retourne le nombre d'interface/////////////////
				$sql66=mysql_query(" select * from hosts where host ='$hostf';");	
				while($row222=mysql_fetch_array($sql66)) 
				{$length=$row222['cpu'];}
		///////////////////////////////////////////////////////////////	
			for($l=1;$l<$length;$l++){
				$sql90=mysql_query(" select * from hosts where host like '%$hostf%' and idinterface='$l';");
									while($row80=mysql_fetch_array($sql90)) 
									{
										$id=$row80['id'];
										$interfacef0=$row80['ifoperstatus'];
										$types=$row80['sysdescr'];
										$descr=$row80['sysdescr'];
										$nbrport=$row80['cpu'];
										$j["$$l"]=$interfacef0;
									}
			                    }
                 $descr1=substr($descr,7,37);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	
    if($types="Cisco IOS"){
        $typetype='image';
    	$typeurl='images/switchfed.png';
		$color='#416D9C';
    }else{
    	$typetype='serveurinfo';
    	$typeurl='images/switchfed.png';
		$color='#416D9C';
    	    }
	
$data = array('$type'=>$typetype,'$color'=> '#416D9C','$url'=>$typeurl,'$interfacef0'=>$interfacef0,'$desc'=>$descr1,'$nbrport'=>$nbrport);  
array_push($data,$j);
/////////////////////////////////////////////        
    $datajson =json_encode($data);  
    $datar=escapeJsonStringData($data);  
/////////////////////////////////////////////	
	
					
				
		$js1= array('adjacencies'=>$adj8,'data'=>$data,'id'=>$hostf,'name'=>$hostf);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	}
    array_push($js, $js1);
////////////////////////////////////////////////////////////////////////////////////////////////////////////
    }
}
///////////////////////////////////////////////////////////////////////////////////////////////////
$txt11=escapeJsonStringjs(json_encode($js));
echo $txt11; echo "\r\n\n\n\n";
$json = fopen("json.txt", "r+");
 

fputs($json,$txt11);
 

fclose($json);



?>