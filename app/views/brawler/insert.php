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
  <link href="./../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="./../css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="./../css/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="./../css/stylish-portfolio.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="./../">Brawl Stars</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="../brawler">back</a>
      </li>
  
    </ul>
  </nav>




<body>



    <div class="main-container">

        <div class="titulo" style="color: #00641b;">&nbsp</div>
        <div class="subtitulo">&nbsp</div>
        <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Brawlers</h3>
        <h2 class="mb-5" >Add Brawlers</h2>
      </div>


      <section class="content-section bg-primary text-white" id="login">
<div class="container">






<form action="insert" method="POST" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000">

  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" >

    </div>
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="text" class="form-control" id="role" name="role" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="rarity">Rarity</label>
      <input type="text" class="form-control" id="rarity" name="rarity">
    </div>
    <div class="form-group col-md-3">
      <label for="health">Health</label>
      <input type="text" class="form-control" id="health" name="health">
    </div>
    <div class="form-group col-md-3">
      <label for="speed">Speed</label>
      <input type="text" class="form-control" id="speed" name="speed">
    </div>
    <div class="form-group col md-12">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="image" id="image"  required>
    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
  </div>

  </div>
  
  <div style="padding-top: 40px;">
</div>
  <button type="submit" name="submit" class="btn btn-primary">Add Brawler</button>  <a href="./../brawler">Voltar</a>
  
</form>

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
  <script src="./../css/vendor/jquery/jquery.min.js"></script>
  <script src="./../css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./../css/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./../css/js/stylish-portfolio.min.js"></script>

</body>

</html>