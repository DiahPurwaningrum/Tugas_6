<?php 
include_once '../config/Config.php';
$con = new config();
if($con ->auth()){
    //panggil fungsi
    switch(@$_GET['mod']){
        case 'pegawai' :
            include_once 'controller/pegawai.php';
            break;
        default;
            include_once 'controller/pegawai.php';
    }
}else{
    //panggil login
    include_once 'controller/login.php';
}
?>
