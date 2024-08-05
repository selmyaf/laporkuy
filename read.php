<?php
require_once 'koneksi.php';

$query = "SELECT * FROM aspirasi";
$sql = mysqli_query($conn , $query);
echo "<table border = 1 cellpading = 2 cellspacing = 0>
<thead>
    <th>idaspirasi</th>
    <th>isiaspirasi</th>
    <th>kategori</th>
</thead>
<tbody>";
WHILE($q = mysqli_fetch_assoc($sql)){
    $idaspirasi = $q['idaspirasi'];
    $isiaspirasi = $q['isiaspirasi'];
    $kategori = $q['kategori'];

    echo "<tr>";
    echo "<td>$idaspirasi</td>";
    echo "<td>$isiaspirasi</td>";
    echo "<td>$kategori</td>";
    echo "<td>
        <a href='formupaspirasi.php?idaspirasi=$idaspirasi'>Edit</a>
        <a href='deleteaspirasi.php?idaspirasi=$idaspirasi'>Delete</a>
        </td>";
    echo "</tr>";
}

echo "</tbody></table>";
