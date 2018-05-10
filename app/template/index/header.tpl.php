<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?= $webRoot ?>/static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $webRoot ?>/static/css/style.css" rel="stylesheet">
    <script src="<?= $webRoot ?>/static/js/jquery.min.js"></script>

    <link rel="stylesheet"
          href="<?= $webRoot ?>/static/common/plugin/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css">
    <script src="<?= $webRoot ?>/static/common/plugin/ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
    <script>
        $(function () {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate(
                    {scrollTop: $(this.hash).offset().top}, 900
                );
            });
            SyntaxHighlighter.all();
        })
    </script>
</head>
<body>
<!---header---->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo "/index/index"; ?>">
                <img src="<?= $webRoot ?>/static/index/images/logo.png" width="270" height="169"
                     title="<?php TXFactory::create('systemDAO')->filter(['name' => 'site_title'])->find('value') ?>">
            </a>
        </div>
        <!--start-top-nav-->
        <div class="top-menu">
            <div class="search">
                <form action="<?php echo "search/index" ?>" method="get">
                    <input type="text" name="keywords" placeholder="输入关键词" required>
                    <input type="submit" value="">
                </form>
            </div>
            <span class="menu"></span>
            <ul>
                <li class="active"><a href="<?= 'index/index'; ?>">首页</a></li>
                <li class="active"><a href="<?php ?>">聊天室</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>

    <script>
        $("span.menu").click(function () {
            $(".top-menu ul").slideToggle("slow", function () {
            });
        });
    </script>
</div>




</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: pfjia
 * Date: 2018/5/9
 * Time: 22:19
 */