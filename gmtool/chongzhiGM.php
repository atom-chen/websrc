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
  $.post("http://127.0.0.1/game/services?action=pay", {identityName:$("#identityName").val(),playerName:$("#playerName").val(),gameGold:$("#gameGold").val(),payMoney:$("#payMoney").val(),payTime:$("#payTime").val(),refId:$("#refId").val(),sign:$("#sign").val()},function(data)
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

 function Pay()
 {
  $.ajaxSetup({
  contentType: "application/x-www-form-urlencoded; charset=utf-8"
  });
  $.post("./GM/paySign.php", {identityName:$("#identityName").val(),playerName:$("#playerName").val(),gameGold:$("#gameGold").val(),payMoney:$("#payMoney").val()},function(data)
  {
   $("#sign").val(data);
   base64();
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">充值管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                    <table class="search-tab">
                            <tr><td>账号名称:<input class="common-text" value="<?php echo $_GET['identityName'];?>" name="identityName"  id="identityName" type="text"></td></tr>
                            <tr><td>角色名称:<input class="common-text" value="<?php echo $_GET['name'];?>" name="playerName"  id="playerName"  type="text"></td></tr>
                            <tr><td>游戏元宝:<input class="common-text" value="10000" name="gameGold"  id="gameGold" type="text"></td></tr>
                            <tr><td><input class="common-text" value="100" name="payMoney"  id="payMoney"  type="hidden"></td></tr>
                            <tr><td><input class="common-text" value="1466930808967" name="payTime"  id="payTime" type="hidden"></td></tr>
                            <tr><td><input class="common-text" value="" name="refId"  id="refId" type="hidden"></td></tr>
                            <tr><td><input class="common-text" value="7B777C117AE708AACD16E76715095860" name="sign" size="50" id="sign" type="hidden"></td></tr>
                            <tr>
                            <td><input class="btn btn-primary btn2" id="sub" value="角色加密" type="button" onclick="Pay()"></td>
                            <td><input class="btn btn-primary btn2" id="sub" value="充值" type="button" onclick="ajaxTest()"></td>
                            </tr>   
                    </table>
               <div  id="divMsg"> </div>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>