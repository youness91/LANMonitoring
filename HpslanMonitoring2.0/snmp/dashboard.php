<!DOCTYPE html>
<html lang="en">

<head>
 <title>Dashboard | </title>
<?php include('headers/head-dashboard.php');?>
</head>
<body class="nav-sm">
    <div class="container body">
<div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><span>Gentellela Alela!</span></a>
                    </div>
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
                        <div class="profile_pic">
                            
                        </div>
                        
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
                            <h3>Select a device</h3>
                        </div>

                       
                    </div>
                    <div class="clearfix"></div>

                    <div class="row2">
                        <div class="col-md-12">
						 <div class="title_right">
						 
						 
						 
                           <form>
<select id="switch" name="users" onchange="showUser()& showUser1()">
  
  <option value="Core1-4506-252" >Core1-4506-252</option>
  <option value="Core2-4506-253">Core2-4506-253</option>
  <option value=" S3560-1D-100.13"> S3560-1D-100.13</option>
  <option value="10.1.100.13 ">10.1.100.13 </option>
  
  </select>

<br>
<select id="interfn" name="interf" onchange="showUser1()">


 <option value="1">interface0</option>
  <option value="2">select a device first*</option>

  
  
  
  </select>
  
</form>





<div id="txtHint"></div>

                        </div>
                            <div id="ajax" class="col-md-12">
                            <div class="">
                                <div class="x_content">


                                    <div id="host" class="row1">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-download"></i>
                                                </div>
                                                <div class="count">Host</div>
                                                 </br>
                                                <h6  ></h6>
                                                <p></p>
                                            </div>
                                        </div>
                                       <div class="row top_tiles" style="margin: 10px 0;">
                                        <div class="col-md-3 tile">
                                            
                                            <h2>CPU Usage</h2>
                                            <span class="sparkline_one" style="height: 0px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
									<div id="echart_guage4" style="height:200px;"></div>
                                </span>
                                        </div>
                                        <div class="col-md-3 tile">
                                            
                                            <span class="sparkline_one" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;">
									<div id="echart_guage3" style="height:200px;"></div></canvas>
                                </span>
                                        </div>
                                        <div class="col-md-3 tile">
                                            
                                            <span class="sparkline_two" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                                        </div>
                                   
                                    </div>
                                       
		
                                    </div>
									
							
  
  
									 <div id="interf" class="row1">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-sort-up"></i><i class="fa fa-sort-down"></i>
                                                </div>
                                                <div class="count">Status</div>
                                                 </br>
                                                <h6  >up/Down</h6>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-arrow-down"></i>
                                                </div>
                                                <div class="count">Network IN Mb</div>
                                                </br>
                                                <h5 >0 Mb/s</h5>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-arrow-up"></i>
                                                </div>
                                                <div class="count">Network OUT Mb</div>
                                                  </br>
                                                <h2>0 Mb/s</h2>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon">
												<i class="fa fa-flag-o"></i>
                                                </div>
                                                <div class="count">interface</div>
                                                 </br>
                                                <h4>0 </h4>
                                                <p></p>
                                            </div>
                                        </div>
										
                                    </div>
                                        




                                    <br />
                                   




                               
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                
                
            </div>
            <!-- /page content -->

        </div>

    </div>

   

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
     <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <!-- easypie -->
    <script src="js/easypie/jquery.easypiechart.min.js"></script>
	
	
	<script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
	
	<script type="text/javascript" src="js/gauge/gauge.min.js"></script>

    <script type='text/javascript'>

$(function(){  
  // test-1
  $('#show-test-1').click(function(){
    $('#test-1').oLoader({
      backgroundColor:'#000',
      fadeInTime: 500,
      fadeOutTime: 1000,
      fadeLevel: 0.5
    });
  });
  $('#hide-test-1').click(function(){
    $('#test-1').oLoader('hide');
  });
  
  // test-2
  $('#show-test-2').click(function(){
    $('#test-2').oLoader({
      backgroundColor:'#000',
      image: 'images/ownageLoader/loader4.gif',
      fadeInTime: 500,
      fadeOutTime: 1000,
      fadeLevel: 0.8
    });
  });
  $('#hide-test-2').click(function(){
    $('#test-2').oLoader('hide');
  });
  
  // test-3
  $('#show-test-3').click(function(){
    $('table td input').oLoader({
      backgroundColor:'#fff',
      image: 'images/ownageLoader/loader2.gif',
      style: 0,
      fadeInTime: 500,
      fadeOutTime: 1000,
      fadeLevel: 0.5
    });
  });
  $('#hide-test-3').click(function(){
    $('table td input').oLoader('hide');
  });
});

</script>

<style type="text/css">
      table td div {
        padding:5px;
        background:#eee;
        height:100px;
      }
    </style>
  
    <script>
        
		var myChart = echarts.init(document.getElementById('echart_guage'), theme);
        myChart.setOption({
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [
                {
                    name: '个性化仪表盘',
                    type: 'gauge',
                    center: ['50%', '50%'], // 默认全局居中
                    radius: [0, '75%'],
                    startAngle: 140,
                    endAngle: -140,
                    min: 0, // 最小值
                    max: 100, // 最大值
                    precision: 0, // 小数精度，默认为0，无小数点
                    splitNumber: 10, // 分割段数，默认为5
                    axisLine: { // 坐标轴线
                        show: true, // 默认显示，属性show控制显示与否
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: [[0.2, 'lightgreen'], [0.4, 'orange'], [0.8, 'skyblue'], [1, '#ff4500']],
                            width: 30
                        }
                    },
                    axisTick: { // 坐标轴小标记
                        show: true, // 属性show控制显示与否，默认不显示
                        splitNumber: 5, // 每份split细分多少段
                        length: 8, // 属性length控制线长
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: '#eee',
                            width: 1,
                            type: 'solid'
                        }
                    },
                    axisLabel: { // 坐标轴文本标签，详见axis.axisLabel
                        show: true,
                        formatter: function (v) {
                            switch (v + '') {
                            case '10':
                                return '10';
                            case '30':
                                return '30';
                            case '60':
                                return '60';
                            case '90':
                                return '90';
                            default:
                                return '';
                            }
                        },
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333'
                        }
                    },
                    splitLine: { // 分隔线
                        show: true, // 默认显示，属性show控制显示与否
                        length: 30, // 属性length控制线长
                        lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                            color: '#eee',
                            width: 2,
                            type: 'solid'
                        }
                    },
                    pointer: {
                        length: '80%',
                        width: 8,
                        color: 'auto'
                    },
                    title: {
                        show: true,
                        offsetCenter: ['-65%', -10], // x, y，单位px
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333',
                            fontSize: 15
                        }
                    },
                    detail: {
                        show: true,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 0,
                        borderColor: '#ccc',
                        width: 100,
                        height: 40,
                        offsetCenter: ['-60%', 10], // x, y，单位px
                        formatter: '{value}%',
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: 'auto',
                            fontSize: 30
                        }
                    },
                    data: [{
                        value: 22,
                        name: 'CPU'
                    }]
            }
        ]
        });
		
		
		
		
		
		var myChart = echarts.init(document.getElementById('echart_guage3'), theme);
        myChart.setOption({
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [
                {
                    name: '个性化仪表盘',
                    type: 'gauge',
                    center: ['50%', '50%'], // 默认全局居中
                    radius: [0, '75%'],
                    startAngle: 140,
                    endAngle: -140,
                    min: 0, // 最小值
                    max: 100, // 最大值
                    precision: 0, // 小数精度，默认为0，无小数点
                    splitNumber: 10, // 分割段数，默认为5
                    axisLine: { // 坐标轴线
                        show: true, // 默认显示，属性show控制显示与否
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: [[0.2, 'lightgreen'], [0.4, 'skyblue'], [0.8, 'orange'], [1, '#ff4500']],
                            width: 30
                        }
                    },
                    axisTick: { // 坐标轴小标记
                        show: true, // 属性show控制显示与否，默认不显示
                        splitNumber: 5, // 每份split细分多少段
                        length: 8, // 属性length控制线长
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: '#eee',
                            width: 1,
                            type: 'solid'
                        }
                    },
                    axisLabel: { // 坐标轴文本标签，详见axis.axisLabel
                        show: true,
                        formatter: function (v) {
                            switch (v + '') {
                            case '10':
                                return '10';
                            case '30':
                                return '30';
                            case '60':
                                return '60';
                            case '90':
                                return '90';
                            default:
                                return '';
                            }
                        },
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333'
                        }
                    },
                    splitLine: { // 分隔线
                        show: true, // 默认显示，属性show控制显示与否
                        length: 30, // 属性length控制线长
                        lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                            color: '#eee',
                            width: 2,
                            type: 'solid'
                        }
                    },
                    pointer: {
                        length: '80%',
                        width: 8,
                        color: 'auto'
                    },
                    title: {
                        show: true,
                        offsetCenter: ['-65%', -10], // x, y，单位px
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333',
                            fontSize: 15
                        }
                    },
                    detail: {
                        show: true,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 0,
                        borderColor: '#ccc',
                        width: 100,
                        height: 40,
                        offsetCenter: ['-60%', 10], // x, y，单位px
                        formatter: '{value}%',
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: 'auto',
                            fontSize: 30
                        }
                    },
                    data: [{
                        value: 50,
                        name: 'CPU'
                    }]
            }
        ]
        });
		
		
		
		
		
		var myChart = echarts.init(document.getElementById('echart_guage4'), theme);
        myChart.setOption({
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [
                {
                    name: '个性化仪表盘',
                    type: 'gauge',
                    center: ['50%', '50%'], // 默认全局居中
                    radius: [0, '75%'],
                    startAngle: 140,
                    endAngle: -140,
                    min: 0, // 最小值
                    max: 100, // 最大值
                    precision: 0, // 小数精度，默认为0，无小数点
                    splitNumber: 10, // 分割段数，默认为5
                    axisLine: { // 坐标轴线
                        show: true, // 默认显示，属性show控制显示与否
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: [[0.2, 'lightgreen'], [0.4, 'orange'], [0.8, 'skyblue'], [1, '#ff4500']],
                            width: 30
                        }
                    },
                    axisTick: { // 坐标轴小标记
                        show: true, // 属性show控制显示与否，默认不显示
                        splitNumber: 5, // 每份split细分多少段
                        length: 8, // 属性length控制线长
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: '#eee',
                            width: 1,
                            type: 'solid'
                        }
                    },
                    axisLabel: { // 坐标轴文本标签，详见axis.axisLabel
                        show: true,
                        formatter: function (v) {
                            switch (v + '') {
                            case '10':
                                return '10';
                            case '30':
                                return '30';
                            case '60':
                                return '60';
                            case '90':
                                return '90';
                            default:
                                return '';
                            }
                        },
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333'
                        }
                    },
                    splitLine: { // 分隔线
                        show: true, // 默认显示，属性show控制显示与否
                        length: 30, // 属性length控制线长
                        lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                            color: '#eee',
                            width: 2,
                            type: 'solid'
                        }
                    },
                    pointer: {
                        length: '80%',
                        width: 8,
                        color: 'auto'
                    },
                    title: {
                        show: true,
                        offsetCenter: ['-65%', -10], // x, y，单位px
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333',
                            fontSize: 15
                        }
                    },
                    detail: {
                        show: true,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 0,
                        borderColor: '#ccc',
                        width: 100,
                        height: 40,
                        offsetCenter: ['-60%', 10], // x, y，单位px
                        formatter: '{value}%',
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: 'auto',
                            fontSize: 30
                        }
                    },
                    data: [{
                        value: 50,
                        name: 'CPU'
                    }]
            }
        ]
        });
		
		
		var myChart = echarts.init(document.getElementById('echart_guage1'), theme);
        myChart.setOption({
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [
                {
                    name: '个性化仪表盘',
                    type: 'gauge',
                    center: ['50%', '50%'], // 默认全局居中
                    radius: [0, '75%'],
                    startAngle: 140,
                    endAngle: -140,
                    min: 0, // 最小值
                    max: 100, // 最大值
                    precision: 0, // 小数精度，默认为0，无小数点
                    splitNumber: 10, // 分割段数，默认为5
                    axisLine: { // 坐标轴线
                        show: true, // 默认显示，属性show控制显示与否
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: [[0.2, 'lightgreen'], [0.4, 'orange'], [0.8, 'skyblue'], [1, '#ff4500']],
                            width: 30
                        }
                    },
                    axisTick: { // 坐标轴小标记
                        show: true, // 属性show控制显示与否，默认不显示
                        splitNumber: 5, // 每份split细分多少段
                        length: 8, // 属性length控制线长
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: '#eee',
                            width: 1,
                            type: 'solid'
                        }
                    },
                    axisLabel: { // 坐标轴文本标签，详见axis.axisLabel
                        show: true,
                        formatter: function (v) {
                            switch (v + '') {
                            case '10':
                                return '10';
                            case '30':
                                return '30';
                            case '60':
                                return '60';
                            case '90':
                                return '90';
                            default:
                                return '';
                            }
                        },
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333'
                        }
                    },
                    splitLine: { // 分隔线
                        show: true, // 默认显示，属性show控制显示与否
                        length: 30, // 属性length控制线长
                        lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                            color: '#eee',
                            width: 2,
                            type: 'solid'
                        }
                    },
                    pointer: {
                        length: '80%',
                        width: 8,
                        color: 'auto'
                    },
                    title: {
                        show: true,
                        offsetCenter: ['-65%', -10], // x, y，单位px
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: '#333',
                            fontSize: 15
                        }
                    },
                    detail: {
                        show: true,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 0,
                        borderColor: '#ccc',
                        width: 100,
                        height: 40,
                        offsetCenter: ['-60%', 10], // x, y，单位px
                        formatter: '{value}%',
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: 'auto',
                            fontSize: 30
                        }
                    },
                    data: [{
                        value: 10,
                        name: 'CPU'
                    }]
            }
        ]
        });

    </script>
	
	<script>
	
function showUser() {
    
		var s = $( '#interfn' ).val();
	var x = $( '#switch' ).val();
		
		
$.ajax
   ({
	  

type: "GET",
url: "getinterface-info.php",
data: {
	
	q: x,
	i : s ,
},


success: function(response) {
                      
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                      
                     $("#host").html(response);

                      //$("#interface").html("<span class=\"seq-note1 seq-step-measure1\"></span>");

        }
           });
		   
		   
		     $.ajax({
	               type: "GET",
                   url: "interfaceselect.php",
                   data: {q : x},
                   success: function(response) { $("#interfn").html(response);
				   
				    
				   
				   }
				  
                 });

		
		
		
    
}
</script>

<script>


function showUser1() {
    
		
		var k = $( '#switch' ).val();
var y = $( '#interfn' ).val();
		
$.ajax
   ({
	  

type: "GET",
url: "getinterface-info2.php",
data: {
	
	i: y,
	q : k,
	
},


success: function(response) {
                      
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.

                     $("#interf").html(response);

                      //$("#interface").html("<span class=\"seq-note1 seq-step-measure1\"></span>");

        }
           });
		   
		 
		
		
		
    
}
</script>
<script>
var s = $( '#interfn' ).val();
var x = $( '#switch' ).val();
 $.ajax({
	               type: "GET",
                   url: "interfaceselect.php",
                   data: {q : x},
                   success: function(response) { $("#interfn").html(response);
				   
				    
				   
				   }
				  
                 });
				 
$.ajax({
	               type: "GET",
                   url: "switchselect.php",
                   data: {q : x},
                   success: function(response) { $("#switch").html(response);
				   
				    
				   
				   }
				  
                 });				 
				 
$.ajax
   ({
	  

type: "GET",
url: "getinterface-info.php",
data: {
	
	q: x,
	i : s ,
},


success: function(response) {
                      
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                      
                     $("#host").html(response);

                      //$("#interface").html("<span class=\"seq-note1 seq-step-measure1\"></span>");

        }
           });				 
$.ajax
   ({
	  

type: "GET",
url: "getinterface-info2.php",
data: {
	
	i: s,
	q : x,
	
},


success: function(response) {
                      
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.

                     $("#interf").html(response);

                      //$("#interface").html("<span class=\"seq-note1 seq-step-measure1\"></span>");

        }
           });

</script>

</body>

</html>