<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>运动</title>
    <?php require_once "exer_headbar.php" ?>

    <link href="<?php echo base_url('/CSS/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/exer.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/circle.css') ?>" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('/JS/echarts.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/JS/echarts-all.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/JS/circle.js') ?>"></script>
    <!---->

    <!---->
    <style type="text/css">
        body{
            background: #f4f4f4 url(<?php echo base_url('/image/bg.gif')?>) repeat top left;
            color: #333;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<!--导航栏-->

<!--首页主要内容-->
<div class="aside_div" style="height: 1400px;">
    <div class="shallow_color">
    </div>
    <!--侧边栏-->
    <aside>
        <div class="aside_in">
            <h3>你的健康小助手</h3>
            <div class="blank"></div>
            <ul class="nav nav-tabs">
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise">我的运动</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise/my_body">身体管理</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise/my_sleep">睡眠分析</a>
                </li>
                <li role="presentation" class="exercise_active">
                    <a href="#">健身追踪</a>
                </li>
                <li role="presentation" class>
                    <a href="#">反馈建议</a>
                </li>
            </ul>
        </div>
    </aside>
    <!--主要内容-->
    <!--我的运动-->
    <div class="tab-pane fade active in" id="my_body">
        <div class="all_exe content">
            <div class="page-header">
                <h2 class="text-center">今日运动状况:
                </h2>
            </div>

            <div class="canvas-wrap" style="width: 100px;height: 100px;">
                <canvas class="circle-process" width="100" height="100" process="75%">25%</canvas>
                <div class="text">
                    <p class="num">75%</p>
                    <p class="tit">运动目标完成</p>
                </div>
            </div>

            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            运动距离/km
                        </h3>
                    </div>
                    <div class="panel-body">
                        8.8
                    </div>
                </div>
            </div>
            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;margin-left: 10px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            运动时长/h
                        </h3>
                    </div>
                    <div class="panel-body">
                        4
                    </div>
                </div>
            </div>
            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;margin-left: 10px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            燃烧热量/大卡
                        </h3>
                    </div>
                    <div class="panel-body">
                        8787
                    </div>
                </div>
            </div>
            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;margin-left: 10px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            运动步数/步
                        </h3>
                    </div>
                    <div class="panel-body">
                        29530
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="margin-top: 160px;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        本周每日运动数据统计:
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="main" style="height:400px"></div>
                    <script type="text/javascript">
                        // 基于准备好的dom，初始化echarts图表
                        var myChart = echarts.init(document.getElementById('main'));

                        option = {
                            title: {
                                text: '今日运动情况统计图',
                                subtext: '每隔20分钟'
                            },
                            tooltip: {
                                trigger: 'axis'
                            },
                            legend: {
                                data: ['轻度/静止', '适度运动', '强度运动']
                            },
                            toolbox: {
                                show: true,
                                feature: {
                                    mark: {show: true},
                                    dataView: {show: true, readOnly: false},
                                    magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                                    restore: {show: true},
                                    saveAsImage: {show: true}
                                }
                            },
                            calculable: true,
                            xAxis: [
                                {
                                    type: 'category',
                                    boundaryGap: false,
                                    data: ['0', '2', '4', '6', '8', '10', '12', '14', '16', '18', '20', '22', '24']
                                }
                            ],
                            yAxis: [
                                {
                                    type: 'value'
                                }
                            ],
                            series: [
                                {
                                    name: '轻度/静止',
                                    type: 'line',
                                    smooth: true,
                                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                                    data: [10, 10, 10, 10, 10, 10, 10, 2, 1, 0, 7, 9, 10]
                                },
                                {
                                    name: '适度运动',
                                    type: 'line',
                                    smooth: true,
                                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                                    data: [0, 0, 0, 0, 0, 0, 2, 4, 5, 5, 5, 5, 1]
                                },
                                {
                                    name: '强度运动',
                                    type: 'line',
                                    smooth: true,
                                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                                    data: [0, 0, 0, 0, 0, 0, 2, 4, 6, 8, 8, 3, 0]
                                }
                            ]
                        };
                        // 为echarts对象加载数据
                        myChart.setOption(option);
                    </script>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title">
                        本周每日运动数据统计:
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="main2" style="height:400px"></div>
                    <script type="text/javascript">
                        // 基于准备好的dom，初始化echarts图表
                        var myChart = echarts.init(document.getElementById('main2'));

                        option = {
                            title : {
                                text: '今日运动方式组成',
                                x:'center'
                            },
                            tooltip : {
                                trigger: 'item',
                                formatter: "{a} <br/>{b} : {c} ({d}%)"
                            },
                            legend: {
                                orient : 'vertical',
                                x : 'left',
                                data:['跑步','快走','骑自行车','打篮球','游泳']
                            },
                            toolbox: {
                                show : true,
                                feature : {
                                    mark : {show: true},
                                    dataView : {show: true, readOnly: false},
                                    magicType : {
                                        show: true,
                                        type: ['pie', 'funnel'],
                                        option: {
                                            funnel: {
                                                x: '25%',
                                                width: '50%',
                                                funnelAlign: 'left',
                                                max: 1548
                                            }
                                        }
                                    },
                                    restore : {show: true},
                                    saveAsImage : {show: true}
                                }
                            },
                            calculable : true,
                            series : [
                                {
                                    name:'访问来源',
                                    type:'pie',
                                    radius : '55%',
                                    center: ['50%', '60%'],
                                    data:[
                                        {value:335, name:'跑步'},
                                        {value:310, name:'打篮球'},
                                        {value:234, name:'骑自行车'},
                                        {value:135, name:'游泳'},
                                        {value:1548, name:'快走'}
                                    ]
                                }
                            ]
                        };
                        // 为echarts对象加载数据
                        myChart.setOption(option);
                    </script>
                </div>
            </div>
            </br>
        </div>
    </div>

    <!--右边栏-->
</div>

</body>
</html>