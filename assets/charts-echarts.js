jQuery(document).ready(function() {
    // ECHARTS
    require.config({
        paths: {
            echarts: '../assets/global/plugins/echarts/'
        }
    });

    // DEMOS
    require(
        [
            'echarts',
            'echarts/chart/bar',
            
        ],
        function(ec) {
            //--- BAR ---
            var myChart = ec.init(document.getElementById('echarts_bar'));
            var sample_data = [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3];
            myChart.setOption({
                tooltip: {
                    trigger: 'axis'
                },
                
                legend: {
                    data: ['']
                },
                toolbox: {
                    show: false,
                    feature: {
                        mark: {
                            show: false
                        },
                        dataView: {
                            show: false,
                            readOnly: false
                        },
                        magicType: {
                            show: false,
                            type: ['line', 'bar']
                        },
                        restore: {
                            show: false
                        },
                        saveAsImage: {
                            show: false
                        }
                    }
                },
                xAxis: [{
                	name:'Month',
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],
                yAxis: [{
                    type: 'value',
                    name: 'Processed Image',
                    splitArea: {
                        show: true
                    }
                }],
                series: [{
                    
                    name: 'Processed Image',
                    showInLegend:false,
                    type: 'bar',
                    itemStyle:{
                    	normal:{
                    		barBorderRadius:[10, 10, 0, 0],
                    		color:'rgb(124, 181, 236)',
                    	},
	            			emphasis:{
                    		barBorderRadius:[10, 10, 10, 10]
                    	}
                    },
                    show: false,
                    data: sample_data
                }]
            });
            		
	            

            
        }
    );
});