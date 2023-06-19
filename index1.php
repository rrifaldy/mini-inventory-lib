<!doctype html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="static/img/inventory.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" src="static/css/index1.css">
  <title>Inventory</title>
</head>

<body>
  <?php include "assets/header.html" ?>
  <?php include "assets/sidebar.html" ?>

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