<?php
  session_start();
$sid = $_SESSION['hash'];
require("inc/site_config.php");
require("inc/config.php");
require("inc/bd.php");
$komissia = 0.1;
// данные игрока
 $sql_select = "SELECT * FROM kot_user WHERE hash='$sid'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if($row)
{
$login = $row['login'];
$money = $row['balance'];
$id = $row['id'];
}
//игровой массив
$query = ("SELECT * FROM `mines-game` WHERE `id_users` = '$id' AND `onOff` = '1' ORDER BY `id` DESC LIMIT 1");
$result = mysql_query($query);
$minesgame = mysql_fetch_array($result);

if($minesgame){
$mines = $minesgame['mines'];
$click = $minesgame['click'];
$step = $minesgame['step'];
$num_mines = $minesgame['num_mines'];
$bet = $minesgame['bet'];
$win = $minesgame['win'];
$resultgame = $minesgame['result'];
$onOff = $minesgame['onOff'];
$click = unserialize($click);
}else{
  $click = unserialize($click);
  $click = [];
}
if(isset($_POST['type'])){
    $query = mysql_query("UPDATE `mines-game` SET onOff = 2 WHERE onOff=1 AND id_users = '$id'");
    $type = $_POST['type'];
    $bet = $_POST['bet'];
    



 if(is_numeric($bet)) {
     $suc = 1;
 }
 if(!is_numeric($bet)) {
     $suc = 0;
 }
    $mines = $_POST['mines']; //кол-во мин
    if( $mines == 2 ||  $mines == 3||  $mines == 4 || $mines == 5  ||  $mines == 6 ||  $mines == 7||  $mines == 8 || $mines == 9  ||  $mines == 10|| $mines == 11 || $mines == 12|| $mines == 13 ||  $mines == 14||  $mines == 15|| $mines == 16 ||  $mines == 17 || $mines == 18 ||  $mines == 19|| $mines == 20 ||  $mines == 21 || $mines == 22 || $mines == 23||  $mines == 24){
    if($money >= $bet){
        
    if($bet >= "1" && $suc == 1){
    
    if($type == "mine"){
    if($_SESSION['hash']) {
 
  
      $query = ("SELECT * FROM `mines-game` WHERE `id_users` = '$id' AND `onOff` = '1' ORDER BY `id` DESC LIMIT 1");
      $minesgame = mysql_query($query);
  
      if(mysql_num_rows($minesgame) != 0){
      $result = array("info" => "false");
      }else{
        //вычитаем монету
        $newbalance = round(($money - $bet), 2);
        $query = ("UPDATE `kot_user` SET `balance` = '$newbalance' WHERE `id` = '$id'");
        mysql_query($query);
        
        $money = $money - $bet;
  
  
        $resultmines = range(1,25);
          shuffle($resultmines);
          $resultmines = array_slice($resultmines,0,$mines);
        
        $resultmines = serialize($resultmines);
  
        $sss = []; // для заполнения столбца (click)
        $sss = serialize($sss); // часть функции
        
        $query = ("INSERT INTO `mines-game` (`id_users`, `bet`, `onOff`, `step`,`result`, `win`,`mines`,`click`,`num_mines`,`login`) VALUES ('$id', '$bet', '1', '0', '1', '0','$resultmines','$sss','$mines','$login')");
        mysql_query($query);
  
        $obj = array("info"=>"true","money"=>"$money");
      }
    }else{
    $obj = array("info" => "warning","warning"=>"Авторизуйтесь");
  }
    }  
  }else{
    $obj = array("info" => "warning","warning"=>"Сумма ставки от 1");
  }
  }else{
    $obj = array("info" => "warning","warning"=>"Недостаточно средств");
  }
  }else{
    $obj = array("info" => "warning","warning"=>"Произошла ошибка");
  }
  }
  if(isset($_POST['finish'])){
    $mines = unserialize($mines);
  
      if($step != "0"){
      if($minesgame != null){
      $newbalance = round(($money + $win), 2);
      $query = ("UPDATE `kot_user` SET `balance` = '$newbalance' WHERE `id` = '$id'"); //выдаем баланс игроку за победу.
      mysql_query($query);
  
      $query = ("UPDATE `mines-game` SET `onOff` = '2' WHERE `id_users` = '$id'"); //отключаем игру.
      mysql_query($query);
  
     $tamines = json_encode($mines);

  // для работы с антиминусом
   $query = ("SELECT * FROM `kot_admin`");
   $row_admin = mysql_query($query);
   $admin = mysql_fetch_array($row_admin);
  
   $bank = $admin['bank'];
   $profit = $admin['zarabotok'];
   $win = $win - $bet;
   $query = mysql_query("UPDATE `kot_admin` SET `bank`= '$bank'-'$win'");
    
    $win = $win + $bet;
    $money = $money + $win; //для правильного отображения баланса
    $ssa = "<span class='number result-win result'><span class='myBetsBox'>".$win."</span> <i class='fas fa-coins'></i></span>"; 
    $obj = array("info"=>"true","win" => "$win","money"=>"$money","tamines"=>"$tamines","resultHistoryContentBomb"=>"$ssa");
  }else{
    $obj = array("info" => "warning","warning"=>"Игра не существует.");
  }
  }else{
    $obj = array("info" => "warning","warning"=>"Ты не нажал на поле!");
  }
  }
  //игрок нажал на клетку...
if(isset($_POST['mmine'])){

    $mmines = $_POST['mmine'];
       if($mmines != "6.66" && $mmines >= "1" && $mmines <= "25"){
 
    
    
    
    $mines = unserialize($mines);
    if($minesgame !=  null){
    

    $bombs2 = [1.09,1.19,1.3,1.43,1.58,1.75,1.96,2.21,2.5,2.86,3.3,3.85,4.55,5.45,6.67,8.33,10.71,14.29,20,30,50,100,300];
    $bombs3 = [1.14,1.3,1.49,1.73,2.02,2.37,2.82,3.38,4.11,5.05,6.32,8.04,10.45,13.94,19.17,27.38,41.07,65.71,115,230,575,2300];
    $bombs4 = [1.19,1.43,1.73,2.11,2.61,3.26,4.13,5.32,6.95,9.27,12.64,17.69,25.56,38.33,60.24,100.4,180.71,361.43,843.33,2530,12650];
    $bombs5 = [1.25,1.58,2.02,2.61,3.43,4.57,6.2,8.59,12.16,17.69,26.54,41.28,67.08,115,210.83,421.67,948.75,2530,8855,53130];
    $bombs6 = [1.32,1.75,2.37,3.26,4.57,6.53,9.54,14.31,22.12,35.38,58.97,103.21,191.67,383.33,843.33,2108.33];
    $bombs7 = [1.39,1.96,2.82,4.13,6.2,9.54,15.1,24.72,42.02,74.7,140.06,280.13,606.94,1456.67,4005.83,13352.78];
    $bombs8 = [1.47,2.21,3.38,5.32,8.59,14.31,24.72,44.49,84.04,168.08,360.16,840.38,2185,6555,24035,120175,1081575];
    $bombs9 = [1.56,2.5,4.11,6.95,12.16,22.12,42.02,84.04,178.58,408.19,1020.47,2857.31,9286.25,37145,204297.5,2042975];
    $bombs10 = [1.67,2.86,5.05,9.27,17.69,35.38,74.7,168.08,408.19,1088.5,3265.49,11429.23,49526.67,297160,3268760];
    $bombs11 = [1.79,3.3,6.32,12.64,26.54,58.97,140.06,360.16,1020.47,3265.49,12245.6,57146.15,371450,4457400];
    $bombs12 = [1.92,3.85,8.04,17.69,41.28,103.21,280.13,840.38,2857.31,11429.23,57146.15,400023.08,5200300];
    $bombs13 = [2.08,4.55,10.45,25.56,67.08,191.67,606.94,2185,9286.25,49526.67,371450,5200300];
    $bombs14 = [2.27,5.45,13.94,38.33,115,383.33,1456.67,6555,37145,297160,4457400];
    $bombs15 = [2.5,6.67,19.17,60.24,210.83,843.33,4005.83,24035,204297.5,3268760];
    $bombs16 = [2.78,8.33,27.38,100.4,421.67,2108.33,13352.78,120175,2042975];
    $bombs17 = [3.13,10.71,41.07,180.71,948.75,6325,60087.5,1081575];
    $bombs18 = [3.57,14.29,65.71,361.43,2530,25300,480700];
    $bombs19 = [4.17,20,115,843.33,8855,177100];
    $bombs20 = [5,30,230,2530,53130];
    $bombs21 = [6.25,50,575,12650];
    $bombs22 = [8.33,100,2300];
    $bombs23 = [12.5,300];
    $bombs24 = [25];
    
    // для работы с антиминусом
   $query = ("SELECT * FROM `kot_admin`");
   $row_admin = mysql_query($query);
   $admin = mysql_fetch_array($row_admin);
  
   $bank = $admin['bank'];
 

    if(in_array($mmines,$click) == false){
    

    if(in_array($mmines,$mines)){
    
       //тут есть бомба, игра проиграна
    
      
    
      $query = ("UPDATE `mines-game` SET `onOff` = '2' WHERE `id_users` = '$id'"); //отключаем игру.
      mysql_query($query);
    
        // для работы с антиминусом
   $query = ("SELECT * FROM `kot_admin`");
   $row_admin = mysql_query($query);
   $admin = mysql_fetch_array($row_admin);
  
   $bank = $admin['bank'];
   $profit = $admin['zarabotok'];
   $profit1 = $bet * $komissia;
   $bank1 = $bet * (1-$komissia);
   $query = mysql_query("UPDATE `kot_admin` SET `bank`= '$bank'+'$bank1',`zarabotok`='$profit'+'$profit1'");
  
      $tamines = json_encode($mines);

      $saad = "<span class='number result-lose result'><span class='myBetsBox'>".$bet."</span> <i class='fas fa-coins'></i></span>";
      $obj = array("info" => "click","bombs"=>"true","pressmine" => "$mmines","tamines"=>"$tamines","resultHistoryContentBomb"=>"$saad");
    
    }else{
      $query = ("SELECT * FROM `kot_admin`");
      $row_admin = mysql_query($query);
      $admin = mysql_fetch_array($row_admin);
     
      $bank = $admin['bank'];

        $win = $win - $bet;
        if(0 == 0){

       //тут нет бомбы, все четко...
    
      $query = ("UPDATE `mines-game` SET `step` = '$step' + 1 WHERE `id_users` = '$id' AND `onOff` = '1'");
      mysql_query($query);
    
      if($num_mines == "2"){
      $win = $bet * $bombs2[$step];
      }
      if($num_mines == "3"){
      $win = $bet * $bombs3[$step];
      }
if($num_mines == "4"){
      $win = $bet * $bombs4[$step];
      }
      if($num_mines == "5"){
      $win = $bet * $bombs5[$step];
      }
       if($num_mines == "6"){
      $win = $bet * $bombs6[$step];
      }
       if($num_mines == "7"){
      $win = $bet * $bombs7[$step];
      }
       if($num_mines == "8"){
      $win = $bet * $bombs8[$step];
      }
       if($num_mines == "9"){
      $win = $bet * $bombs9[$step];
      }
       if($num_mines == "10"){
      $win = $bet * $bombs10[$step];
      }
       if($num_mines == "11"){
      $win = $bet * $bombs11[$step];
      }
       if($num_mines == "12"){
      $win = $bet * $bombs12[$step];
      }
       if($num_mines == "13"){
      $win = $bet * $bombs13[$step];
      }
       if($num_mines == "14"){
      $win = $bet * $bombs14[$step];
      }
       if($num_mines == "15"){
      $win = $bet * $bombs15[$step];
      }
       if($num_mines == "16"){
      $win = $bet * $bombs16[$step];
      }
       if($num_mines == "17"){
      $win = $bet * $bombs17[$step];
      }
       if($num_mines == "18"){
      $win = $bet * $bombs18[$step];
      }
       if($num_mines == "19"){
      $win = $bet * $bombs19[$step];
      }
       if($num_mines == "20"){
      $win = $bet * $bombs20[$step];
      }
       if($num_mines == "21"){
      $win = $bet * $bombs21[$step];
      }
       if($num_mines == "22"){
      $win = $bet * $bombs22[$step];
      }
      
      if($num_mines == "23"){
      $win = $bet * $bombs23[$step];
      }
      if($num_mines == "24"){
      $win = $bet * $bombs24[$step];
      }

    
     //кол-во криссталов
      $gem_number = 24 - $num_mines - $step;
    
      $query = ("UPDATE `mines-game` SET `win` = '$win' WHERE `id_users` = '$id' AND `onOff` = '1'");
      mysql_query($query);
    
      $click[] = $mmines;
      $click = serialize($click);
    
      $query = ("UPDATE `mines-game` SET `click` = '$click' WHERE `id_users` = '$id' AND `onOff` = '1'");
      mysql_query($query);
if($num_mines == 2){
        $nextCoef = $bombs2[$step+1];
      }
      if($num_mines == 3){
        $nextCoef = $bombs3[$step+1];
      }
if($num_mines == 4){
        $nextCoef = $bombs4[$step+1];
      }
      if($num_mines == 5){
        $nextCoef = $bombs5[$step+1];
      }
        if($num_mines == 6){
        $nextCoef = $bombs6[$step+1];
      }
        if($num_mines == 7){
        $nextCoef = $bombs7[$step+1];
      }
        if($num_mines == 8){
        $nextCoef = $bombs8[$step+1];
      }
        if($num_mines == 9){
        $nextCoef = $bombs9[$step+1];
      }
        if($num_mines == 10){
        $nextCoef = $bombs10[$step+1];
      }
        if($num_mines == 11){
        $nextCoef = $bombs11[$step+1];
      }
        if($num_mines == 12){
        $nextCoef = $bombs12[$step+1];
      }
        if($num_mines == 13){
        $nextCoef = $bombs13[$step+1];
      }
        if($num_mines == 14){
        $nextCoef = $bombs14[$step+1];
      }
        if($num_mines == 15){
        $nextCoef = $bombs15[$step+1];
      }
        if($num_mines == 16){
        $nextCoef = $bombs16[$step+1];
      }
        if($num_mines == 17){
        $nextCoef = $bombs17[$step+1];
      }
        if($num_mines == 18){
        $nextCoef = $bombs18[$step+1];
      }
        if($num_mines == 19){
        $nextCoef = $bombs19[$step+1];
      }
        if($num_mines == 20){
        $nextCoef = $bombs20[$step+1];
      }
        if($num_mines == 21){
        $nextCoef = $bombs21[$step+1];
      }
        if($num_mines == 22){
        $nextCoef = $bombs22[$step+1];
      }
      
      if($num_mines == 23){
        $nextCoef = $bombs23[$step+1];
      }
      if($num_mines == 24){
        $nextCoef = $bombs24[$step+1];
      }
      $rdr = "<span class='number result-win result'><span class='myBetsBox'>".$win."</span> <i class='fas fa-coins'></i></span>";
      $obj = array("info" => "click","bombs"=>"false","pressmine" => "$mmines","win" => "$win","gem"=>"$gem_number","nextX"=>"$nextCoef","resultHistoryContentBomb"=>"$rdr");
    
    }
    }
    }else{
      $obj = array("info" => "warning","warning"=>"Вы уже нажимали на это поле.");
    }
    }else{
      $obj = array("info" => "warning","warning"=>"Нажмите начать игру.");
    }
    }else{
      $obj = array("info" => "warning","warning"=>"Произошла ошибка");
    }    
}
if(isset($_POST['live'])){
  $query = ("SELECT * FROM `mines-game` WHERE `onOff`= '2' ORDER BY `id` DESC LIMIT 10");
                        $result = mysql_query($query);
                        while(($minesHistory = mysql_fetch_array($result))){                        
                        
                        $idgameHistory = $minesHistory['id'];
                        $idusersHistory = $minesHistory['id_users'];
                        $nameHistory = $minesHistory['login'];
                        $betHistory = $minesHistory['bet'];
                        $bombsHistory = $minesHistory['num_mines'];
                        $resultHistory = $minesHistory['result'];
                        if($minesHistory['win'] != "0"){
                           $resultHistory = $minesHistory['win'];
                        }
                        if($minesHistory['win'] != 0){
						          	$color = "win";
					             	}else{
						           	$color = "lose";
						            }
						
                        $h.="
                        <tr onclick='openMines($idgameHistory)' style='cursor: pointer'>
                        <td ><i class='fas fa-user-circle'  onclick ='openProfile($idusersHistory)' style='cursor: pointer'></i> <span>".$nameHistory."</span></td>
                        <td><span>".$betHistory."</span> <i class='fas fa-coins'></i></td>
                        <td><span>".$bombsHistory."</span> <i class='mdi mdi-bomb'></i></td>
                        <td class='result-".$color."'><span>".$resultHistory."</span> <i class='fas fa-coins'></i></td>
                        </tr>";                            
                        } 
					 	            $obj = array("live"=>"$h");
                      }
                      if(isset($_POST['openMines'])){

$idMines = $_POST['idMines'];

$query = ("SELECT * FROM `mines-game` WHERE `id`='$idMines' AND `onOff`='2'");
$result4445 = mysql_query($query);
$row5554 = mysql_fetch_array($result4445);

if($row5554){


$clickOpen = $row5554['click'];								
$clickOpen = unserialize($clickOpen);
$idbetMines = $row5554['bet'];
$winminesOpen = $row5554['win'];
$loseBomb = $row5554['loseBombs'];
$loginMinesOpen = $row5554['login'];
$coefMinesOpen = $winminesOpen / $idbetMines;
$idUsersOpenMines = $row5554["id_users"];

$minesclickopen = [];

for($i=1;$i<26;$i++){
if(in_array($i,$clickOpen)){
array_push($minesclickopen,'<button class="mine win-mine openMines" data-number="'.$i.'" disabled="disabled"><i class="fas fa-gem" style="font-size: 25px;"></i></button>');
}else{
array_push($minesclickopen,'<button class="mine openMines" data-number="'.$i.'"></button>');
}		
}
}     $minesclickopen= json_encode($minesclickopen);

    $obj = array("result"=>"true","minesopen"=>"$minesclickopen","idbetMines"=>"$idbetMines","winminesOpen"=>"$winminesOpen","coefMinesOpen"=>"х$coefMinesOpen","loseBomb"=>"$loseBomb","loginMinesOpen"=>"$loginMinesOpen","idUsersOpen"=>"$idUsersOpenMines"); 

}
$dev = "Спасибо за приобретение скрипта, разработчик - Владимир Кот https://vk.com/id321223555";

echo json_encode($obj);
?>