<?


 session_start();
$sid = $_SESSION['hash'];
require("inc/site_config.php");


$a = array();
$sql_select = "SELECT * FROM kot_user WHERE hash='$sid'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if($row)
{	
    $balance = $row['balance'];
$user_id=$row['id'];
$login = $row['login'];
}
 
                       
 $select_refs = "SELECT * FROM kot_user WHERE ref_id = '$user_id'";
$result_ref = mysql_query($select_refs);
$refs = 0;
$sum_refs = 0;
while($row = mysql_fetch_array($result_ref)) {
 $refs += 1;
$id_ref = $row['id'];
 $log_ref = $row['login']; 
 $date = $row['date_reg'];
 
   $select_refss = "SELECT SUM(suma) FROM kot_payments WHERE user_id = '$id_ref'";
$depss_ref = mysql_fetch_array(mysql_query($select_refss));
$suma = $depss_ref['SUM(suma)'];
if ($suma == ''){
	$suma = 0;
}

$r = ["$id_ref","$log_ref","$date","$date","$suma"];
array_push($a, $r);
// $ttt .=  "<tr class='text-center odd' role='row'><td class='sorting_1'>$id_ref</td><td>$log_ref</td><td style='text-transform: capitalize!important;'>$date</td><td>0.00</td></tr>";

  }
                       
                    
                       
                     
$result = array(
'data' => $a,
    );
    
    
echo json_encode($result);

?>