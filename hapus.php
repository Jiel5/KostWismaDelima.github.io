<?php 
require 'functions.php';

// menangkap data id yang di kirim dari url
$mem_id = $_GET['id'];

if ( isset($_GET['id']) ) {
    if ( hapus($mem_id) > 0 ) {
        echo "<script>
				alert('Berhasil dihapus!');
				document.location.href = 'dashboard.php';
			</script>";
    } else {
        echo "<script>
				alert('Gagal dihapus!');
				document.location.href = 'dashboard.php';
			</script>";
    }
}

?>