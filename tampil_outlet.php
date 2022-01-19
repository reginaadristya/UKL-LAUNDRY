<!DOCTYPE html>
<html>
	<head>
		 <link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
		 <title></title>
	</head>
	<body>
		 <h3>Daftar Outlet</h3>
		 <table class="table table-hover table-striped">
		 <thead>

		 <tr>
		 <th>No</th>
		 <th>Cabang</th>
		 <th>Alamat</th>
		 <th>Nomor Telepon</th>
		 <th>Aksi</th>
		 </tr>

		 </thead>
		 <tbody>
		 <?php
		 include "../koneksi.php";
		$qry_outlet=mysqli_query($conn,"select * from outlet");
		 $no=0;
		while($outlet=mysqli_fetch_array($qry_outlet)){
		 $no++;?>

		<tr> 
			<td><?=$no?></td>
			<td><?=$outlet['cabang']?></td>
			<td><?=$outlet['alamat']?></td>
			<td><?=$outlet['telp']?></td>
		
		
		<td>	
            <a href="ubah-outlet.php?cabang=<?=$outlet['cabang']?>" class="btn btn-success">Ubah</a>
            <a href="proses-hapus-outlet.php?cabang=<?=$outlet['cabang']?>" onclick="return confirm('Apakah anda yakin menghapus data outlet ini?')" class="btn btn-danger">Hapus</a>
		</td>
		</tr>

		 <?php
		 }
		 ?>
		 </tbody>
		 </table>
		 <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
	</body>
</html>