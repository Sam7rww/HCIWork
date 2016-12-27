<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>运动</title>
    <?php require_once "exer_headbar.php" ?>

    <link href="<?php echo base_url('/CSS/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/exer.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/circle.css')?>" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('/JS/echarts.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/JS/echarts-all.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/JS/circle.js')?>"></script>
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
<div class="aside_div" style="height: 1000px;">
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
                <li role="presentation" class="exercise_active">
                    <a href="#">睡眠分析</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise/my_follow">健身追踪</a>
                </li>
                <li role="presentation" class>
                    <a href="#">反馈建议</a>
                </li>
            </ul>
        </div>
    </aside>
    <!--主要内容-->
    <!--睡眠分析-->
    <div class="tab-pane fade active in" id="my_body">
        <div class="all_exe content">
            <div class="page-header">
                <h2 class="text-center">睡眠状况
                </h2>
            </div>

            <div class="canvas-wrap" style="width: 100px;height: 100px;">
                <canvas class="circle-process" width="100" height="100" process="55%">25%</canvas>
                <div class="text">
                    <p class="num">55%</p>
                    <p class="tit">睡眠有效率</p>
                </div>
            </div>

            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            睡眠开始
                        </h3>
                    </div>
                    <div class="panel-body">
                        0
                    </div>
                </div>
            </div>
            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;margin-left: 10px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            睡眠结束
                        </h3>
                    </div>
                    <div class="panel-body">
                        0
                    </div>
                </div>
            </div>
            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;margin-left: 10px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            睡眠总时长
                        </h3>
                    </div>
                    <div class="panel-body">
                        0小时0分钟
                    </div>
                </div>
            </div>
            <div class="pull-left" style="display: inline-block;width: 20%;margin-top: 20px;margin-left: 10px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            有效睡眠
                        </h3>
                    </div>
                    <div class="panel-body">
                        0小时0分钟
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="margin-top: 160px;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        本周每日睡眠数据统计:
                    </h3>
                </div>
                <div class="panel-body" >
                    <div id="main" style="height:400px"></div>
                    <script type="text/javascript">
                        // 基于准备好的dom，初始化echarts图表
                        var myChart = echarts.init(document.getElementById('main'));

                        option = {
                            title : {
                                text: '本周睡眠情况统计图'
                            },
                            tooltip : {
                                trigger: 'axis'
                            },
                            legend: {
                                data:['我的睡眠']
                            },
                            toolbox: {
                                show : true,
                                feature : {
                                    mark : {show: true},
                                    dataView : {show: true, readOnly: false},
                                    magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                                    restore : {show: true},
                                    saveAsImage : {show: true}
                                }
                            },
                            calculable : true,
                            xAxis : [
                                {
                                    type : 'category',
                                    boundaryGap : false,
                                    data : ['周一','周二','周三','周四','周五','周六','周日']
                                }
                            ],
                            yAxis : [
                                {
                                    type : 'value'
                                }
                            ],
                            series : [
                                {
                                    name:'睡眠情况',
                                    type:'line',
                                    smooth:true,
                                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                                    data:[800, 520, 610, 540, 460, 830, 710]
                                }
                            ]
                        };
                        // 为echarts对象加载数据
                        myChart.setOption(option);
                    </script>
                </div>
            </div>
            </br>
            <h2 class="text-center">睡眠质量不行哦,没睡好吗,让WeRun陪你一起睡个好觉吧~~</h2>
        </div>
    </div>
    <!--右边栏-->
</div>

</body>
</html>