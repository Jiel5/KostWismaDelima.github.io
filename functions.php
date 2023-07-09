<?php 

$conn = mysqli_connect("localhost","root","","wismadelima");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function registrasi($data){
    global $conn;
    // ambil data 
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    // cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");
    
    if( mysqli_fetch_assoc($result) ){
        return -1;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users
        VALUES 
        ('','$username','$email','$password','$name','$photo');
    ");

    return mysqli_affected_rows($conn);

}

function tambah($data) {
    global $conn;
    // menangkap data yang di kirim dari form
    $email = addslashes($_POST['email']);
    $pertanyaan = addslashes($_POST['pertanyaan']);


    // menginput data ke database
    mysqli_query($conn,"insert into pengunjung values('', '$email', '$pertanyaan')");

    return mysqli_affected_rows($conn);
}

function hapus($data) {
    global $conn;

    $id = $data;

    // menghapus data dari database
    mysqli_query($conn, "delete from pengunjung where id='$id'");

    return mysqli_affected_rows($conn);
}

?>
