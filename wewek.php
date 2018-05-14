<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>

<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"user");
$sql = "SELECT * FROM karyawan";
$myData = mysqli_query($con,$sql);
 echo "<table border=1>
 <tr>
			<th>Nama</th>
            <th>ID</th>
            <th>Tgl Lahir</th>
			<th>Email</th>
            <th>No Hp</th>
            <th>Alamat</th>
			<th>Jabatan</th>
 </tr>";
while($record = mysqli_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['nama'] . "</td>";
	echo "<td>" . $record['id'] . "</td>";
	echo "<td>" . $record['tgl_lahir'] . "</td>";
	echo "<td>" . $record['email'] . "</td>";
	echo "<td>" . $record['no_hp'] . "</td>";
	echo "<td>" . $record['alamat'] . "</td>";
	echo "<td>" . $record['jabatan'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con); 
?>
</body>
</html>