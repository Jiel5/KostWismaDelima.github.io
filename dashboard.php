<?php 
session_start();
require 'functions.php';

$result = mysqli_query($conn, "SELECT * FROM pengunjung");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar pertanyaan</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3" style="background-color: rgb(241, 241, 241); padding: 1px 50px 70px 50px;">
		<h2 class="mt-5 text-center">Daftar Pertanyaan</h2>
		<hr width="100%" style="height: 2px; background-color: black;">
		<br/>
		<div class="mb-3">
			<a href="logout.php" class="text-decoration-none text-white bg-danger px-3 py-2 justify-content-end">LOGOUT</a>
			<a href="" class="text-decoration-none text-white bg-success px-3 py-2 justify-content-end">REFRESH</a>
		</div>

		<br/>
		
		<div class="table-responsive">
			<table class="table table-hover table-bordered border-dark">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Email</th>
						<th scope="col">Pertanyaan</th>
						<th scope="col" class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; foreach ( $result as $row ) : ?>
						<tr>
							<th scope="row"><?= $i; ?></th>
							<?php $mem_id = $row["id"]; ?>
							<td><?= $row["email"]; ?></td>
							<td><?= $row["pertanyaan"]; ?></td>
							<td class="text-center">

								<a href="hapus.php?id=<?= $mem_id; ?>" class="text-decoration-none" onclick="return confirm('Apakah anda yakin menghapus data ini? ')">
									<span class="px-4 py-1 bg-danger rounded text-white">hapus</span>
								</a>
							</td>
						</tr>
					<?php $i++; endforeach; ?>
				</tbody>

				<caption>List of users</caption>
			</table>
		</div>
	</div>

	<footer>
		<p class="bg-secondary text-white p-3 text-center" style="margin-top: 100px;">© copyright 2022 - created by kelompok 5</p>
	</footer>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>