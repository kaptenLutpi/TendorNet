<?php

$conn = mysqli_connect('localhost', 'root', '', 'tendornet');

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}