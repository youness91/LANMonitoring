

<?php

	require_once('crud/preheader.php'); 

	#the code for the class
	include ('crud/ajaxCRUD.class.php'); 
    $tblDemo = new ajaxCRUD("Item", "tblDemo", "pkID", "../");
    $tblDemo->omitPrimaryKey();
    #the table fields have prefixes; i want to give the heading titles something more meaningful
    $tblDemo->displayAs("fldField1", "IP address");
    $tblDemo->displayAs("fldField2", "IP mask");
    $tblDemo->displayAs("fldCertainFields", "Device type");
    $tblDemo->displayAs("fldLongField", "Device description");
    $tblDemo->displayAs("fldCheckbox", "Password");
	#set the textarea height of the longer field (for editing/adding)
    $tblDemo->setTextareaHeight('fldLongField', 150);
    #i could omit a field if I wanted
    #http://ajaxcrud.com/api/index.php?id=omitField
    $tblDemo->omitField("fldCheckbox");

    $allowableValues = array("federateur1", "federateur2", "backup", "acces");
    $tblDemo->defineAllowableValues("fldCertainFields", $allowableValues);

    //set field fldCheckbox to be a checkbox
   

    #set the number of rows to display (per page)
    $tblDemo->setLimit(30);

	#set a filter box at the top of the table
    //$tblDemo->addAjaxFilterBox('fldField1');

    #if really desired, a filter box can be used for all fields
    //$tblDemo->addAjaxFilterBoxAllFields();

    #i can set the size of the filter box
    //$tblDemo->setAjaxFilterBoxSize('fldField1', 3);
	#i can format the data in cells however I want with formatFieldWithFunction
	#this is arguably one of the most important (visual) functions
	$tblDemo->formatFieldWithFunction('fldField1', 'makeBlue');
	$tblDemo->formatFieldWithFunction('fldField2', 'makeBold');
	//$tblDemo->onAddExecuteCallBackFunction("mycallbackfunction"); //uncomment this to try out an ADD ROW callback function
	$tblDemo->deleteText = "delete";

	
	
	
	
	
	
	
	
	
	

    $tblDemo2 = new ajaxCRUD("Item", "tblDemo2", "pkID");
    $tblDemo2->omitPrimaryKey();
    $tblDemo2->displayAs("fldField1", "Field1");
    $tblDemo2->displayAs("fldField2", "Field2");
    $tblDemo2->displayAs("fldCertainFields", "Color");
    $tblDemo2->displayAs("fldLongField", "Long Field");

    $allowableValues2 = array("Green", "Blue", "Red", "Periwinkle");
    $tblDemo2->defineAllowableValues("fldCertainFields", $allowableValues2);

    $tblDemo2->setTextareaHeight('fldLongField', 50);
    $tblDemo2->setLimit(20);
    //$tblDemo2->addAjaxFilterBox('fldField1');
	$tblDemo2->formatFieldWithFunction('fldField2', 'makeBlue');
	$tblDemo2->formatFieldWithFunction('fldField1', 'makeBold');

	

	
	
	
	
?>

<html lang="en">

<head>
   <?php include('headers/headmonitor.php');?>
    <title>Administartion | </title>
</head>

<body  onload="init();"  class="nav-sm">

<div class="container body">

<!----------------------------------- MAin container ---------------------------------->
<div class="main_container">
<!----------------------------------- COL md3 ---------------------------------->
<div class="col-md-3 left_col">

                <div class="left_col scroll-view">


<!-- menu prile quick info -->
                    <div class="profile">
                        
                        <div class="profile_info">
                            <span></span>
							<br></br>
							<br></br>
							<br></br>
                            <h2></h2>
                        </div>
                    </div>
<!-- /menu prile quick info -->

                  

<!-- sidebar menu ------------------->
                   <div class="left_col scroll-view">
                <br /><br /><br />
                    <?php include('sidebar.php'); ?>
                </div>
<!-- /sidebar menu FIN ------------------------------>

                </div>
 </div>
<!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i ></i></a>
							<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
							 
                                    <span class="badge bg-green">user 92</span>
									
                                </a>
								<div >
                            </br>
                        </div>
                        </div>
                       
                        
                    </nav>
					
                        </ul>
                </div>

</div>
<!----------------------------------- FIN COL md3 ---------------------------------->
<!----------------------------------- Main container FIN ---------------------------------->
            <!-- /top navigation -->
			<!-- page content -->
<div class="right_col1" role="main">

                <!-- top tiles -->
				
<div id="container">
            <div class="right_col" role="main">
<p><strong>Administration</strong></p>
<div id="container">
				
<h2></h2>


		<div style="float: left">
			Core switches settings: <b></b><br />
		</div>

		<div style="clear:both;"></div>
		<?php

	#actually show the table
	$tblDemo->showTable();
	 echo  '<div style="float: left">
			 Access switches settings:<b>
			</b><br />
		</div><div style="clear:both;"></div>';
	$tblDemo2->showTable();

	#my self-defined functions used for formatFieldWithFunction
	function makeBold($val){
		if ($val == "") return "no value";
		return "<b>$val</b>";
	}

	function makeBlue($val){
		return "<span style='color: blue;'>$val</span>";
	}

	function myCallBackFunction($array){
		echo "THE ADD ROW CALLBACK FUNCTION WAS implemented";
		print_r($array);
	}
?>

<?php
echo "<h2></h2>";
echo $name;
echo "<br>";
echo $email;
?>
                       
<div id="right-container">
<script type="text/javascript">
//////////////////////////////////////////AJAX5
    $(document).ready(function () {
        $("#confirm1").click(function () {
            $.ajax({
                    type: "POST",
                    url: ,
                    data: {}
                   })
                .done(function (response) {
			                    alert("mis a jour ");
					            $("#count").html(response);
                });
        });
    });
///////////////////////////////////////////fin AJAX5	
</script>

</div>
				</div>
                <br />
                <div class="row">
                </div>
                </div>

					
          </div>
				</div>
                <br />
                <div class="row">
                </div>
                </div>
                
            </div>
            <!-- /page content -->

        </div>

    </div>

    

   

</body>

</html>

		

