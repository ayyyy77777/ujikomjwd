<?php
// Kode untuk menghubungkan ke basis data
include_once("connection.php");

// Jika ada data yang dikirimkan melalui metode POST, lanjutkan.
if($_POST){
    // Memeriksa apakah ada berkas yang diunggah.
    $file_upload = $_FILES['berkas'];
    // Jika nama berkas tidak kosong, maka dapat diproses.
    if ($file_upload['name'] != ""){
        // Mengambil data dari formulir yang dikirimkan.
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $semester = $_POST['semester'];
        $ipk = $_POST['ipk'];
        $beasiswa = $_POST["beasiswa"];
        $berkas = $file_upload['name'];
         // Menetapkan status awal.
        $status = 'belum diverifikasi';
        

        //Perintah SQL untuk upload 
        $result = mysqli_query($conn, "INSERT INTO pendaftar(nama, email, hp, semester, ipk, 
        beasiswa, berkas, status) VALUES('$nama', '$email', '$hp', '$semester', '$ipk', 
        '$beasiswa', '$berkas', '$status')");


// Memindahkan berkas yang diunggah dari lokasi sementara (tmp_name) ke direktori "/uploads/" dengan nama berkas yang sama.
move_uploaded_file($file_upload['tmp_name'], __DIR__ . "/uploads/" . $berkas);

// Mengarahkan pengguna kembali ke halaman "index.php?link_page=3" setelah proses unggahan dan pemrosesan data selesai.
header("Location: index.php?link_page=3");

    }
}