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
                    <a href="exercise_my.php">我的运动</a>
                </li>
                <li role="presentation" class>
                    <a href="exercise_body.php">身体管理</a>
                </li>
                <li role="presentation" class>
                    <a href="exercise_sleep.php">睡眠分析</a>
                </li>
                <li role="presentation" class>
                    <a href="exercise_follow.php">健身追踪</a>
                </li>
                <li role="presentation" class="exercise_active">
                    <a href="#">反馈建议</a>
                </li>
            </ul>
        </div>
    </aside>
    <!--主要内容-->
    <!--我的运动-->
    <div class="tab-pane fade active in" id="my_exe">
        <div class="all_exe content">
            <h2>您本周运动状况为：</h2>
            <span class="First_title">运动距离</span>
            <span class="Second_title">运动时间/天</span>
        </div>
        <div class="accu_exe content">
            <h2>您以累计运动：</h2>
            <div>运动距离</div>
            <div>运动时间</div>
        </div>
    </div>

    <!--右边栏-->
    <div id="exercise_rank">
        <h3>本周运动排名</h3>
        <div class="exe_rank">
            <ol>
                <li>1.<img src="<?php echo base_url('/image/userPhoto.png')?>"><span>username1</span></li>
                <li>2.<img src="<?php echo base_url('/image/userPhoto.png')?>"><span>username1</span></li>
                <li>3.<img src="<?php echo base_url('/image/userPhoto.png')?>"><span>username1</span></li>
            </ol>
        </div>
    </div>
</div>

</body>
</html>