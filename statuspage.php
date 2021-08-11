<?php
$server_settings['title'] = "server"; 
$server_settings['ip'] = "1.1.1.1";
$server_settings['port'] = "30120"; 
$server_settings['max_slots'] = 32; 


$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
	$SRV_STATUS = "<font style='color: green;'>Online</font>";
	print "<p align='center' style='color:#000000; background-color: #ffffff;'><strong>$server_settings[title]</strong></p>";
	print "<p align='center'><strong>Players:</strong> $pl_count / $server_settings[max_slots]</p>";
else:
	print "<p align='center' style='color:#000000; background-color: #ffffff;'><strong>$server_settings[title]</strong></p>";
	$SRV_STATUS = "<font style='color: red;'>Offline</font>";
endif;
print "<br/><hr/><p align='center'><strong>Status: $SRV_STATUS</strong></p></div>";
?>
