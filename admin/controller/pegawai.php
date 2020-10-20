<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/pegawai/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['id_pegawai'])){
                $err['id_pegawai']="Id pegawai Wajib";
            }
            if(empty($_POST['nama_pegawai'])){
                $err['nama_pegawai']="wajib diisi";
            }
            if(empty($_POST['tanggal_lahir'])){
                $err['tanggal_lahir']="wajib diisi";
            }
            if(empty($_POST['tempat_lahir'])){
                $err['tempat_lahir']="wajib diisi";
            }
            if(empty($_POST['jenis_kelamin'])){
                $err['jenis_kelamin']="wajib diisi";
            }
            if(empty($_POST['alamat'])){
                $err['alamat']="wajib diisi";
            }
            if(empty($_POST['no_tlp'])){
                $err['no_tlp']="wajib diisi";
            }
            if(!isset($err)){
            $sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, tanggal_lahir, tempat_lahir, jenis_kelamin, alamat, no_tlp ) 
            VALUES ('$_POST[id_pegawai]', '$_POST[nama_pegawai]', '$_POST[tanggal_lahir]', '$_POST[tempat_lahir]', '$_POST[jenis_kelamin]'), '$_POST[alamat]', '$_POST[no_tlp]'";
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/perpustakaan/admin/?mode=pegawai');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $pegawai ="select * from pegawai where md5(id_pegawai)='$_GET[id]'";
        $pegawai=$conn->query($pegawai);
        $_POST=$pegawai->fetch_assoc();
        $content="views/pegawai/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $pegawai ="delete from pegawai where md5(id_pegawai)='$_GET[id]'";
        $pegawai=$conn->query($pegawai);
        header('Location: http://localhost:8080/perpustakaan/admin/?mode=pegawai');
    break;
    default:
    $sql = "select * from pegawai";
    $pegawai=$conn->query($sql);
    $conn->close();
    $content="views/pegawai/tampil.php";
    include_once "views/template.php";
}
?>