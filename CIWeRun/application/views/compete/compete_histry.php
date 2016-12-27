<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动</title>
    <?php require_once "com_headbar.php" ?>

    <link href="<?php echo base_url('/CSS/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('/CSS/act.css')?>" rel="stylesheet">
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
            <!--<h3>你的健康小助手</h3>-->
            <!--<div class="blank"></div>-->
            <ul class="nav nav-tabs">
                <li role="tab" class>
                    <a href="http://localhost/CIWeRun/index.php/compete/getfromMyCom" >我的竞赛</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/compete/getMyCom" >正在参加</a>
                </li>
                <li role="presentation" class>
                    <a href="http://localhost/CIWeRun/index.php/compete/getallCom" >全部竞赛</a>
                </li>
                <li role="presentation" class="activity_active">
                    <a href="#" >历史竞赛</a>
                </li>

            </ul>
        </div>
        <div class="aty_send">
            <div>
                <h2>我要发布竞赛</h2>
                <!-- 按钮触发模态框 -->
                <button class="btn btn-primary btn-lg aty_send_btn" data-toggle="modal" data-target="#myModal">
                    发布竞赛
                </button>
                <!-- 模态框（Modal） -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h3 class="modal-title" id="myModalLabel">
                                    发布你想要发布的竞赛吧~~~
                                </h3>
                            </div>
                            <div class="modal-body">
                                <!--在这里添加一些文本-->
                                <div class="aty-main">
                                    <form class="bs-example bs-example-form" role="form" action="activity.php">
                                        <div class="input-group ipt-aty">
                                            <span class="input-group-addon">竞赛主题</span>
                                            <input type="text" class="form-control" placeholder="main theme" id="Acttheme">
                                        </div>
                                        <div class="input-group ipt-aty">
                                            <span class="input-group-addon">竞赛时间</span>
                                            <input type="text" class="form-control" placeholder="time" id="Acttime">
                                        </div>
                                        <div class="input-group ipt-aty">
                                            <span class="input-group-addon">竞赛地点</span>
                                            <input type="text" class="form-control" placeholder="place" id="Actposition">
                                        </div>
                                        <div class="input-group ipt-aty ipt-aty-area">
                                            <!--<span class="input-group-addon">活动详细描述</span>-->
                                            <h4 class="ipt-aty-h4">竞赛详细信息描述：</h4>
                                            <textarea rows="4" cols="70" id="Actinfo"></textarea>
                                            <!--<textarea class="form-control" rows="3" cols="70"></textarea>-->
                                        </div>
                                        <!--<label>活动详细描述</label>-->
                                        <!--<textarea rows="1" cols="40"></textarea>-->
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                </button>
                                <button type="submit" class="btn btn-primary" id="btn_sub_Act">
                                    提交更改
                                </button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>
    </aside>

    <!--主要内容-->
    <!--我的运动-->
    <?php foreach ($allAct as $act):
    $act_name = $act['com_name'];
    $man = $act['man'];
    $time = $act['time'];
    $position = $act['position'];
    $num = $act['num'];
    $info = $act['info'];

    ?>
    <div class="tab-pane fade active in" id="my_aty">
        <div class="an_act ">
            <h2>竞赛主题:<span><?php echo $act_name; ?></h2>
            <div class="man">
                <span>发起人:<?php echo $man;?></span>
            </div>
            <div class="time">
                <span >时间:<?php echo $time;?></span>
            </div>
            <div class="place">
                <span>地点:<?php echo $position;?></span>
            </div>
            <div class="man_in">
                <span>参加人数:<?php echo $num;?></span>
            </div>
            <div class="btn-group btn-group-lg aty-btn">
                <!--<button type="button" class="btn btn-default">参加</button>-->
                <!--<button type="button" class="btn btn-default">退出</button>-->
                <button type="button" class="btn btn-default">删除竞赛</button>
            </div>
            <div class="detail">
                <span>详细信息：</span>
                <p><?php echo $info;?></p>
            </div>
        </div>
    </div>
    <?php endforeach;?>


    <!--右边栏-->

</div>

</body>
<script src="<?php echo base_url('/JS/sidebar.js')?>"></script>
<script>
    $("#btn_sub_Act").click(function(){
        var url = "http://localhost/CIWeRun/index.php/activity/newAct";
        var Theme = document.getElementById('Acttheme');
        var Time = document.getElementById('Acttime');
        var Position  = document.getElementById('Actposition');
        var Info = document.getElementById('Actinfo');
//        var textarea = document.getElementById("moments_text");
//        var info = textarea.value;
        $.ajax({
            url : url,
            type : "POST",
            dataType : "text",
            data : {theme : (Theme.value),time:(Time.value),position:(Position.value),info:(Info.value)},
            success : function(Message){
                viewActivity();
//                alert(Theme.value);
            },
            error : function(){
                alert("Error");
            }
        })
    });


</script>
</html>