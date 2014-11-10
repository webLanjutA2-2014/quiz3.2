<?php
// seharusnya dibuat dinamis dengan mengambil data siswa dari database
$nama_peminjam = 'rizal';

// tanggal transaksi peminjaman buku
$tgl_pinjam = date('Y-m-d');

// Batas lama peminjaman buku
$lama_pinjam = 3;

// query untuk mencari tanggal berapa buku harus dikembalikan
$query = mysql_query("SELECT DATE_ADD('$tgl_pinjam',
                      INTERVAL '$lama_pinjam' DAY) 
                      AS tgl_kembali"
                    );
$hasil = mysql_fetch_object($query);
$tgl_kembali = $hasil->tgl_kembali;

// proses penginputan data disini
foreach($_POST['kode'] as $data)
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('perpustakaan');
    mysql_query("INSERT INTO peminjaman 
                 VALUES (null, '$nama_peminjam', '$data', '$tgl_pinjam', '$tgl_kembali')"
                );
}
// jika proses penginputan selesai, tampilkan pesan sukses
echo "Sukses";
?>