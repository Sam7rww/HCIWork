<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>首页</title>

    <link href="<?php echo base_url('/CSS/bootstrap.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/CSS/navi.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/CSS/style.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/CSS/slidebar.css')?>" rel="stylesheet" type="text/css">
    <!---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="<?php echo base_url('/JS/script.js')?>"></script>
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
<header>
    <div class="slide-bar-div">
        <span class="toggle-button">
            <div class="menu-bar menu-bar-top"></div>
            <div class="menu-bar menu-bar-middle"></div>
            <div class="menu-bar menu-bar-bottom"></div>
        </span>
        <div class="menu-wrap">
            <div class="menu-sidebar">
                <ul class="menu">
                    <li><a href="http://localhost/CIWeRun/index.php/Main_Page">Home</a></li>
                    <!--<li><a href="#">About</a></li>-->
                    <!--<li><a href="#">Blog</a></li>-->
                    <li class="menu-item-has-children"><a href="http://localhost/CIWeRun/index.php/exercise">Run</a>
                        <span class="sidebar-menu-arrow"></span>
                        <ul class="sub-menu">
                            <li><a href="http://localhost/CIWeRun/index.php/exercise">我的运动</a></li>
                            <li><a href="exercise/exercise_body.html">身体管理</a></li>
                            <li><a href="exercise/exercise_sleep.html">睡眠分析</a></li>
                            <li><a href="exercise/exercise_follow.html">健身追踪</a></li>
                            <li><a href="exercise/exercise_back.php">反馈建议</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="http://localhost/CIWeRun/index.php/activity">Activity</a>
                        <span class="sidebar-menu-arrow"></span>
                        <ul class="sub-menu">
                            <li><a href="http://localhost/CIWeRun/index.php/activity">我的活动</a></li>
                            <li><a href="activity/activity_recom.html">活动推荐</a></li>
                            <li><a href="activity/activity_all.html">全部活动</a></li>
                            <li><a href="activity/activity_histry.html">历史活动</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="http://localhost/CIWeRun/index.php/compete">Compete</a>
                        <span class="sidebar-menu-arrow"></span>
                        <ul class="sub-menu">
                            <li><a href="http://localhost/CIWeRun/index.php/compete">我的活动</a></li>
                            <li><a href="compete">活动推荐</a></li>
                            <li><a href="compete">全部活动</a></li>
                            <li><a href="compete">历史活动</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost/CIWeRun/index.php/users">MyInfo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="head_h">
        <!--标题-->
        <h2>WeRun</h2>
    </div>
    <div class="head_ul_div">
        <ul class="nav_bar">
            <li><a href="http://localhost/CIWeRun/index.php/Main_Page">首页</a></li>
            <li class="active"><a href="#">运动</a></li>
            <li><a href="http://localhost/CIWeRun/index.php/activity">活动</a></li>
            <li><a href="http://localhost/CIWeRun/index.php/compete">竞赛</a></li>
        </ul>
        <?php $name = $this->session->userdata('username');?>
    </div>
    <div id="head_user">
        <h2><a href="#"><?php echo $name;?></a></h2>
    </div>
    <div class="head_user_photo">
        <img src="<?php echo base_url('/image/userPhoto.png')?>">
    </div>
    <!--<div class="shallow_color">-->
    <!--</div>-->
</header>
</body>