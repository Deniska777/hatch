<?
session_start();
$refid = $_SESSION['ref'];
require("inc/site_config.php");

$client_id = "7688313"; // ID приложения
$client_secret = "8CYUfQmjvdlDOR8cDgGB"; // Защищённый ключ
$redirect_uri = "https://".$_SERVER['SERVER_NAME']."/auth.php"; // Адрес сайта
$url = 'http://oauth.vk.com/authorize';


if (isset($_GET['code'])) {

    $result = true;
    $params = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
    ];

    $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

    if (isset($token['access_token'])) {
        $params = [
            'uids' => $token['user_id'],
            'fields' => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            'access_token' => $token['access_token'],
            'v' => '5.101'];

        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['response'][0]['id'])) {
            $userInfo = $userInfo['response'][0];
            $result = true;
        }
    }
// инфа о пользователе

    $vk_id_s = $userInfo['id'];
    $fname = $userInfo['first_name'];
    $last_name = $userInfo['last_name'];
    $name = "$fname $last_name";
    $ava = $userInfo['photo_big'];
    $hashq = "http://vk.com/id$vk_id_s";
// получили инфу о пользователе, пользователь имеется в бд
//$network = $user['network'];



$sql_select2 = "SELECT COUNT(*) FROM  kot_user WHERE social='$hashq'";
$result2 = mysql_query($sql_select2);
$row = mysql_fetch_array($result2);
if($row)
{	
$logc = $row['COUNT(*)'];
}
    
        if($logc == 0) {
        if($hashq != '') {
//          $datas = date("d.m.Y");
// 	$datass = date("H:i:s");
// 	$data = "$datas $datass";
	      
// 	      	$client  = @$_SERVER['HTTP_CLIENT_IP'];
// 			$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
// 			$remote  = @$_SERVER['REMOTE_ADDR'];
			 
// 			if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
// 			elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
// 			else $ip = $remote;
        
//           $chars3="qazxswedcvfrtgnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
// $max3=32; 
// $size3=StrLen($chars3)-1; 
// $passwords3=null; 
// while($max3--) 
// $hash.=$chars3[rand(32,$size3)];


//           $passgen = rand(100,1000) * rand(1,100) * rand(1,100) * 100;
//             $_SESSION['login'] = 1;
// 			$insert_sql1 = "INSERT INTO `kot_user` (`id`,`login`,`vk_id`, `balance`, `img`, `hash`, `social`, `ip`, `ref_id`, `date_reg`) 
// 	VALUES ('NULL','$name', '$vk_id_s','$bonus_reg', '$ava', '$hash', '$hashq', '$ip', '$refid', '$data');";
// mysql_query($insert_sql1);

// $sql_select22 = "SELECT * FROM  kot_user WHERE id ='$refid'";
// $result22 = mysql_query($sql_select22);
// $row2 = mysql_fetch_array($result22);
// if($row2)
// {	
// $balance = $row2['balance'];
// }

// mysql_query("UPDATE  kot_user set balance= $balance + 1 where id='$refid'");
// 			$_SESSION['hash'] = $hash;
// 			$_SESSION['login'] = 1;
			$home_url = 'http://'.$_SERVER['HTTP_HOST'] .'/';
            header('Location: ' . $home_url);
    
        }
        }
       if($logc == 1) {
         if($hashq != '') {
         $selecter = "SELECT * FROM  kot_user WHERE social = '$hashq'";
         $result3 = mysql_query($selecter);
         $row1 = mysql_fetch_array($result3);
		 if($row1)
		{	
$admin = $row1['admin'];
		    $qiwi = $row1['qiwi'];
		$hashlog = $row1['hash'];
         
		}
		
	


		 	$client  = @$_SERVER['HTTP_CLIENT_IP'];
			$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
			$remote  = @$_SERVER['REMOTE_ADDR'];
			 
			if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
			elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
			else $ip = $remote;
        
         mysql_query("UPDATE  kot_user SET ip = '$ip' WHERE hash = '$hashq'");
          mysql_query("UPDATE  kot_user SET vk_id = '$vk_id_s' WHERE hash = '$hashq'");
        
          $_SESSION['hash'] = $hashlog;
           $_SESSION['login'] = 1;
          $home_url = 'http://'.$_SERVER['HTTP_HOST'] .'/';
            header('Location: ' . $home_url);
       }
       }



      
}
?>