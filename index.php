<!DOCTYPE html>
<html>
<head>
	<title>KreditMobil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="LOGO.jpg" alt="logo" width="50" height="50" class="d-inline-block align-text-top">
      SmartCar Finance

    </a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Branda <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tentang Perusahaan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kontak Perusahaan
        </a>
      
    </ul>
  </div>
</nav>
  </div>
</nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider 1.jpg" class="d-block w-100 object-fit-fill "height="500px" alt="">
    </div>
    <div class="carousel-item">
      <img src="slider 2.jpg" class="d-block w-100 object-fit-fill "height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider 3" class="d-block w-100 object-fit-fill "height="500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h4 align="center" class="mt-5">SmartCar Finance</h4>
	<br/>
	<div class="container "> 
		<b>Silahkan input data dibawah</b>
		<br/>
		<br/>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
			<b>Harga mobil</b>
			<br/>
			<input type="text" name="hargamobil" class="form-control">
			<br/>
			<b>DP (%)</b>
			<br/>
			<input type="number" name="dp" min="0" max="100" class="form-control">
			<br/>
			<b>Tenor (Tahun)</b>
			<br/>
			<select name="tenor" class="form-control">
				<option value="1">1 Tahun</option>
				<option value="5">5 Tahun</option>
				<option value="10">10 Tahun</option>
				<option value="15">15 Tahun</option>
				<option value="20">20 Tahun</option>
			</select>
			<br/>
			<input type="submit" name="kirim" value="Hitung" class="btn btn-primary">
		</form>
		<?php
		if(isset($_POST['kirim']))
		{
			$hargamobil=$_POST['hargamobil'];
			$dp=$_POST['dp'];
			$tenor=$_POST['tenor'];

			$nominalbunga=20/100*$hargamobil;
			$nominaldp=$dp/100*$hargamobil;
			$jumlahtenor=$tenor*12;

			$hargajual=$hargamobil+$nominalbunga;

			$angsuranperbulan=(($hargamobil+$nominalbunga)-$nominaldp)/$jumlahtenor;

			?>
            <br>
            <div class="d-flex justify-content-center">
			<table>
				<tr>
					<td>Harga mobil</td>
					<td>:</td>
					<td>Rp. <?php echo number_format($hargamobil, 2, ",", ".");?></td>
				</tr>
				<tr>
					<td>Bunga</td>
					<td>:</td>
					<td>20% (Rp. <?php echo number_format($nominalbunga, 2, ",", ".");?>)</td>
				</tr>
				<tr>
					<td>DP</td>
					<td>:</td>
					<td><?php echo $dp;?> % (Rp. <?php echo number_format($nominaldp, 2, ",", ".");?>)</td>
				</tr>
				<tr>
					<td>Tenor</td>
					<td>:</td>
					<td><?php echo $tenor;?> Tahun (<?php echo $jumlahtenor;?> Bulan)</td>
				</tr>
				<tr>
					<td>Angsuran Per Bulan</td>
					<td>:</td>
					<td>Rp. <?php echo number_format($angsuranperbulan, 2, ",", ".");?> / Bulan</td>
				</tr>
			</table>
            <br>
        </div>
        <div class="d-flex justify-content-center">
        </div>
			<?php
		}
		?>
        
	</div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #1c2331"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #6351ce"
           >
    <!-- Left -->
    <div class="me-5">
      <span>SmartCar Finance:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">SmartCar Finance
          </h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
          Website Smartcar Finance hadir sebagai solusi bagi Anda yang ingin memiliki kendaraan pribadi namun belum memiliki dana tunai penuh. Platform digital ini menyederhanakan proses pembelian mobil dengan menawarkan berbagai pilihan pembiayaan yang dapat disesuaikan dengan kebutuhan dan kemampuan finansial Anda.

          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Toyota</a>
          </p>
          <p>
            <a href="#!" class="text-white">Honda</a>
          </p>
          <p>
            <a href="#!" class="text-white">BMW</a>
          </p>
          <p>
            <a href="#!" class="text-white">Marcedes-Benz</a>
          </p>
          <p>
            <a href="#!" class="text-white">Daihatsu</a>
          </p>
          <p>
            <a href="#!" class="text-white">Audi</a>
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> Bogor, Jawa Barat</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
        </svg>
          <p><i class="fas fa-envelope mr-3"></i>SmartCar@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i> </p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg>
          <p><i class="fas fa-print mr-3"></i> </p>+628123456789
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->

</body>
</html>
