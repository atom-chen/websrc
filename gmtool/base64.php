<?php
$str = $_POST['str'];
echo urlsafe_b64encode($str);

function urlsafe_b64encode($string) {
   $data = base64_encode($string);
   $data = str_replace(array('+','/','='),array('-','_',''),$data);
   return $data;
}
?>