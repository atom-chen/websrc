<?php
include "top.php";
include "config.php";
?>

<div class="container clearfix">
    <?php 
	 include "memu.php"
	?>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">角色管理管理</span></div>
        </div>

        <div class="result-wrap">

                <div class="result-title">
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>账号名</th>
                            <th>角色ID</th>
                            <th>角色名</th>
                            <th>等级</th>
                            <th>操作</th>
                        </tr>
                        <?php 
                            $conn = mysql_connect($config["DB_HOST"],$config["DB_USER"],$config["DB_PWD"]);
                            mysql_query("set names 'utf8'");
                            if(!$conn){
                                die("连接数据库失败，请配置好config.php文件！！！");
                            }
                            $db_select = mysql_select_db($config["DB_NAME"]);
                            if(!$db_select){
                                die("连接数据库".$config["DB_NAME"]."失败！请填写好数据库名~~~~");
                            }
                            $sql = "select * from player order by level desc";
                            $result = mysql_query($sql,$conn);
                            while($row = mysql_fetch_array($result))
 
                                {
 
                         ?>

                        <tr>
                            <td id="identityId" name="identityName"><?php echo $row['identityName'];?></td>
                            <td id="id" name="id"><?php echo $row['id'];?></td>
                            <td id="name" name="name"><?php echo $row['name'];?></td>
                            <td id="level" name="level"><?php echo $row['level'];?></td>
                            <td>
                                <a class="link-update" href="chongzhiGM.php?identityName=<?php echo $row['identityName'];?>&name=<?php echo $row['name'];?>">充值</a>
                                <a class="link-update" href="mail.php?name=<?php echo $row['name'];?>">邮件</a>
                                <a class="link-del" href="gm.php?name=<?php echo $row['name'];?>">管理</a>
                            </td>
                        </tr> 
                         <?php
                                }
                        ?>
                    </table>
                    <div class="list-page"> 1/1 页</div>
                </div>

        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>