
<select id="interfn" name="interf" onchange="showUser1()">
<?php include('cnxbd.php'); 


if(empty($_GET['q'])){
$q = 'empty';

                    } else {
					$q = $_GET['q'];
					
                    }
					
					

$sqlc=mysql_query("SELECT * FROM hosts WHERE host like '%$q%'");
					
while($row = mysql_fetch_array($sqlc)) {

	
	$nbrinte=$row['cpu']; 
	
}

	
					
					
	for($i=0;$i<$nbrinte;$i++){
$j=$i+1;
echo ' <option value="'.$j.'">interface'.$i.'</option> ';	
	}
				
?>






 
  
  
  </select>