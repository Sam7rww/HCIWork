<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>运动</title>
    <?php require_once "exer_headbar.php" ?>

    <link href="<?php echo base_url('/CSS/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/exer.css')?>" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('/JS/echarts.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/JS/echarts-all.js')?>" type="text/javascript"></script>
    <!---->

    <!---->
</head>
<body>
<!--导航栏-->

<!--首页主要内容-->
<div class="aside_div">
    <div class="shallow_color">
    </div>
    <!--侧边栏-->
    <aside>
        <div class="aside_in">
            <h3>你的健康小助手</h3>
            <div class="blank"></div>
            <ul class="nav nav-tabs">
                <li role="presentation" class="exercise_active">
                    <a href="#">我的运动</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise/my_body">身体管理</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise/my_sleep">睡眠分析</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise/my_follow">健身追踪</a>
                </li>
                <li role="presentation" class>
                    <a href="exercise_back.php">反馈建议</a>
                </li>
            </ul>
        </div>
    </aside>
    <!--主要内容-->
    <!--我的运动-->

    <div class="tab-pane fade active in" id="my_exe">
        <div class="all_exe content">
            <div class="page-header">
                <h2>您本周运动状况为：
                </h2>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        运动距离/公里
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-info" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                             style="width: 60%;">12/20
                            <span class="sr-only"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        运动时间/天
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-info" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                             style="width: 30%;">3/7
                            <span class="sr-only"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        本周每日运动数据统计:
                    </h3>
                </div>
                <div class="panel-body" >
                    <div id="main" style="height:400px"></div>
                    <script type="text/javascript">
                        // 基于准备好的dom，初始化echarts图表
                        var myChart = echarts.init(document.getElementById('main'));

                        option = {
                            title : {
                                text: '本周每日运动情况',
                            },
                            tooltip : {
                                trigger: 'axis'
                            },
                            legend: {
                                data:['运动距离','运动时间']
                            },
                            toolbox: {
                                show : true,
                                feature : {
                                    mark : {show: true},
                                    dataView : {show: true, readOnly: false},
                                    magicType : {show: true, type: ['line', 'bar']},
                                    restore : {show: true},
                                    saveAsImage : {show: true}
                                }
                            },
                            calculable : true,
                            xAxis : [
                                {
                                    type : 'category',
                                    data : ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
                                }
                            ],
                            yAxis : [
                                {
                                    type : 'value'
                                }
                            ],
                            series : [
                                {
                                    name:'运动距离/km',
                                    type:'bar',
                                    data:[1.0, 3.2, 2.6, 2.2, 2.6, 1.4, 1.3],
                                    markPoint : {
                                        data : [
                                            {type : 'max', name: '最大值'},
                                            {type : 'min', name: '最小值'}
                                        ]
                                    },
                                    markLine : {
                                        data : [
                                            {type : 'average', name: '平均值'}
                                        ]
                                    }
                                },
                                {
                                    name:'运动时间/hour',
                                    type:'bar',
                                    data:[1.6, 2.9, 1.5, 1.7, 2.8, 1.6, 2.0],
                                    markPoint : {
                                        data : [
                                            {name : 'max', name: '最大值'},
                                            {name : 'min', name: '最小值'}
                                        ]
                                    },
                                    markLine : {
                                        data : [
                                            {type : 'average', name : '平均值'}
                                        ]
                                    }
                                }
                            ]
                        };
                        // 为echarts对象加载数据
                        myChart.setOption(option);
                    </script>
                </div>
            </div>
        </div>
        <div class="accu_exe content">
            <div class="page-header">
                <h2>您的运动总量：
                </h2>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        累计运动距离  <img src="<?php echo base_url('image/often_run.png')?>" style="width: 30px;height: 30px;">
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon">运动距离</span>
                        <input type="text" class="form-control" disabled="disabled" value="578">
                        <span class="input-group-addon">公里</span>
                    </div>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title">
                        累计运动时间  <img src="<?php echo base_url('image/time.png')?>" style="width: 30px;height: 30px;">
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon">运动时间</span>
                        <input type="text" class="form-control" disabled="disabled" value="88">
                        <span class="input-group-addon">小时</span>
                    </div>
                </div>

                <div class="panel-heading">
                    <h3 class="panel-title">
                        累计燃烧能量  <img src="<?php echo base_url('image/fire.png')?>" style="width: 30px;height: 30px;">
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon">运动燃烧</span>
                        <input type="text" class="form-control" disabled="disabled" value="7788">
                        <span class="input-group-addon">大卡</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--右边栏-->
<!--    <div id="exercise_rank">-->
<!--        <h3>本周运动排名</h3>-->
<!--        <div class="exe_rank">-->
<!--            <ol>-->
<!--                <li>1.<img src="--><?php //echo base_url('/image/userPhoto.png')?><!--"><span>username1</span></li>-->
<!--                <li>2.<img src="--><?php //echo base_url('/image/userPhoto.png')?><!--"><span>username1</span></li>-->
<!--                <li>3.<img src="--><?php //echo base_url('/image/userPhoto.png')?><!--"><span>username1</span></li>-->
<!--            </ol>-->
<!--        </div>-->
<!--    </div>-->
</div>


</body>
</html>