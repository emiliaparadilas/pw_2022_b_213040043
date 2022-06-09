<?php
include('functions.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM obat");
$html = '<center><h3 class="mt-3 mb-5" style="margin-bottom:5px">Daftar Obat</h3></center><hr/><br/>';
$html = '<center>
<h2>DATA OBAT</h2> </br>
</center><br><br>';
$html.= '<center><h3 style="margin-top:20px; margin-bottom:20px;">Jl.Kartika 1 no 196 B gegerkalong Sukasari </h3></center>';
$html.= '<br/>';
$html.= '<br/>';
$html.= '<hr>';

$html .= '<table border="1" width="100%" style="margin-top:40px;border-collapse: collapse;border: 1px solid #ddd;">
 <tr>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">kode_obat</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">nama_obat</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">harga</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">bentuk</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">stok</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">manfaat</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">konsumen</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['kode_obat']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['nama_obat']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['harga']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['bentuk']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['stok']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['manfaat']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['konsumen']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
// $html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_obat.pdf');
?>