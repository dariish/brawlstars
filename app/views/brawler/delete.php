<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Brawl Stars - ECGM </title>

  <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">

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
        <a class="js-scroll-trigger" href="./../../">Brawl Stars</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="./../../brawler">back</a>
      </li>
  
    </ul>
  </nav>




<body>

<?php

  $brawlerToEdit = $data['brawlers'][0];
  $id = $brawlerToEdit['id'];
  $name = $brawlerToEdit['name'];

?>


    <div class="main-container">

        <div class="titulo" style="color: #00641b;">&nbsp</div>
        <div class="subtitulo">&nbsp</div>
        <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Brawlers</h3>
        <h2 class="mb-5" >Delete Brawler</h2>
      </div>


      <section class="content-section bg-primary text-white" id="login">
<div class="container">

<div class="container text-center">
<form action="../deletar/<?php echo $id;?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id;?>"/>
        <div>
        <h2 class="mb-4">Quer apagar o Brawler <?php echo $name;?> ?  </h2>
        </div>
        <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit">Apagar</button><a style="padding-left:10px" href="./../../brawler">Voltar</a>
        
     

        <?php
        ini_set('display_errors', 0 );
        error_reporting(0);
        ?>
    </form>
      
  
    </div>



</div>

    </div>
    </section>

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
      <p class="text-muted small mb-0">Copyright &copy; TiagoSantos & JorgePereira 2019</p>
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