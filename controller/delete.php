<?php
 require 'db_config.php';
 $id  = $_POST["id"];
 $sql = "DELETE FROM jurusan WHERE kd_jurusan = '".$id."'";
 $result = $mysqli->query($sql);
 echo json_encode([$id]);
?>
