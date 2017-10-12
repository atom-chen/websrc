<?php
if (!session_id()) session_start();;
 if($_SESSION['admin'] == 1 & $_SESSION['user'] == "admin"){
 }
 else{

    header("location: login.php");
    exit;
 }
?>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="role.php"><i class="icon-font">&#xe006;</i>角色管理</a></li>
                        <li><a href="gm.php"><i class="icon-font">&#xe052;</i>GM命令</a></li>
                        <li><a href="chongzhiGM.php"><i class="icon-font">&#xe008;</i>充值管理</a></li>
                        <li><a href="mail.php"><i class="icon-font">&#xe005;</i>邮件管理</a></li>                       
                        <li><a href="account.php"><i class="icon-font">&#xe004;</i>账号管理</a></li>
                        <li><a href="javascript:alert('清空数据库即可');"><i class="icon-font">&#xe033;</i>开服清档</a></li>
                    </ul>
                </li>
            
            </ul>
        </div>
    </div>
 