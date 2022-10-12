<?php 
require 'config.php';

function cari_semua_buku($db_conn):mysqli_result {
  $query_all_books = "SELECT * FROM buku";
  $query_res = $db_conn->query($query_all_books);
  return $query_res;
}

function print_hasil_query($query_res):void {
  foreach ($query_res as $buku) {
    echo "<tr>";
    echo "<td>" . $buku["id"] . "</td>";
    echo "<td>" . $buku["judul"] . "</td>";
    echo "</tr>";
  }
}

$query_res = cari_semua_buku($db_conn);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>perpustakaan</title>
  <style>
    ul {
      list-style-type: none;
      display: inline-block;
    }

    table, th, td {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h1>Daftar fitur</h1>

  <table>
    <h2>Daftar Buku</h2>
    <thead>
      <th>id</th>
      <th>Judul</th>
    </thead>
    <tbody>
      <?php 
        print_hasil_query($query_res);
      ?>
    </tbody>
  </table>
</body>
</html>