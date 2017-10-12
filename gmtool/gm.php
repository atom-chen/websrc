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
  $.post("http://127.0.0.1/game/services?action=playerChangeProperty", {playerName:$("#playerName").val(),cmdstr:$("#cmdstr").val(),sign:$("#sign").val()},function(data)
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

 function getsign()
 {
  $.ajaxSetup({
  contentType: "application/x-www-form-urlencoded; charset=utf-8"
  });
  $.post("./GM/cmdSign.php", {playerName:$("#playerName").val(),cmdstr:$("#cmdstr").val()},function(data)
  {
   $("#sign").val(data);
  }
  );
 }

 function getitem()
 {
   $("#cmdstr").val("addItem "+$("#item").val()+" 1");
   getsign();
 }

function gongneng()
 {
   $("#cmdstr").val($("#gn").val());
   getsign();
 }
</script>
<div class="container clearfix">
    <?php 
	 include "memu.php"
	?>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">GM管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                    <table class="search-tab">
                            <tr><td>角色名称:<input class="common-text" value="<?php echo $_GET['name'];?>" name="playerName"  id="playerName"  type="text"></td></tr>
                            <tr><td>
                            CMD:<input class="common-text" value="addItem equip_100_2110 1" name="cmdstr"  size="40" id="cmdstr" type="text" style="background-color: #000;color: #0f0;">

                            <select name="item" id="item" onchange="getitem()"> 
                            <option value=''>选择发送的装备</option>
  <?php 
  header('Content-Type:text/html; charset=utf-8');
     $filename = "./equipItem.json";
     $json_string = file_get_contents($filename);
   
     $obj=json_decode($json_string,true);
     if (!is_array($obj)) die('no successful');
     //var_dump($obj);
   foreach($obj as $key){
    echo '<option value="'.$key['property']["iconId"].'">'.$key['property']["name"].' ( level:'.$key['property']["equipLevel"].' )'.'</option>';
   }
   
   $filename = "./propsItem.json";
     $json_string = file_get_contents($filename);

     $obj=json_decode($json_string,true);
     if (!is_array($obj)) die('no successful');
     //var_dump($obj);
   foreach($obj as $key){
    echo '<option value="'.$key['property']["iconId"].'">'.$key['property']["name"].'</option>';
   }
    ?>
                        </select>
                        <select name="gn" id="gn" onchange="gongneng()">
                        <option value=''>选择功能</option>
                        <option value='chongzhi 1000'>充值</option>
                        <option value='changelevel 50'>修改等级</option>
                        <option value='dropItem itemRefId number'>掉落物品</option>
                        <option value='applyplayeratt 1 5000'>修改玩家战斗属性</option>
                        <option value='addExp 1000'>加经验</option>
                        <option value='mbt 1 1'>遮天基金减少天数</option>
                        <option value='addItem equip_100_2110 10'>加物品</option>
                        <option value='addAuction equip_100_2110 10 100'>加拍卖物品</option>
                        <option value='addMoney 1000 1000 1000'>加元宝金币</option>
                        <option value='addMerit 1000'>加功勋</option>
                        <option value='addAchieve 1000'>加成就</option>
                        <option value='addState buff_State_1'>加状态</option>
                        <option value='acceptQuest quest_10'>修改当前主线任务</option>
                        <option value='questCourse monster_1 1'>完成主线任务杀怪</option>
                        <option value='completeQuest'>完成当前主线任务</option>
                        <option value='openslot 10'>解锁背包格子</option>
                        <option value='upvip 1'>升级VIP等级</option>
                        <option value='sortboard 1'>更新排行榜数据</option>
                        <option value='switch S036 100 100'>飞图</option>
                        <option value='kingCity hello'>设置王城工会</option>
                        <option value='kingCityCreater'>变成王城工会会长</option>
                        <option value='deleteKingCity'>从王城工会变成普通工会</option>
                        <option value='clearUnionSignupList'>清空攻城工会列表</option>
                        <option value='castleWarPerStart'>攻城预开始</option>
                        <option value='castleWarStart'>攻城开始</option>
                        <option value='castleWarEnd'>攻城结束</option>
                        <option value='teamBossPerStart 地图ID'>组队BOSS预开始</option>
                        <option value='teamBossStart 地图ID'>组队BOSS开始</option>
                        <option value='teamBossEnd 地图ID'>组队BOSS结束</option>
                        <option value='miningStart'>挖矿活动开始</option>
                        <option value='miningEnd'>挖矿活动结束</option>
                        <option value='monsterIntrusionStart'>怪物入侵活动开始</option>
                        <option value='monsterIntrusionEnd'>怪物入侵活动结束</option>
                        <option value='dailyQusetRing quest_daily_1 4'>修改指定日常任务环数</option>
                        <option value=' clearInstanceRecord Ins_1 1'>修改副本次数</option>
                        <option value='pluck pluckId'>完成采集</option>
                        <option value='applyPlayerState 1'>修改玩家到指定状态 </option>
                        <option value='addHp 1000'>加血</option>
                        <option value='addMp 1000'>加蓝</option>
                        </select>

                            </td></tr>
                            <tr><td>sign:<input class="common-text" value="" name="sign" size="45" id="sign" type="test"></td></tr>
                            <tr>
                            <td><span><input class="btn btn-primary btn2" id="sub" value="修改后生成SIGN" type="button" onclick="getsign()"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><input class="btn btn-primary btn2" id="sub" value="执行" type="button" onclick="ajaxTest()"></span></td>
                            </tr>   
                    </table>
               <div  id="divMsg"> </div>
            </div>
        </div>
                       <div class="result-wrap">
            <div class="result-title">
                <h1>GM命令（可以做任何事）</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                     <li>
                        <span class="res-info">
                        
                        </span>
                    </li>
                    <li>
                        <label class="res-lab">命令列表：</label><span class="res-info">
                        
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