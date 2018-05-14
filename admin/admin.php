<!doctype html>
<?php
// Create database connection using config file
include_once("adaw.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id DESC");
?>
<html lang="en">
  <head>
    <title>BuduBagak LuxuryHotel</title>
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
   background-color: #d6ae79;
   color: white;
    }
  tr:nth-child(even) {background-color: #ffffff}
 </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">BuduBagak LuxuryHotel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
             <li class="nav-item">
                <a class="nav-link " href="rooms.php">Rooms</a>
              </li> 
             <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
               <li class="nav-item cta">
                <a class="nav-link active" href="admin.php"><span>Admin</span></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Admin</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
	
	<br>
	<a href="tambah.php">Add New Karyawan</a><br/><br/>
	<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"user");
$sql = "SELECT * FROM karyawan";
$myData = mysqli_query($con,$sql);
 echo "<table border=1>
 <tr>
            <th>ID</th>
			<th>Nama</th>
            <th>Tgl Lahir</th>
			<th>Email</th>
            <th>No Hp</th>
            <th>Alamat</th>
			<th>Jabatan</th>
			<th>Option</th>
 </tr>";
while($record = mysqli_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['id'] . "</td>";
	echo "<td>" . $record['nama'] . "</td>";
	echo "<td>" . $record['tgl_lahir'] . "</td>";
	echo "<td>" . $record['email'] . "</td>";
	echo "<td>" . $record['no_hp'] . "</td>";
	echo "<td>" . $record['alamat'] . "</td>";
	echo "<td>" . $record['jabatan'] . "</td>";
	echo "<td><a href='edit.php?id=$record[id]'>Edit</a> | <a href='hapus.php?id=$record[id]'>Delete</a></td></tr>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con); 
?>

<br>
	

    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Holiday is not perfect if you are not spend your holiday in hotel. But if you want more joy in your holiday come to BuduBagak Luxury Hotel. Come and we serve you like you live in the heaven in the middle of meadow.</p>
       
            <video width="600" height="280" controls="controls" preload="none" onclick="this.play()">
 <source type="video/mp4" src="adaw.mp4">
</video>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+6281 1791 7298</a></p>
			<p class="lead"><a href="tel://">+6281 1720 7200</a></p>
			<p class="lead"><a href="tel://">+6282 2694 4313 2</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="https://www.facebook.com/faar12" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="https://twitter.com/egiwarrior21" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="https://www.instagram.com/febryogasaputra/" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="https://www.youtube.com/channel/UCkuwyW3QBFlKW60R6DDkZCw" class="p-3"><span class="fa fa-youtube-play"></span></a>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Address</h3>
            <p>Jalan Nusantara , Perum . Pujangga Alam Blok G2 No 2 , Labuhan Dalam , Bandar Lampung</p>
           
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
			<p> BuduBagak Team </p>
            <p> Arlis Putra Prabowo Febryoga Saputra Haravy Egi Pratama </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

   

    <script src="js/main.js"></script>
  </body>
</html>