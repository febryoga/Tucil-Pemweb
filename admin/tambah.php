<html>
<head>
	<title>Add Users</title>
	<style>
body {
  margin-top: 15%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("hotel1.jpg");
   background-color: #cccccc;
   width: 100%;
}

* {
  box-sizing: border-box;
}


.container {
	
	left: 0%;
	width: 35%;
  position: relative;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .5);
  padding: 20px 0 30px 0;
}


input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none;
}

input:hover,
.btn:hover {
  opacity: 1;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.col {
	height : 50%;
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}


.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}


.hide-md-lg {
  display: none;
}


(max-width: 650px) {
  .col {

    width: 100%;
    margin-top: 0;
  }

  .hide-md-lg {
    display: block;
    text-align: center;
  }

  span.psw {
    float: right;
    padding-top: 16px;
}

}
</style>
</head>

<body>
<center> <div class="container">
	<a href="booknow.php">Go to Home</a>
	<br/><br/>
 
	<form action="tambah.php" method="post" name="form1">
		<table width="80%" height="10%" border="0" >
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>ID</td>
				<td><input type="int" name="id"></td>
			</tr>
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="date(Y-m-d)" name="tgl_lahir"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td>No Hp</td>
				<td><input type="int" name="no_hp"></td>
			</tr>
			<tr> 
				<td>Jabatan</td>
				<td><input type="text" name="jabatan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
			
		</table>
		<?php
 
	
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$id = $_POST['id'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$jabatan = $_POST['jabatan'];
		
		
		require("adaw.php");
				
		
		$result = mysqli_query($mysqli, "INSERT INTO karyawan(nama,id,tgl_lahir,email,alamat,no_hp,jabatan) VALUES('$nama','$id','$tgl_lahir','$email','$alamat','$no_hp','$jabatan')");
		
		echo "Staff added successfully. <a href='admin.php'>View Staff</a>"; 
	
	}
	?>
	</form>
	</div></center>
	
	
</body>
</html>