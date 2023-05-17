<?php 
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "penjadwalan_mk";

$conn = new mysqli('localhost', 'root', '', 'penjadwalan_mk');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memastikan form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah inputan nama, nip, dan jabatan ada
    if (isset($_POST['nama']) && isset($_POST['nip']) && isset($_POST['jabatan'])) {
        // Ambil data dari form
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$jenis_kelamin = $_POST['jenis_kelamin'];

		// Query untuk menyimpan data dosen
		$sql = "INSERT INTO dosen (id, nama, password, email, jenis_kelamin) VALUES ('$id', '$nama', '$password', '$email', '$jenis_kelamin')";

		if ($conn->query($sql) === TRUE) {
			echo "Data dosen berhasil disimpan.";
		} else {
			echo "Terjadi kesalahan: " . $conn->error;
		}
    } 
}

?>


