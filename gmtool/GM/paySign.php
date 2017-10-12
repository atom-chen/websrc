<?php
$identityName = $_POST['identityName'];
$playerName = $_POST['playerName'];
$money = intval($_POST['payMoney']);
$gameUnBindedGold = intval($_POST['gameGold']);
$HttpCommunicationKey = "ABC123";
$sign = strtoupper(md5($identityName .$playerName . $gameUnBindedGold.$money.$HttpCommunicationKey));
echo $sign;
?>
