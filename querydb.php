<?php 
//konek database
$conn = mysqli_connect("localhost","root","","indah");

function query ($query){
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }
   
    return $rows;

}

function tambah($data){
    global $conn;
    $id = $data["id"];
    $judul = $data["judulBuku"];
    $penulis = $data["penulis"];
    $status = $data["status"];
    $favorit = $data["favorit"];

    //upload foto
    $foto = upload();
    if(!$foto){
        return false;
    }

    //query insert data ke database
    $query = "INSERT INTO buku () VALUES ('$id', '$judul', '$penulis', '$status', '$favorit', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload(){
    $namaFile = $_FILES['foto_buku']['name'];
    $error = $_FILES['foto_buku']['error'];
    $tmpName = $_FILES['foto_buku']['tmp_name'];

    //cek jika tidak ada gambar yang diupload (nilai 4 menandakan bahwa tidak ada gambar yg diupload)
    if($error === 4){
        echo "<script> alert('Foto Buku wajib diupload!')</script>";
        return false;

    }

    //cek apakah yang diupload gambar
    $ekstensiValid = ['png', 'jpg', 'jpeg', 'svg'];
    $ekstensiFoto = explode('.', $namaFile);
    $ekstensiFoto = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiFoto, $ekstensiValid)){
        echo "<script
                alert('Pastikan ekstensi file gambar anda png, jpg, atau jpeg!')
            </script> ";
        return false;
    }

    //generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru.= $ekstensiFoto;
    move_uploaded_file($tmpName, 'Gambar/CoverBuku/' .$namaFileBaru);

    return $namaFileBaru;
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $judul = $data["judulBuku"];
    $penulis = $data["penulis"];
    $status = $data["status"];
    $favorit = $data["favorit"];
    $fotoLama = $data["foto_lama"];

    //cek user pilih gambar baru atau tidak
    if($_FILES['foto_buku']['error'] === 4){
        $foto = $fotoLama;
    }else{
        $foto = upload();
    }

    //query ubah data
    $query = "UPDATE buku SET 
                id_buku = '$id',
                judul_buku = '$judul',
                nama_penulis = '$penulis',
                status_buku = '$status',
                is_favorite = '$favorit',
                foto_buku = '$foto'
              WHERE id_buku = '$id'
              ";
    mysqli_query($conn, $query);   

    return mysqli_affected_rows($conn);


}

function cari($keyword){
    $query = "SELECT * FROM buku WHERE judul_buku LIKE %'$keywoard'%";

    return query($query);
}

?>