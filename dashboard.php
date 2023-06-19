<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="static/img/inventory.png">
  <link rel="stylesheet" href="static/css/dashboard.css">
</head>

<body>
  <?php include "assets/header.html" ?>
  <?php include "assets/sidebar.html" ?>
  
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
    </div>
    <div id="Loader">
      <div class="d-flex justify-content-center">
        <div class="spinner-border text-success" style="width: 7rem; height: 7rem;" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Barang Masuk</h5>
            <p class="card-text">12</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Barang Keluar</h5>
            <p class="card-text">7</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body">
            <h5 class="card-title">Total</h5>
            <p class="card-text">19</p>
          </div>
        </div>
      </div>
  </main>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="static/js/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="static/js/Chart.min.js"></script>
  <script src="static/js/dashboard.js"></script>
  <script>
    window.addEventListener('load', setTimeout(function () {
      const anim = document.querySelector('#Loader');
      anim.style.display = "none";
    }, 500));
  </script>
</body>

</html>