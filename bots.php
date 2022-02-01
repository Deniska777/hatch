<?php
require("inc/bd.php");
$bots_active = 1;
session_start();
$sid = $_SESSION['hash'];
$allbots = "SELECT COUNT(*) FROM kot_bots";
$result_bots = mysql_query($allbots);
$row = mysql_fetch_array($result_bots);
if($row)
{	
$bots = $row['COUNT(*)'];
}
if($bots_active == 1) {
if($bots >= 1) {
$randbot = rand(1, $bots); // выбор бота

$select_info_bot = "SELECT * FROM kot_bots WHERE id = '$randbot'";
$result_select_bots = mysql_query($select_info_bot);
$row = mysql_fetch_array($result_select_bots);
if($row)
{
$active = $row['status'];
$logbot = $row['bot_login'];
$bot_min = $row['bot_min_bet'];
$bot_max = $row['bot_max_bet'];
}
if($active == 1) {
$game = rand(1, 4);    
    
if($game == 1){
$rand_bot_bet = rand($bot_min, $bot_max); // ставка бота
$rand_bot_per = rand(1, 95); // шанс на выигрыш бота
$rand_bot_number = rand(0, 999999);
$rand_bot_sum = round(((100 / $rand_bot_per) * $rand_bot_bet), 2);
$rand_bot_type = array('min', 'max'); // м или б
$rand_bot_type_select = rand(0, 1);
if($rand_bot_type_select == 0) {
$rand_bot_win_num = $rand_bot_per * 10000;
if($rand_bot_number > $rand_bot_win_num) {
  $rand_bot_type_game = "lose"; // бот проиграл
  $rand_bot_sum = 0;
  $rand_bot_cel = "0 - $rand_bot_win_num";
  $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', '$rand_bot_type_game', '$rand_bot_sum');";
  mysql_query($bot);
  }
  if($rand_bot_number < $rand_bot_win_num) { // если бот выиграл
  $rand_bot_type_game = "win"; // бот выиграл
  $rand_bot_sum = round(((100 / $rand_bot_per) * $rand_bot_bet), 2);
  $rand_bot_cel = "0 - $rand_bot_win_num";
  $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', '$rand_bot_type_game', '$rand_bot_sum');";
  mysql_query($bot);
  }
}
 // если бот ставит на больше 
if($rand_bot_type_select == 1) {
$rand_bot_win_num = 1000000 - ($rand_bot_per * 10000);
if($rand_bot_number < $rand_bot_win_num) {
  $rand_bot_type_game = "lose"; // бот проиграл
  $rand_bot_sum = 0;
  $rand_bot_cel = "$rand_bot_win_num - 999999";
  $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', '$rand_bot_type_game', '$rand_bot_sum');";
  mysql_query($bot);
  }
  if($rand_bot_number > $rand_bot_win_num) { // бот выиграл
  $rand_bot_type_game = "win"; // бот выиграл
  $rand_bot_sum = round(((100 / $rand_bot_per) * $rand_bot_bet), 2);
  $rand_bot_cel = "$rand_bot_win_num - 999999";
  $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', '$rand_bot_type_game', '$rand_bot_sum');";
  mysql_query($bot);
  }
}
}

if($game == 2){
    $rand_bot_bet = rand($bot_min, $bot_max); // ставка бота
    $win_r = rand(0, 3);
        if($win_r == 0){
            	$bombs = [
	[],
	[],
	[1.09,1.19,1.3,1.43,1.58,1.75,1.96,2.21,2.5,2.86,3.3,3.85,4.55,5.45,6.67,8.33,10.71,14.29,20,30,50,100,300],
	[1.14,1.3,1.49,1.73,2.02,2.37,2.82,3.38,4.11,5.05,6.32,8.04,10.45,13.94,19.17,27.38,41.07,65.71,115,230,575,2300],
	[1.19,1.43,1.73,2.11,2.61,3.26,4.13,5.32,6.95,9.27,12.64,17.69,25.56,38.33,60.24,100.4,180.71,361.43,843.33,2530,12650],
	[1.25,1.58,2.02,2.61,3.43,4.57,6.2,8.59,12.16,17.69,26.54,41.28,67.08,115,210.83,421.67,948.75,2530,8855,53130],
	[1.32,1.75,2.37,3.26,4.57,6.53,9.54,14.31,22.12,35.38,58.97,103.21,191.67,383.33,843.33,2108.33],
	[1.39,1.96,2.82,4.13,6.2,9.54,15.1,24.72,42.02,74.7,140.06,280.13,606.94,1456.67,4005.83,13352.78],
	[1.47,2.21,3.38,5.32,8.59,14.31,24.72,44.49,84.04,168.08,360.16,840.38,2185,6555,24035,120175,1081575],
	[1.56,2.5,4.11,6.95,12.16,22.12,42.02,84.04,178.58,408.19,1020.47,2857.31,9286.25,37145,204297.5,2042975],
	[1.67,2.86,5.05,9.27,17.69,35.38,74.7,168.08,408.19,1088.5,3265.49,11429.23,49526.67,297160,3268760],
	[1.79,3.3,6.32,12.64,26.54,58.97,140.06,360.16,1020.47,3265.49,12245.6,57146.15,371450,4457400],
	[1.92,3.85,8.04,17.69,41.28,103.21,280.13,840.38,2857.31,11429.23,57146.15,400023.08,5200300],
	[2.08,4.55,10.45,25.56,67.08,191.67,606.94,2185,9286.25,49526.67,371450,5200300],
	[2.27,5.45,13.94,38.33,115,383.33,1456.67,6555,37145,297160,4457400],
	[2.5,6.67,19.17,60.24,210.83,843.33,4005.83,24035,204297.5,3268760],
	[2.78,8.33,27.38,100.4,421.67,2108.33,13352.78,120175,2042975],
	[3.13,10.71,41.07,180.71,948.75,6325,60087.5,1081575],
	[3.57,14.29,65.71,361.43,2530,25300,480700],
	[4.17,20,115,843.33,8855,177100],
	[5,30,230,2530,53130],
	[6.25,50,575,12650],
	[8.33,100,2300],
	[12.5,300],
	[25]
	];
	
	
	$col = rand(2, 15);
	$x = rand(0, 10);
	$coef = $bombs[$col][$x];
	
	$rand_bot_sum = $rand_bot_bet * $coef;
	$bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', 'win', '$rand_bot_sum');";
  mysql_query($bot);
        }else{
            $rand_bot_sum = 0;
           $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', 'lose', '$rand_bot_sum');";
  mysql_query($bot); 
        
        }
}
if($game == 3){
    $ww = [2,3,5,50];
    $r = rand(1,3);
    $win = $ww[$r];
    $w = rand(1,2);
     $rand_bot_bet = rand($bot_min, $bot_max); // ставка бота
    if ($w == 1){
        $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', 'lose', '0');";
  mysql_query($bot); 
        
    }else{
        $rand_bot_sum = $win * $rand_bot_bet; 
        $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', 'win', '$rand_bot_sum');";
  mysql_query($bot);
    }
}

if($game == 4){
    $rand_bot_bet = rand($bot_min, $bot_max); // ставка бота
    $kolvo = rand(0, 10);
    $rand_bot_sum = $rand_bot_bet * $kolvo * 1.9;
    if ($kolvo == 0){
        $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', 'lose', '0');";
  mysql_query($bot); 
    }else{
    $bot = "INSERT INTO `kot_games` (`game`, `user_id`, `login`, `number`, `cel`, `sum`, `chance`, `type`, `win_summa`) VALUES ($game, '1', '$logbot', '$rand_bot_number', '$rand_bot_cel', '$rand_bot_bet', '$rand_bot_per', 'win', '$rand_bot_sum');";
  mysql_query($bot);
    }
}

}
}
}
?>