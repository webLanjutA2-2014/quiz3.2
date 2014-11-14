<h1>pinjam</h1>
	<?php
		require('koneksi.php');
		if(isset($_GET['id'])){
		$sql="select *from Transaksi where id=".$_GET['id'];
		$query = mysqli_query($con, $sql);
		
		$result = mysqli_fetch_assoc($query);
		}
		?>
		<form action="" method="post">
			<p>id:
				<input type="text" name="id" value="<?=$result['id'];?>"></p>
			<p>nama:
				<input type="text" name="nama" value="<?=$result['nama'];?>"></p>
			<p>nomor telp:
				<input type="text" name="no_telp" value="<?=$result['no_telp'];?>"></p>
			<p>judul buku:
				<input type="text" name="judul_buku" value="<?=$result['judul_buku'];?>"></p>
			<p>pinjam:
				<input type="text" name="pinjam" value="<?=$result['pinjam'];?>"></p>
			<p>kembali:
				<input type="text" name="kembali" value="<?=$result['kembali'];?>"></p>
			</form>

			<?
				require('koneksi');
				
					if($_SERVER['REQUEST_METHOD']=='POST'){
						$id = $_POST['id'];
						$nama = $_POST['nama'];
						$no_telp  = $_POST['no_telp'];
						$judul_buku = $_POST['judul_buku'];
						$pinjam=$_POST['pinjam'];
						$kembali=$_POST['kembali'];
						
						
					$sql="insert into Transaksi(id,nama,no_telp,judul_buku,pinjam,kembali)values
							('$id','$nama','$no_telp','$judul_buku','$pinjam','$kembali')";