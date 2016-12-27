<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns:sketch="">
<head>
    <meta charset="UTF-8">
    <title>运动</title>

    <?php require_once "exer_headbar.php" ?>

    <link href="<?php echo base_url('/CSS/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/exer.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/linechart.css')?>" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('/JS/echarts.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/JS/echarts-all.js') ?>" type="text/javascript"></script>
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
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/exercise">我的运动</a>
                </li>
                <li role="presentation" class="exercise_active">
                    <a href="#">身体管理</a>
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
    <!--身体管理-->
    <div class="tab-pane fade active in" id="my_body">
        <div class="all_exe content">
            <div class="page-header">
                <h2 class="text-center">体重身高:
                </h2>
            </div>
            </br>
            <div class="pull-left" style="display: inline-block;width: 50%;">
                <div class="input-group" style="width: 100%;">
                    <span class="input-group-addon">身高</span>
                    <input type="text" class="form-control" id="in_height">
                    <span class="input-group-addon">cm</span>
                </div>
                </br>
                <div class="input-group" style="width: 100%;">
                    <span class="input-group-addon">体重</span>
                    <input type="text" class="form-control" id="in_weight">
                    <span class="input-group-addon"> kg</span>
                </div>
                </br>
            </div>
            <div class="pull-left" style="display: inline-block;width: 50%;height: 100px;margin-top: 20px;">
                <button type="button" class="btn btn-success" style="width: 70%;height:50px;margin-left: 30px;" id="btn_save">保存
                </button>
            </div>
<?php if($BMI != null){
    $bmi = $BMI;
}else{
    $bmi = 0;
}?>
            <div class="panel panel-default" style="margin-top: 130px;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        你的BMI:
                    </h3>
                </div>
                <div class="panel-body" >
                    <div class="input-group">
                        <span class="input-group-addon">BMI:</span>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $bmi;?>">
                    </div>
                </div>
                <div class="panel-body text-center">
                    <img src="<?php echo base_url('image/per.png') ?>">
                </div>
            </div>
        </div>
        <div class="all_exe content" style="height: 350px;">
            <div class="page-header">
                <h2 class="text-center">心率:100
                </h2>
            </div>
<!--            <form class="bs-example bs-example-form" role="form">-->
<!--                <div class="input-group">-->
<!--                    <span class="input-group-addon">@</span>-->
<!--                    <input type="text" class="form-control" placeholder="twitterhandle">-->
<!--                </div>-->
<!--                <br>-->
<!--            </form>-->
            <div class="graph__wrapper">
                <div class="coordinates">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <svg width="315px" height="107px" viewBox="0 0 315 107" version="1.1">
                    <defs>
                        <linearGradient x1="0%" y1="100%" x2="100%" y2="100%" id="linearGradient-1">
                            <stop stop-color="#2090F8" offset="0%"></stop>
                            <stop stop-color="#01FCE4" offset="41.7610013%"></stop>
                            <stop stop-color="#0BFF8C" offset="78.6870217%"></stop>
                            <stop stop-color="#51FF00" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path
                            d="M0,95
						  L40,68
						  L55,81
						  L65,76
						  L96,86
						  L131,19
						  L142,23
						  L183,2
						  L211,22
						  L234,71
						  L234,83
						  L244,83
						  L247,88
						  L315,100"
                            id="Path-1" stroke="url(#linearGradient-1)" stroke-width="4" sketch:type="MSShapeGroup" class="path">
                        </path>
                    </g>
                </svg>
            </div>
        </div>
        <div class="all_exe content" style="height: 350px;">
            <div class="page-header">
                <h2 class="text-center">血压:75/107
                </h2>
            </div>
            <div class="graph__wrapper">
                <div class="coordinates_bp">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <svg width="315px" height="107px" viewBox="0 0 315 107" version="1.1">
                    <defs>
                        <linearGradient x1="0%" y1="100%" x2="100%" y2="100%" id="linearGradient-1">
                            <stop stop-color="#2090F8" offset="0%"></stop>
                            <stop stop-color="#01FCE4" offset="41.7610013%"></stop>
                            <stop stop-color="#0BFF8C" offset="78.6870217%"></stop>
                            <stop stop-color="#51FF00" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path
                            d="M0,35
						  L40,18
						  L55,28
						  L65,36
						  L96,26
						  L131,9
						  L142,3
						  L183,22
						  L211,20
						  L234,41
						  L244,33
						  L247,28
						  L315,30"
                            id="Path-1" stroke="url(#linearGradient-1)" stroke-width="4" sketch:type="MSShapeGroup" class="path">
                        </path>
                        <path
                            d="M0,95
						  L40,88
						  L55,71
						  L65,66
						  L96,86
						  L131,59
						  L142,73
						  L183,82
						  L211,92
						  L234,71
						  L244,99
						  L247,88
						  L315,100"
                            id="Path-1" stroke="url(#linearGradient-1)" stroke-width="4" sketch:type="MSShapeGroup" class="path">
                        </path>
                    </g>
                </svg>
            </div>

        </div>
        <!--        <div class="body1 content">-->
        <!--            <h2>身高体重</h2>-->
        <!--        </div>-->
        <!--        <div class="body2 content">-->
        <!--            <h2>心率</h2>-->
        <!--        </div>-->
        <!--        <div class="body3 content">-->
        <!--            <h2>血压</h2>-->
        <!--        </div>-->
    </div>
    <!--右边栏-->
</div>

</body>
<script src="<?php echo base_url('/JS/sidebar.js')?>"></script>
<script>

    $("#btn_save").click(function(){
        var url = "http://localhost/CIWeRun/index.php/exercise/BMI";
        var weight = document.getElementById('in_weight');
        var height = document.getElementById('in_height');
//        var textarea = document.getElementById("moments_text");
//        var info = textarea.value;
        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
            data : {weight : (weight.value),height:(height.value)},
            success : function(Message){
                viewbody();
                alert(Message);
            },
            error : function(){
                alert("Error");
            }
        })
    });
</script>
</html>