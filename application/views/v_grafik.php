<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Grafik penjualan smartphone </title>
		<!--1) include file jquery.min.js dan higchart.js-->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>

		<script type="text/javascript">
		//2)script untuk membuat grafik, perhatikan setiap komentar agar paham
            $(function () {
                var chart;
                $(document).ready(function() {
                    chart = new Highcharts.Chart({
                        chart: {
                            renderTo: 'container', //letakan grafik di div id container
                            //Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                            type: 'line',  
                            marginRight: 130,
                            marginBottom: 25
                        },
                        title: {
                            text: 'Penjualan smartphone di toko candraphone',
                            x: -20 //center
                        },
                        subtitle: {
                            text: 'candra.web.id',
                            x: -20
                        },
                        xAxis: { //X axis menampilkan data bulan 
                            categories: ['januari', 'febuari', 'maret','april','mei','juni']
                        },
                        yAxis: {
                            title: {  //label yAxis
                                text: 'Total penjualan'
                            },
                            plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080' //warna dari grafik line
                            }]
                        },
                        tooltip: { 
                        //fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
                        //akan menampikan data di titik tertentu di grafik saat mouseover
                            formatter: function() {
                                    return '<b>'+ this.series.name +'</b><br/>'+
                                    this.x +': '+ this.y ;
                            }
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 100,
                            borderWidth: 0
                        },
                        //series adalah data yang akan dibuatkan grafiknya,
                    
                        series: [{  
                            name: 'android',  
                            
                            data: [20, 30,50,60,80,100]
                        },
                        {  
                            name: 'iPhone',  
                            
                            data: [5, 10,15,25,40,60]
                        },
                        {  
                            name: 'blackberry',  
                            
                            data: [100, 60,40,30,20,5]
                        },
                        {  
                            name: 'windows phone',  
                            
                            data: [30,20,5,20,10,40]
                        }
                        
                        ]
                    });
                });
                
            });
		</script>
	</head>
	<body>

<!--grafik akan ditampilkan disini -->
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<div id=link>


<a href='linechart.html'><p><?php echo base_url();?>assets/js/jquery.min.js</p>
</a>
</div>
	</body>
</html>