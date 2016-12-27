<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/CSS/user_navbar.css') ?>" type="text/css">
    <!---->
    <style type="text/css">

    </style>

</head>
<body>

<div class="navbar navbar-duomi navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/Admin/index.html" id="logo">WeRun:Life is short ,let's Run !!
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                <li>
                    <a href="http://localhost/CIWeRun/index.php/users">
                        <i class="glyphicon glyphicon-th-large"></i>
                        个人首页
                    </a>
                </li>
                <li class="active">
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                        个人设置
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="http://localhost/CIWeRun/index.php/users/starteditinfo"><i
                                    class="glyphicon glyphicon-user"></i>信息管理</a></li>
                        <li><a href="http://localhost/CIWeRun/index.php/users/starteditpassword"><i
                                    class="glyphicon glyphicon-edit"></i>修改密码</a></li>
                        <li><a href="http://localhost/CIWeRun/index.php/users/getfriend"><i
                                    class="glyphicon glyphicon-th-list"></i>好友管理</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-asterisk"></i>添加好友</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i>通知查看</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://localhost/CIWeRun/index.php/Main_Page">
                        <i class="glyphicon glyphicon-credit-card"></i>
                        朋友圈(原首页)
                    </a>
                </li>

                <li>
                    <a href="http://localhost/CIWeRun/index.php/activity">
                        <i class="glyphicon glyphicon-globe"></i>
                        活动管理
                        <!--<span class="label label-warning pull-right">5</span>-->
                    </a>
                </li>

                <li>
                    <a href="http://localhost/CIWeRun/index.php/exercise">
                        <i class="glyphicon glyphicon-calendar"></i>
                        运动管理
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-fire"></i>
                        竞技系统
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-10">
            <div class="container" style="width: 90%;">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="jumbotron">
                            <h1 class="text-center">
                                添加好友
                            </h1>
                            </br>
                            </br>
                            </br>
                            <?php $name = $this->session->userdata('username'); ?>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $name; ?></span>
                                    用户名:
                                </li>
                            </ul>
                            <div class="row head">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="搜你想要的"
                                               id="search_username">
                                        <span class="input-group-btn">
                                                <button class="btn btn-info" type="button" id="btn_search">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                 </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-center">好友推荐</h3>
                </div>
                <div class="row">
                    <?php $num = -1; ?>
                    <?php $img = array('/image/clannad.jpg', '/image/kanon.jpg', '/image/universe.jpg'); ?>
                    <?php foreach ($recommend as $friend):
                        $name = $friend['friend'];
                        $declaration = $friend['declaration'];
                        $num = ($num + 1);
                        //
                        ?>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail" style="height: 320px;">
                                <img src="<?php echo base_url($img[$num]); ?>"
                                     alt="通用的占位符缩略图" style="height: 150px;">
                                <div class="caption" id="name<?php echo $num;?>">
                                    <h3><?php echo $name; ?></h3>
                                    <p>宣言:
                                        <?php echo $declaration; ?></p>
                                    <p>
                                        <a href="#" class="btn btn-primary" role="button" id="btn<?php echo $num;?>">
                                            添加好友
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php echo base_url('/JS/sidebar.js') ?>"></script>
<script>
    function send_text(uid, text_id, url) {

    }

    function closureExample(obj, text, timedelay) {
        setTimeout(function () {
            document.getElementById(objID).innerHTML = text;
        }, timedelay);
    }


    $("#btn_search").click(function () {
        var url = "http://localhost/CIWeRun/index.php/users/search";
        //        var textarea = document.getElementById("#moments_text");
        //        var info = textarea.value;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "text",
            data: {
                username: $("#search_username").val()
            },
            success: function (Message) {
                if (Message == '无该用户') {
                    viewsearch()
                } else {
                    viewfriend();
                }
                alert(Message);
            },
            error: function () {
                alert("Error");
            }
        })
    });

    $("#btn0").click(function(){
        var url = "http://localhost/CIWeRun/index.php/users/addfriend";
        var name = document.getElementById('name0');
        var node1 = name.getElementsByTagName("h3");
//        var node2 = name.getElementsByTagName("p");

        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
//            data : {Message : $("#time0").val()},
            data:{Message: (node1[0].innerText) },
            success : function(Message){
                viewfriend();
//                alert(nodeList[0].innerText);
            },
            error : function(){
                alert("Error");
            }
        })
    });
    $("#btn1").click(function(){
        var url = "http://localhost/CIWeRun/index.php/users/addfriend";
        var name = document.getElementById('name1');
        var node1 = name.getElementsByTagName("h3");
//        var node2 = name.getElementsByTagName("p");

        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
//            data : {Message : $("#time0").val()},
            data:{Message: (node1[0].innerText) },
            success : function(Message){
                viewfriend();
//                alert(nodeList[0].innerText);
            },
            error : function(){
                alert("Error");
            }
        })
    });
    $("#btn2").click(function(){
        var url = "http://localhost/CIWeRun/index.php/users/addfriend";
        var name = document.getElementById('name2');
        var node1 = name.getElementsByTagName("h3");
//        var node2 = name.getElementsByTagName("p");

        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
//            data : {Message : $("#time0").val()},
            data:{Message: (node1[0].innerText) },
            success : function(Message){
                viewfriend();
//                alert(nodeList[0].innerText);
            },
            error : function(){
                alert("Error");
            }
        })
    });

</script>
</html>