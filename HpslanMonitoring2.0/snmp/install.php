<?php

	require_once('crud/preheader1.php');

	include_once ('crud/ajaxCRUD1.class.php');//just so i can leverage echo_msg_box();

	
	//////tblDem1 est la table dans laquelle on va stocker les swicthes cores/////////////
	//////tblDemo2 est la table dans laquelle on va stocker les switches acces ///////////
	
    qr("CREATE TABLE tblDemo(pkID INT PRIMARY KEY AUTO_INCREMENT,fldField1 VARCHAR(45),fldField2 VARCHAR(45),fldCertainFields VARCHAR(40),fldLongField TEXT, fldCheckbox TINYINT);");
    $report_msg[] = "TABLE <b>cmdmonitor</b> CREATED\n";
qr("CREATE TABLE tblDemo2(pkID INT PRIMARY KEY AUTO_INCREMENT,Hostname VARCHAR(45),Username VARCHAR(45),Password TEXT);");
    $report_msg[] = "TABLE <b>tblDemo2</b> CREATED\n";
	
    
    
    if ($success){
        $report_msg[] = "<b>Example rows entered into demo tables.</b>\n";
    }

    echo_msg_box();

   

?>