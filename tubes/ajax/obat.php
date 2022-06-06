<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM obat 
            WHERE
          nama_obat LIKE '%$keyword%' OR
          harga LIKE '%$keyword%' OR
          bentuk LIKE '%$keyword%' OR
          stok LIKE '%$keyword%' OR
          manfaat LIKE '%$keyword%' OR
          konsumen LIKE '%$keyword%' OR
          gambar LIKE '%$keyword%'
        ";
$obat = query($query);
?>
<table border="1" cellpadding="10" cellspacing="0">

<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
   <th>kode_obat</th>
   <th>gambar</th>
   <th>nama_obat</th>
   <th>harga</th>
   <th>bentuk</th>
   <th>stok</th>
   <th>manfaat</th>
   <th>konsumen</th>
   <th>aksi</th>
</tr>

<?php $i = 1; ?>
<?php foreach($obat as $obt) :?>
    <tr>
         <td><?= $i; ?></td>
         <td><img src="img/<?= $obt["gambar"]; ?>" width="100"></td>
         <td><?= $obt["nama_obat"]; ?></td>
         <td><?= $obt["harga"]; ?></td>
         <td><?= $obt["bentuk"]; ?></td>
         <td><?= $obt["stok"]; ?></td>
         <td><?= $obt["manfaat"]; ?></td>
         <td><?= $obt["konsumen"]; ?></td>
         <td>
            <a href="ubah.php?id=<?= $obt["kode_obat"]; ?>" class="btn badge bg-primary">ubah</a> 
            <a href="hapus.php?id=<?= $obt["kode_obat"]; ?>" onclick="return confirm('serius?')" class="btn badge bg-danger">hapus</a>
         </td>
                        
    </tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>