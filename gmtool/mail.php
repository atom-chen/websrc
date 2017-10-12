<?php
include "top.php"
?>
<script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" >
 function ajaxTest()
 {
  $.ajaxSetup({
  contentType: "application/x-www-form-urlencoded; charset=utf-8"
  });
  $.post("http://127.0.0.1/game/services?action=mail", {mailType:$("#mailType").val(),theme:$("#theme").val(),content:$("#content").val(),playerMinLevel:$("#playerMinLevel").val(),playerMaxLevel:$("#playerMaxLevel").val(),gold:$("#gold").val(),coin:$("#coin").val(),bindGold:$("#bindGold").val(),item:$("#item").val(),toPlayerType:$("#toPlayerType").val(),toPlayer:$("#toPlayer").val(),effectBeginTime:$("#effectBeginTime").val(),effectEndTime:$("#effectEndTime").val(),tstamp:$("#tstamp").val(),sign:$("#sign").val()},function(data)
  {
   alert("操作完成");
  }
  );
 }
 function base64()
 {
  $.ajaxSetup({
  contentType: "application/x-www-form-urlencoded; charset=utf-8"
  });
  $.post("base64.php", {str:$("#playerName").val()},function(data)
  {
   $("#playerName").val(data);
  }
  );
 }
</script>
<div class="container clearfix">
    <?php 
	 include "memu.php"
	?>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">邮件管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                    <table class="search-tab">
                            <tr><td></td><td><input class="common-text" value="2" name="mailType"  id="mailType" type="hidden"></td></tr>
                            <tr><td></td><td><input class="common-text" value="GM" name="theme"  id="theme" type="hidden"></tr>
                            <tr><td></td><td><input class="common-text" value="gm" name="content"  id="content" type="hidden"></td></tr>
                            <tr><td><input class="common-text" value="0" name="playerMinLevel"  id="playerMinLevel" type="hidden"></td></tr>
                            <tr><td><input class="common-text" value="0" name="playerMaxLevel"  id="playerMaxLevel" type="hidden"></td></tr>
                            <tr><td>角色名:</td><td><input class="common-text" value="<?php echo $_GET['name'];?>" name="toPlayer"  id="toPlayer" type="text"></td></tr>
                            <tr><td>元宝:</td><td><input class="common-text" value="100000" name="gold"  id="gold" type="text"></td></tr>
                             <tr><td>绑定元宝:</td><td><input class="common-text" value="100000" name="bindGold"  id="bindGold" type="text"></td></tr>
                            <tr><td>金币:</td><td><input class="common-text" value="100000" name="coin"  id="coin" type="text"></td></tr>
                            <tr><td>物品:</td><td><input class="common-text" value="" name="item"  id="item" type="text"></td></tr>
                            <tr><td><input class="common-text" value="0" name="toPlayerType"  id="toPlayerType" type="hidden"></td></tr>
                            <tr><td><input class="common-text" value="1466930808967" name="effectBeginTime"  id="effectBeginTime" type="hidden"></td></tr>
                            <tr> <td><input class="common-text" value="1466990808967" name="effectEndTime"  id="effectEndTime" type="hidden"></td></tr>
                            <tr><td></td><td><input class="common-text" value="123456789" name="tstamp"  id="tstamp" type="hidden"></td></tr>
                            <tr><td></td><td><input class="common-text" value="7B973AB0E8FB02339AC0956FB902BE5D" name="sign"  id="sign" type="hidden"></td></tr>
                            <tr><td><input class="btn btn-primary btn2" id="sub" value="发送邮件" type="button" onclick="ajaxTest()"></td></tr>
                            <tr><td  id="divMsg"> </td></tr>
                    </table>
               
            </div>
        </div>
                <div class="result-wrap">
            <div class="result-title">
                <h1>SQL发邮件（要重新登录）</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                     <li>
                        <span class="res-info">
                         邮件类型：     0是活动 1是公告 2是客服  4是拍卖<br>
                        </span>
                    </li>
                    <li>
                        <label class="res-lab">SQL语句：</label><span class="res-info"><textarea style="margin: 0px; width: 1012px; height: 92px;">INSERT INTO `mail` (`playerId`, `mailId`, `Content`, `gold`, `coin`, `item`, `isRead`, `time`, `mailType`, `bindGold`, `title`) VALUES ('0fe7172d-df18-4bc3-a28b-530d1eeec1b1', '12', '222', '33333', '11', '10085', '0', '2016', '1', '111', '11')</textarea>
</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>