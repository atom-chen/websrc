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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">账号管理</span></div>
        </div>

        <div class="result-wrap">

                <div class="result-title">
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>账号ID</th>
                            <th>账号名</th>
                            <th>密码</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
                        <?php 
                            $conn = mysql_connect($config["DB_HOST"],$config["DB_USER"],$config["DB_PWD"]);
                            mysql_query("set names 'utf8'");
                            if(!$conn){
                                die("连接数据库失败，请配置好config.php文件！！！");
                            }
                            $db_select = mysql_select_db($config["DB_NAME1"]);
                            if(!$db_select){
                                die("连接数据库".$config["DB_NAME1"]."失败！请填写好数据库名~~~~");
                            }
                            $sql = "select * from user order by userId asc";
                            $result = mysql_query($sql,$conn);
                            while($row = mysql_fetch_array($result))
 
                                {
 
                         ?>

                        <tr>
                            <td id="userId" name="userId"><?php echo $row['userId'];?></td>
                            <td id="userName" name="userName"><?php echo $row['userName'];?></td>
                            <td id="passWord" name="passWord"><?php echo $row['passWord'];?></td>
                            <td id="c_time" name="c_time"><?php echo date("Y-m-d H:i:s",$row['c_time']);?></td>
                            <td>
                                <a class="link-del" href="javascript:alert('这么危险的操作臣妾做不到！！');">修改密码</a>
                                <a class="link-del" href="javascript:alert('这么危险的操作臣妾做不到！！');">删除</a>
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