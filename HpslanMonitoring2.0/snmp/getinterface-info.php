<!DOCTYPE html>
<html>

<head>

 <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/progressbar/bootstrap-progressbar-3.3.0.css">

    <script src="js/jquery.min.js"></script>


<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include('cnxbd.php'); 

if(empty($_GET['q'])){

$q = 'empty';
	
        
                    } else {
					$q = $_GET['q'];
					
					
                    }

if(empty($_GET['i'])){

$i= 'Select a device';
                    } else {
					$i = $_GET['i'];
					
				
                    }
					
					






$result = mysql_query("SELECT * FROM hosts WHERE host like '%$q%'");

while($row = mysql_fetch_array($result)) {
	$ip=$row['ip'];
	$s=$row['ifdescr'];
    
}
$community = 'public';
$temp1=snmpwalk("$ip","$community","1.3.6.1.4.1.9.9.13.1.3.1.3");
$temp = substr($temp1[0],8,12);
$result1 = mysql_query("SELECT * FROM hosts WHERE host like '%$q%' and idinterface = '".$i."'");

while($row1 = mysql_fetch_array($result1)) {
	$interf=$row1['ifoperstatus'];
	$inoctets=$row1['inoctets'];
	$outoctets=$row1['outoctets'];
	$ifdescr=$row1['ifdescr'];
	//$temp=$row1['temp'];
    
}


$inoctets1=substr($inoctets,10,17);
$outoctets1=substr($outoctets,10,17);
$ifdescr1=substr($ifdescr,7,17);

?>

                            
                                


                                    <div id="host" class="row1">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-download"></i>
                                                </div>
                                                <div class="count">Host</div>
                                                 </br>
                                                <h6  ><?php echo $q; ?></h6>
                                                <p></p>
                                            </div>
                                        </div>
                                       <div class="row top_tiles" style="margin: 10px 0;">
                                        <div class="col-md-3 tile">
                                            
                                            <h2>Temperature</h2>
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




                               
                       
                       
                    
					
					<script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
	  <script src="js/moris/morris.js"></script>
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
        $(function () {
            $('.chart').easyPieChart({
                easing: 'easeOutElastic',
                delay: 3000,
                barColor: '#26B99A',
                trackColor: '#fff',
                scaleColor: false,
                lineWidth: 20,
                trackWidth: 16,
                lineCap: 'butt',
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
            var chart = window.chart = $('.chart').data('easyPieChart');
            $('.js_update').on('click', function () {
                chart.update(Math.random() * 200 - 100);
            });
        });
    </script>

    <script>
        
		
		
		
		
		var myChart = echarts.init(document.getElementById('echart_guage3'), theme);
        myChart.setOption({
            
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
                    name: '',
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
                        value: <?php echo $temp; ?>,
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
                    name: '',
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
                        value: <?php echo $temp; ?>,
                        name: 'Temperature'
                    }]
            }
        ]
        });

    </script>
	
    
</body>
</html>