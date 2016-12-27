<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset=UTF-8>
    <title>首页</title>
    <?php require_once "headbar.php"?>

    <link href="<?php echo base_url('/CSS/bootstrap.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/CSS/index.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--进度条-->


    <style type="text/css">
    </style>
</head>
<body>
<!--导航栏-->

<!--首页主要内容-->
<div class="aside_div">
    <div class="shallow_color">
        <span id="hint" class="success">操作成功</span>
    </div>
    <!--侧边栏-->
    <aside>
        <div class="aside_in">
            <div class="my_photo">
                <img src="<?php echo base_url('/image/userPhoto.png')?>">
            </div>
            <h2><?php echo $main_info['name']?></h2>
            </br>
            <h4>电话:<?php echo $main_info['phone']?></h4>
            <h4>邮箱:<?php echo $main_info['email']?></h4>
            </br>
            <div class="aside_level">
                <h3>我的等级: <?php echo $main_info['level']?></h3>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemax="100"
                         aria-valuemin="0" style="width:<?php echo $main_info['EP']?>%;"><?php echo $main_info['EP']?>%</div>
                    <span class="sr-only"></span>
                </div>
<!--                <span class="progressBar" id="element1">15%</span>-->
            </div>
            </br>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">个人信息
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="http://localhost/CIWeRun/index.php/users">个人主页</a></li>
                    <li><a href="http://localhost/CIWeRun/index.php/users/starteditinfo">编辑个人信息</a></li>
                    <li><a href="http://localhost/CIWeRun/index.php/users/starteditpassword">修改密码</a></li>
<!--                    <li><a href="#">其他</a></li>-->
                    <li class="divider"></li>
                    <li><a href="http://localhost/CIWeRun/index.php/users/getfriend">我的好友</a></li>
                    <li><a href="http://localhost/CIWeRun/index.php/users/startaddfriend">添加好友</a></li>
                    <li class="divider"></li>
                    <li><a href="http://localhost/CIWeRun/index.php">退出</a></li>
                </ul>
            </div>
        </div>
    </aside>
    <!--主页面内容-->
    <section class="content">
        <div class="putout_news">
            <h4>和朋友们一起分享一下你的经历吧！~ ~</h4>
            <form action="Main_Page.php" method="post">
                <textarea id="moments_text" type="text" name="dynamic" cols="100" rows="5"></textarea>
            </form>
            <input class="button" type="submit" value="发布" name="submit" id ="Dynamic_submit">
        </div>
        <?php $num = -1;?>
        <h2>所有动态</h2>
        <?php foreach ($allDynamic as $Dynamic):
            $name = $Dynamic['username'];
            $info = $Dynamic['moving'];
            $good = $Dynamic['good'];
            $time = $Dynamic['time'];
            $num = $num+1;
            ?>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    发布者:<?echo $name;?>
                </h3>
            </div>
            <div class="panel-body">
                <?php echo $info;?>
            </div>
            <div class="panel-body">
                <span>共点赞:<?php echo $good;?> </span>
                </br>
                <button type="button" class="btn btn-primary"
                        data-toggle="button" id="btn<?php echo $num;?>"> 点赞
                </button>
            </div>
            <div class="panel-body" id="time<?php echo $num;?>">
                创建时间:<span ><?php echo $time?></span>
            </div>
        </div>
        <?php endforeach;?>

<!--        <ul class="pagination">-->
<!--            <li><a href="#">&laquo;</a></li>-->
<!--            <li><a href="#">1</a></li>-->
<!--            <li><a href="#">2</a></li>-->
<!--            <li><a href="#">3</a></li>-->
<!--            <li><a href="#">4</a></li>-->
<!--            <li><a href="#">5</a></li>-->
<!--            <li><a href="#">&raquo;</a></li>-->
<!--        </ul>-->
    </section>
    <!--右边栏-->
<!--    <div class="inform_div">-->
<!--        <h2>最新通知</h2>-->
<!--        <ul class="new_inform">-->
<!--            <li></li>-->
<!--        </ul>-->
<!--    </div>-->
</div>

<!--脚注-->
<footer>

</footer>
</body>
<script src="<?php echo base_url('/JS/sidebar.js')?>"></script>
<script>
    $("#Dynamic_submit").click(function(){
        var url = "http://localhost/CIWeRun/index.php/Main_Page/setDynamic";
//        var textarea = document.getElementById("#moments_text");
//        var info = textarea.value;
        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
            data : {Message : $("#moments_text").val()},
            success : function(Message){
                viewMain();
//                alert(Message);
            },
            error : function(){
                alert("Error");
            }
        })
    });

    $("#btn0").click(function(){
        var url = "http://localhost/CIWeRun/index.php/Main_Page/addgood";
        var time = document.getElementById('time0');
        var nodeList = time.getElementsByTagName("span");

        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
//            data : {Message : $("#time0").val()},
            data:{Message: (nodeList[0].innerText) },
            success : function(Message){
                viewMain();
//                alert(nodeList[0].innerText);
            },
            error : function(){
                alert("Error");
            }
        })
    });

    $("#btn1").click(function(){
        var url1 = "http://localhost/CIWeRun/index.php/Main_Page/addgood";
        var time1 = document.getElementById('time1');
        var nodeList1 = time1.getElementsByTagName("span");

        $.ajax({
            url : url1,
            type : "POST",
            dataType : "text",
//            data : {Message : $("#time0").val()},
            data:{Message: (nodeList1[0].innerText) },
            success : function(Message){
                viewMain();
//                alert(nodeList1[0].innerText);
            },
            error : function(){
                alert("Error");
            }
        })
    });

    $("#btn2").click(function(){
        var url2 = "http://localhost/CIWeRun/index.php/Main_Page/addgood";
        var time2 = document.getElementById('time2');
        var nodeList2 = time2.getElementsByTagName("span");

        $.ajax({
            url : url2,
            type : "POST",
            dataType : "text",
//            data : {Message : $("#time0").val()},
            data:{Message: (nodeList2[0].innerText) },
            success : function(Message){
                viewMain();
//                alert(nodeList[0].innerText);
            },
            error : function(){
                alert("Error");
            }
        })
    });
</script>
<!--<script>-->
    <!--$(document).ready(function () {-->
        <!--var $toggleButton = $('.toggle-button');-->
        <!--$toggleButton.on('click', function () {-->
            <!--$(this).toggleClass('button-open');-->
        <!--});-->
    <!--});-->

    <!--$(document).ready(function () {-->
        <!--var $toggleButton = $('.toggle-button'),-->
                <!--$menuWrap = $('.menu-wrap');-->
        <!--$toggleButton.on('click', function () {-->
            <!--$(this).toggleClass('button-open');-->
            <!--$menuWrap.toggleClass('menu-show');-->
        <!--});-->
    <!--});-->

<!--</script>-->

<!--<script>-->
    <!--$(document).ready(function () {-->
        <!--var $sidebarArrow = $('.sidebar-menu-arrow');-->
        <!--$sidebarArrow.click(function () {-->
            <!--$(this).next().slideToggle(300);-->
        <!--});-->
    <!--});-->
<!--</script>-->
</html>