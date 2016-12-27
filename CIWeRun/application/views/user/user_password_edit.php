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
                        <li><a href="http://localhost/CIWeRun/index.php/users/starteditinfo"><i class="glyphicon glyphicon-user"></i>信息管理</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-edit"></i>修改密码</a></li>
                        <li><a href="http://localhost/CIWeRun/index.php/users/getfriend"><i class="glyphicon glyphicon-th-list"></i>好友管理</a></li>
                        <li><a href="http://localhost/CIWeRun/index.php/users/startaddfriend"><i class="glyphicon glyphicon-asterisk"></i>添加好友</a></li>
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
            <div class="container" style="width: 90%;margin-top: 100px">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="jumbotron">
                            <h1 class="text-center">
                                密码修改
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
                                <form class="bs-example bs-example-form" role="form">
                                    <div class="input-group">
                                        <span class="input-group-addon">原密码:</span>
                                        <input type="password" class="form-control" placeholder="Twitterhandle" id="pastpassword">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">新密码:</span>
                                        <input type="password" class="form-control" placeholder="Twitterhandle" id="newpassword">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">确认新密码:</span>
                                        <input type="password" class="form-control" placeholder="Twitterhandle" id="newpassword2">
                                    </div>
                                </form>
                            </ul>
                            <p>
                                <a class="btn btn-primary btn-large" href="#" id="btn_submit">确定修改</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--                <div class="row clearfix">-->
                <!--                    <h1>  最近常联系:</h1>-->
                <!--                    <div class="col-md-4 column">-->
                <!--                        <h2>-->
                <!--                            Heading-->
                <!--                        </h2>-->
                <!--                        <p>-->
                <!--                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.-->
                <!--                        </p>-->
                <!--                        <p>-->
                <!--                            <a class="btn" href="#">View details »</a>-->
                <!--                        </p>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-4 column">-->
                <!--                        <h2>-->
                <!--                            Heading-->
                <!--                        </h2>-->
                <!--                        <p>-->
                <!--                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.-->
                <!--                        </p>-->
                <!--                        <p>-->
                <!--                            <a class="btn" href="#">View details »</a>-->
                <!--                        </p>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-4 column">-->
                <!--                        <h2>-->
                <!--                            Heading-->
                <!--                        </h2>-->
                <!--                        <p>-->
                <!--                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.-->
                <!--                        </p>-->
                <!--                        <p>-->
                <!--                            <a class="btn" href="#">View details »</a>-->
                <!--                        </p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php echo base_url('/JS/sidebar.js')?>"></script>
<script>
    $("#btn_submit").click(function () {
        var url = "http://localhost/CIWeRun/index.php/users/setpassword";
//        var textarea = document.getElementById("#moments_text");
//        var info = textarea.value;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "text",
            data: {
                past: $("#pastpassword").val(),
                new: $("#newpassword").val(),
                new2: $("#newpassword2").val()
            },
            success: function (Message) {
                viewUser();
                alert(Message);
            },
            error: function () {
                alert("Error");
            }
        })
    });

</script>
</html>