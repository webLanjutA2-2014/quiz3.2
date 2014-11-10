<html>
<head>
<body>
    <form method="POST" action="proses.php">
        <table border="1" cellspacing="0" cellpadding="5">
            
                <td>No.</td>
                <td>Check</td>
                <td>Kode</td>
                <td>Judul Buku</td>
            </tr>
            <?php
            mysql_connect('localhost', 'root', '');
            mysql_select_db('perpustakaan');
            $query = mysql_query("SELECT * FROM buku ORDER BY kode ASC");
            $no = 1;
            while($data = mysql_fetch_object($query))
            {
                echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td><input type='checkbox' name='kode[]' value='$data->kode' /></td>";
                    echo "<td>".$data->kode."</td>";
                    echo "<td>".$data->judul_buku."</td>";                    
                echo "</tr>";
                $no++;
            }
            ?>            
        </table>
        <button type="submit">Simpan</button>
    </form>
</body>
</head>
</html>