
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Brawl Stars - ECGM</title>


  <!-- Bootstrap Core CSS -->
  <link href="./../../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="./../../css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="./../../css/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="./../../css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="../../index">Brawl Stars</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="../../brawler">back</a>
      </li>

    </ul>
  </nav>




  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Brawler</h3>
       <?php foreach ($data['brawlers'] as $brawler) {


 echo '<h2 class="mb-5">' . $brawler['name'] . '</h2>';
 ?>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-diamond"></i>
          </span>
          <h4>
          <?php
          echo '<strong>' . $brawler['rarity'] . '</strong>';
          ?>

          </h4>
          <p class="text-faded mb-0">Rarity</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-notebook"></i>
          </span>
          <h4>

          <?php
              echo '<strong>' . $brawler['role'] . '</strong>';
          ?>

          </h4>
          <p class="text-faded mb-0">Role</p>
        </div>


        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-heart"></i>
          </span>
          <h4>

          <?php
              echo '<strong>' . $brawler['health'] . '</strong>';
          ?>
          </h4>
          <p class="text-faded mb-0">Health</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-speedometer"></i>
          </span>
          <h4>

          <?php
              echo '<strong>' . $brawler['speed'] . '</strong>';
          ?>

          </h4>
          <p class="text-faded mb-0">Speed</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="content-section bg-light" id="about">
  <div class="container">
  <div class="row">
    <div class="col">
    <?php
          echo "<img class='rounded alt='Responsive image'  width='450' height='500'  src ='./../../".$brawler['image']."' />";
          ?>
    </div>
    <div class="col">

    <?php
              echo '<p class="lead mb-5">' . $brawler['description'] . '</p>';
          ?>

    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-10"></div>


    <div class="col">
<?php
foreach ($data['brawlers'] as $brawler) {

    echo '<a href="./../../brawler/edit/' . $brawler['id']  . '"><i style="color:blue"  class="fa fa-cog fa-4x"></i></a>';

echo '</div>';
echo '<div class="col"  >';

    echo' <a href="./../../brawler/delete/' . $brawler['id'] .  '"> <i  style="color:red" class="fa fa-trash-alt fa-4x"></i></a>';
}



    ?>

  </div>
    



  </div></div>
  </div>
</div>

  </div>
</section>


 <?php
 }
 ?>


  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="./../../css/vendor/jquery/jquery.min.js"></script>
  <script src="./../../css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./../../css/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./../../css/js/stylish-portfolio.min.js"></script>

</body>

</html>

<?php
//echo "<ul>";
//foreach ($data['brawlers'] as $brawler) {
 // echo '<li>' . $brawler['name'] . '</li>';
  //echo '<li>' . $brawler['rarity'] . '</li>';
  //echo '<li>' . $brawler['role'] . '</li>';
  //echo '<li>' . $brawler['health'] . '</li>';
  //echo '<li>' . $brawler['speed'] . '</li>';
  //echo "<img src ='./../../".$brawler['image']."' />";
//}
//echo "<ul>";
?>
