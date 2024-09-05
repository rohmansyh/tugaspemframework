<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "tugas_framework";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$nim = $_POST['nim'];
$class = $_POST['class'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$message = $_POST['message'];

// Simpan data ke tabel hubungi
$sql = "INSERT INTO hubungi (nama, nim, class, gender, email, pesan) 
        VALUES ('$name', '$nim', '$class', '$gender', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br>Gender: " . $gender; // Tampilkan gender untuk memastikan nilainya
}



// Tutup koneksi
$conn->close();
?>