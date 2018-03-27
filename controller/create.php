<?php
require_once 'db_config.php';
$post = $_POST;
$sql = "INSERT INTO jurusan (kd_jurusan,nama_jurusan)VALUES ('".$post['kode']."','".$post['namajurusan']."')";
$result = $mysqli->query($sql);
$sql = "SELECT * FROM jurusan Order by kd_jurusan desc LIMIT 1";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();
echo json_encode($data);
?>
