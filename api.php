<?php
//q
//q
//q
//q
$web_server =[
    '192.168.85.139',
    '192.168.85.167'
];
//$cmd = "cd / && ls -l";
//$res = shell_exec($cmd);
//echo $res;echo '<hr>';
foreach($web_server as $k=>$v){
    $cmd = 'ssh'.$v.'"cd /data/wwwroot/default/shop/api; git pull" ';
	echo $cmd;echo '</br>';
	$res = shell_exec($cmd);
	echo $res;echo'<hr>';
}

?>
