<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>登录</title>
		

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('/CSS/reset.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('/CSS/supersized.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('/CSS/sign_style.css')?>">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录</h1>
            <?php echo form_open('sign_up'); ?>
            <form action="sign_up.php" method="post">
                <input type="text" name="username" class="username" placeholder="用户名">
                <input type="password" name="password" class="password" placeholder="密码">
                <?php echo validation_errors(); ?>
                <button type="submit">登录</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p>if you don't have account:</p>
                <!-- <p>
                    <a  class="regis" href="">注册</a>
                </p> -->
                <button id="register" onclick="{location.href='http://localhost/CIWeRun/index.php/regis'}">注册</button>
            </div>
        </div>
		
        <!-- Javascript -->
        <script src="<?php echo base_url('/JS/jquery-1.8.2.min.js')?>"></script>
        <script src="<?php echo base_url('/JS/supersized.3.2.7.min.js')?>"></script>
<!--        <script src="--><?php //echo base_url('/JS/supersized-init.js')?><!--"></script>-->
        <script src="<?php echo base_url('/JS/scripts.js')?>"></script>

        <script type="text/javascript">
            jQuery(function($){

                $.supersized({

                    // Functionality
                    slide_interval     : 4000,    // Length between transitions
                    transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed   : 1000,    // Speed of transition
                    performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

                    // Size & Position
                    min_width          : 0,    // Min width allowed (in pixels)
                    min_height         : 0,    // Min height allowed (in pixels)
                    vertical_center    : 1,    // Vertically center background
                    horizontal_center  : 1,    // Horizontally center background
                    fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait       : 1,    // Portrait images will not exceed browser height
                    fit_landscape      : 0,    // Landscape images will not exceed browser width

                    // Components
                    slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides             : [    // Slideshow Images
                        {image : "<?php echo base_url('image/backgrounds/1.jpg')?>"},
                        {image : "<?php echo base_url('image/backgrounds/2.jpg')?>"},
                        {image : "<?php echo base_url('image/backgrounds/3.jpg')?>"}
                    ]

                });

            });

//            $('#register').click(function() {
//
//                $.ajax({
//                    type: "POST",
//                    url: "http://localhost/CIWeRun/index.php/regis",
//                    data: { name: "John" }
//                }).done(function( msg ) {
////                    $(this).addClass(regis);
//                    alert( "Data Saved: " + msg );
//                });
//
//            });
        </script>
    </body>

</html>


