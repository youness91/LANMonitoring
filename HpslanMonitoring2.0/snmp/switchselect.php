<select id="switch" name="users" onchange="showUser()& showUser1()">
<?php include('cnxbd.php'); 


if(empty($_GET['q'])){
$q = 'empty';

                    } else {
					$q = $_GET['q'];
					
                    }
					
					
	$con = mysqli_connect('localhost','root','hps001*$','post');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"post");

$sql99nn=mysql_query("INSERT INTO node(iphost) (SELECT DISTINCT host FROM hosts)");
for($k=5;$k<19;$k++){
$sql="(select * from node where id='$k')";



$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
	$device=$row['iphost'];
	
    
}				
						
					
					
	
echo ' <option value="'.$device.'">'.$device.'</option> ';	
	                                         }
				
?>






 
  
  
  </select>