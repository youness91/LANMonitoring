<?php 

print "<table border=0 size=23 >";
$file = fopen ("trap.php", "r");

while(!feof($file))
{
$line = fgets ($file, 1000);


$pieces = explode(" ", $line);
$lenght=sizeof ($pieces );

if($lenght>= 10){

$date = substr($pieces[0],0,7);
$host = substr($pieces[2],0,10);
$interface = substr($pieces[14],37,37);
$etat = substr($pieces[16],20,28);
$status = substr($pieces[17],0,17);


echo "<tr>"."<td>"."</td>"."<td>".$date."</td>"."</tr>"."<tr>"."<td>"."<img src=\"images/alert.png\"  height=\"40px\"/>"."<br>"."</br>"."</td>"."<td>"."<strong>interface</strong>".$interface.", <strong>OF </strong> ,".$host.",  <strong>CHANGED TO  </strong>  ,".$etat.' '.$status."<br>"."</br>"."</td>"."</tr>";




}
}
/////////////////////////////////////////////////////////////
/**$line1 = fgets ($file, 4096);


$pieces1 = explode(" ", $line1);

$host1 = substr($pieces1[2],0,10);
$interface1 = substr($pieces1[14],37,37);
$etat1 = substr($pieces1[16],20,26);
$status1 = substr($pieces1[17],0,17);
print "<table border=1 bgcolor=#ffffff>"; 
echo '<i class="fa fa-bell"></i>';
echo "<tr>"."<td>".$interface1.", <strong>OF </strong>  ,".$host1.",  <strong>CHANGED TO  </strong>   ,".$etat1.$status1."</td>"."</tr>";
print "<table>";**/

?>