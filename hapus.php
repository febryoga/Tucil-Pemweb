<?php

require("adaw.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE id=$id");
 
header("Location:admin.php");
?>