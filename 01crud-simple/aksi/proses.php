<?php 
// koneksikan ke database
include "../connection/koneksi.php";

if (isset($_POST["aksi"])){
    if($_POST["aksi"] == "add"){
        $judul = $_POST["judul"];
        $nama = $_POST["nama"];
        $artikel = $_POST["artikel"];
        $gambar = $_FILES["gambar"]["name"];

        $dir = "../image/";
        $tmpFile = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$gambar);
        
        // memasukan data yang di masukan dari kelola.php yang memiliki form method post
        $query = "INSERT INTO crud_very_simple VALUES(null, '$judul', '$nama', '$artikel', '$gambar')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: ../index.php");
        } else {
            echo $query;
        }
    } else if ($_POST["aksi"] == "edit"){
            echo "Edit Data <a href='../index.php'>[HOME]</a>";
    }
}

if(isset($_GET["hapus"])){
    $id = $_GET["hapus"];

    $queryShow = "SELECT * FROM crud_very_simple WHERE id = '$id';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);
    unlink("../image/".$result['gambar']);

    $query = "DELETE FROM crud_very_simple WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: ../index.php");
    } else {
        echo $query;
    }
}




?>