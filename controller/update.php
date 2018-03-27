<?php
  require 'db_config.php';
  $id  = $_POST["id"];
  $post = $_POST['jurusan'];
  $sql = "UPDATE jurusan SET nama_jurusan = '".$post."' WHERE kd_jurusan = '".$id."'";
  $result = $mysqli->query($sql);
  $sql = "SELECT * FROM jurusan WHERE kd_jurusan = '".$id."'";
  $result = $mysqli->query($sql);
  $data = $result->fetch_assoc();
  echo json_encode($data);
?>
