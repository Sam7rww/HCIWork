<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/CSS/user_navbar.css')?>" type="text/css">
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
                <li class="active">
                    <a href="#">
                        <i class="glyphicon glyphicon-th-large"></i>
                        个人首页
                    </a>
                </li>
                <li>
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                        个人设置
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="http://localhost/CIWeRun/index.php/users/starteditinfo"><i class="glyphicon glyphicon-user"></i>信息管理</a></li>
                        <li><a href="http://localhost/CIWeRun/index.php/users/starteditpassword"><i class="glyphicon glyphicon-edit"></i>修改密码</a></li>
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
        <?php $username = $info1['username'];
            $sex = $info1['sex'];
        $age = $info1['age'];
        $birth = $info1['birth'];
        $star = $info1['star'];
        $position = $info1['position'];
        $school = $info1['school'];
        $interest = $info1['interest'];
        $declaration = $info1['declaration'];

        $phone = $info2['phone'];
        $email = $info2['email'];
        ?>
        <div class="col-md-10">
            <div class="container" style="width: 90%;">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="jumbotron">
                            <h1 class="text-center">
                                个人信息
                            </h1>
                            </br>
                            </br>
                            </br>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $username;?></span>
                                    用户名:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $sex;?></span>
                                    性别:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $age;?></span>
                                    年龄:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $birth;?></span>
                                    生日:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $star;?></span>
                                    星座:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $phone;?></span>
                                    手机号:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $email;?></span>
                                    邮箱:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $position;?></span>
                                    所在地:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $school;?></span>
                                    学校:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $interest;?></span>
                                    兴趣:
                                </li>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo $declaration;?></span>
                                    我的宣言:
                                </li>
                            </ul>
<!--                            <p>-->
<!--                                <a class="btn btn-primary btn-large" href="#">Learn more</a>-->
<!--                            </p>-->
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
</html>