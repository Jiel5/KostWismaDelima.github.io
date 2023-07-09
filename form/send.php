  <?php 
	if (isset($_POST['submit'])) {
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$alamat 		= $_POST['alamat'];
		$no_wa 			= $_POST['noWa'];
		$kamar 			= $_POST['kamar'];
		$description 	= $_POST['description'];
		header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Halo saya ingin memesan:%0D *Nama*:%20$name%20 %0D *Email*:%20$email%20 %0D *Kamar*:%20$kamar%20 %0D *Alamat*:%20$alamat %0D *Catatan*:%20$description%20s" ); }
?>