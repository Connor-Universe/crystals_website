<?php 

 $connect = mysqli_connect("localhost","root","","assets2");
 #$connect = mysqli_connect("sql107.epizy.com","epiz_27807816","b1ir3rccPjs","epiz_27807816_asset");
 $get_settings1 = "select * from settings";
$run_settings1 = mysqli_query($connect,$get_settings1);
$row_settings1 = mysqli_fetch_array($run_settings1);
$email_admin1 = $row_settings1['email'];
$password_admin1 = $row_settings1['password'];
$chat = $row_settings1['smartupps'];
$site_name3 = $row_settings1['site_name'];
$location123 = $row_settings1['location2'];
$get_settings2 = "select * from referal_settings";
$run_settings2 = mysqli_query($connect,$get_settings2);
$row_settings2 = mysqli_fetch_array($run_settings2);
$program_settings = $row_settings2['referal_program'];
$amount_settings = $row_settings2['referal_amount'];
$show_settings = $row_settings2['referal_show'];
$force_settings = $row_settings2['referal_force'];
?>