<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'portal';

$connect = mysqli_connect($hostname, $username, $password, $database);

if (! $connect)
{
    die('koneksi gagal'. mysqli_connect_error());
}
?>