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
  <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="css/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="index.php">Brawl Stars</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Brawlers</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#login">slogan</a>
      </li>
    </ul>
  </nav>



  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Brawlers</h3>
        <h2 class="mb-5" >All Brawlers</h2>
        <a href="brawler/insert">Add Brawler</a>
      </div>




      <div class="row">
      <?php
          foreach ($data['brawlers'] as $brawler) {
            ?>

        <div class="col-lg-6">

        <?php  
        
        echo'<a class="portfolio-item" href="./brawler/get/' . $brawler['id']  . '"">';
        
        ?>
            <span class="caption">
              <span class="caption-content">
              
              <?php echo '<h2>' . $brawler['name'];
              
                   echo '</h2>';
                          
                  
              ?>
                <p class="mb-0">
                <?php
        
                echo ''. $brawler['role'];
               
                 
              ?>


                </p>
              </span>
            </span>
            
            <?php  
     
            echo"<img  class='img-fluid' src ='./".$brawler['image']."' />" ?>

          </a>
        </div>

        <?php
       }
       ?>






      </div>
    </div>
  </section>




  <!-- Call to Action -->
  <section class="content-section bg-primary text-white" id="login">
    <div class="container text-center">
    <h2 class="mb-4">CONSTANTLY EVOLVING</h2>
    
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
  <script src="css/vendor/jquery/jquery.min.js"></script>
  <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="css/js/stylish-portfolio.min.js"></script>

</body>

</html>
