<?php 
if(isset($_POST['nama'])){
    $conn=$con->koneksi();
    $email = $_POST['nama'];$psw=md5($_POST['password']);
    $sql = "SELECT* FROM data_login where nama ='$email' and password ='$psw' and status='Y'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        $sess=$user->fetch_array();
        $_SESSION['login']['id_admin']=$sess['id_admin'];
        $_SESSION['login']['nama']=$sess['nama'];
        header('Location : '.'http://localhost/perpustakaan/admin/index.php?mod=pegawai');
    }else{
        $msg="Email dan Password tidak cocok";
        include_once 'views/v_login.php';
    }
}else{
    include_once 'views/v_login.php';
}
?>