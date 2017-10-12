<?php

$playerName = $_POST['playerName'];
$cmdstr = $_POST['cmdstr'];
$HttpCommunicationKey = "ABC123";
$sign = strtoupper(md5($playerName .$cmdstr . $HttpCommunicationKey));
echo $sign;
?>
