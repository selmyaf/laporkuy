<?php
require_once 'koneksi.php';

$query = "SELECT * FROM berita";
$sql = mysqli_query($conn , $query);
echo "<table border = 1 cellpading = 2 cellspacing = 0>
<thead>
    <th>judulberita</th>
    <th>isiberita</th>
    <th>kategori</th>
</thead>
<tbody>";
WHILE($q = mysqli_fetch_assoc($sql)){
    $judulberita = $q['judulberita'];
    $isiberita = $q['isiberita'];
    $kategori = $q['kategoriberita'];

    echo "<tr>";
    echo "<td>$judulberita</td>";
    echo "<td>$isiberita</td>";
    echo "<td>$kategori</td>";
    echo "<td>
        <a href='formupberita.php?judulberita=$judulberita'>Edit</a>
        <a href='deleteberita.php?judulberita=$judulberita'>Delete</a>
        </td>";
    echo "</tr>";
}

echo "</tbody></table>";