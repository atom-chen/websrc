<?php
session_start();
 if($_SESSION['admin'] == 1 & $_SESSION['user'] == "admin"){

 }
 else{

    header("location: login.php");
    exit;
 }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>手游烈焰遮天GM后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.php">首页</a></li>
                <li><a href="#" target="_blank">网站前台</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li>当前登录用户：<?php echo $_SESSION['user'];?></li>
                <li><a href="action.php?action=logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
