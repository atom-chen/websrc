<?php
if (!session_id()) session_start();
 if($_SESSION['admin'] == 1 & $_SESSION['user'] == "admin"){

 }
 else{

    header("location: login.php");
    exit;
 }
?>
<!doctype html>
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用GM后台，开服GM的首选工具。</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="#"><i class="icon-font">&#xe001;</i>充值元宝</a>
                    <a href="#"><i class="icon-font">&#xe005;</i>发送邮件</a>
                    <a href="#"><i class="icon-font">&#xe048;</i>角色管理</a>
                    <a href="#"><i class="icon-font">&#xe041;</i>开/关服</a>
                    <a href="#"><i class="icon-font">&#xe01e;</i>数据清档</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php echo php_uname()?></span>
                    </li>
                    <li>
                        <label class="res-lab">PHP版本</label><span class="res-info"><?php echo PHP_VERSION?></span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info"><?php echo strtoupper(php_sapi_name())?></span>
                    </li>
                    <li>
                        <label class="res-lab">Web服务器</label><span class="res-info"><?php echo $_SERVER['SERVER_SOFTWARE']?></span>
                    </li>
                    <li>
                        <label class="res-lab">CPU数量</label><span class="res-info"><?php echo $_SERVER["HTTP_HOST"]?></span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info"><?php echo "20".date("y-m-d h:m:s")?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info"><?php echo $_SERVER["HTTP_HOST"]?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器语言</label><span class="res-info"><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                     <li><label class="res-lab">Api接口:</label><br>
                         <span class="res-info">
                         http://127.0.0.1/game/services?action=pay|mail<br>|playerChangeState|componentSwitch|reward|activity|playerChangeProperty|giftsCard|shutDown|notice|playerInfo|scrollNotice|<br>
                         http://127.0.0.1/game/login   管理员 test<br>
                         登录游戏：?action=login&fid=" + properties.getProperty("newbee.morningGlory.http.HttpService.serverId") + "&playerName=" + 
      playerName + "&identityName=" + identityName + "&lastLoginTime=" + lastLoginTime;<br>
                        创建角色："?action=create&fid=" + properties.getProperty("newbee.morningGlory.http.HttpService.serverId") + "&playerName=" + 
      playerName + "&identityName=" + identityName + "&birthday=" + birthday;
                        </span>
                    </li>
                    <li>
                        <label class="res-lab">BY：</label><span class="res-info">烈焰遮天</span>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->