<?php
require("inc/bd.php");
require("inc/site_config.php");
session_start();
$sid = $_SESSION['hash'];
$sql_select = "SELECT * FROM kot_user";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
do
{
	$time = time();
	if($time > $row['online_time'])
	{
$update_sql1 = "Update kot_user set online='0' WHERE id=".$row['id'];
mysql_query($update_sql1) or die("" . mysql_error());
	}
}
while($row = mysql_fetch_array($result));
$sql_select5 = "SELECT COUNT(*) FROM kot_user WHERE online=1";
$result5 = mysql_query($sql_select5);
$row2 = mysql_fetch_array($result5);

$online = $row2['COUNT(*)'];
$sql_select = "SELECT * FROM kot_games ORDER BY `id` DESC LIMIT 15";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
do
{
 
$game1 = $row['game'];
					$g = '';
					if($game1 == 1){
						$g = '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="  "><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg>';
					}
					if($game1 == 2){
						$g = '<svg viewBox="0 0 512 512" width="18" height="18" class="iconify tx-22" xmlns="http://www.w3.org/2000/svg" style="-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)" aria-hidden="true" data-icon="ion-md-grid" data-inline="false" focusable="false" preserveAspectRatio="xMidYMid meet" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg>';
					}
					if($game1 == 3){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor" id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>';
					}
					if($game1 == 4){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-coinflip"><svg fill="currentColor" id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></svg></use></svg>';
					}
					$log = $row['login'];
					$bet = $row['sum'];
					$win = $row['win_summa'];
					$coef = $win / $bet;
					$coef = round($coef, 2);
					$type = $row['type'];
					if ($type == 'win'){
						$type = 'tx-success';
					}else{
						$type = '';
					}
					
	$game =  <<<HERE
$game
<tr>
                    <td class="text-center">$g</td>
                    <td class="text-center">$log</td>
                    <td class="text-center ">$bet</td>
                    <td class="text-center">x$coef</td>
                    <td class="text-center  tx-semibold $type">$win</td>
                </tr>

HERE;
$st = "";
$sts = "";
$login = "";
}
while($row = mysql_fetch_array($result));


$sql_select11 = "SELECT * FROM kot_games WHERE user_id='$user_id' ORDER BY `id` DESC LIMIT 15";
$result11 = mysql_query($sql_select11);
$my_game = '';
while($row = mysql_fetch_array($result11)){
    
$game1 = $row['game'];
					$g = '';
					if($game1 == 1){
						$g = '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="  "><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg>';
					}
					if($game1 == 2){
						$g = '<svg viewBox="0 0 512 512" width="18" height="18" class="iconify tx-22" xmlns="http://www.w3.org/2000/svg" style="-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)" aria-hidden="true" data-icon="ion-md-grid" data-inline="false" focusable="false" preserveAspectRatio="xMidYMid meet" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg>';
					}
					if($game1 == 3){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor" id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>';
					}
					if($game1 == 4){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-coinflip"><svg fill="currentColor" id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></svg></use></svg>';
					}
					$log = $row['login'];
					$bet = $row['sum'];
					$win = $row['win_summa'];
					$coef = $win / $bet;
					$coef =round($coef, 2);
					$type = $row['type'];
					if ($type == 'win'){
						$type = 'tx-success';
					}else{
						$type = '';
					}
    
    
    $my_game .= '<tr>
                    <td class="text-center">'.$g.'</td>
                    <td class="text-center">'.$log.'</td>
                    <td class="text-center ">'.$bet.'</td>
                    <td class="text-center">x'.$coef.'</td>
                    <td class="text-center  tx-semibold '.$type.'">'.$win.'</td>
                </tr>';
}
$time = time() + 5;
$update_sql111 = "Update kot_user set online='1', online_time='$time' WHERE hash='$sid'";
    mysql_query($update_sql111) or die("" . mysql_error());
	
	$sql_select = "SELECT COUNT(*) FROM kot_user WHERE online='1'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

$online_default = $row['COUNT(*)'];
$online = $online_default + $fake_online;

    $result = array(
	'game' => "$game",
	'my_game' => "$my_game",
    'online' => "$online"
    );
	
    echo json_encode($result);
?>