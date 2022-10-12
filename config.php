<?php 
$databaseHost = 'localhost';
$databaseName = 'iesi_perpustakaan';
$databaseUsername = 'root';
$databasePassword = '';

$db_conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
} else {
  echo "connected to mysql";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
</body>
</html>