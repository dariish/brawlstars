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



    <div class="main-container">

        <div class="titulo" style="color: #00641b;">&nbsp</div>
        <div class="subtitulo">&nbsp</div>
        <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Brawlers</h3>
        <h2 class="mb-5" >Edit Brawlers</h2>
      </div>


      <section class="content-section bg-primary text-white" id="login">
<div class="container">

<?php

if (count($data['brawlers'])){
  $brawlerToEdit = $data['brawlers'][0];
  $id = $brawlerToEdit['id'];
  $name = $brawlerToEdit['name'];
  $rarity = $brawlerToEdit['rarity'];
  $role = $brawlerToEdit['role'];
  $health = $brawlerToEdit['health'];
  $speed = $brawlerToEdit['speed'];
  $description = $brawlerToEdit['description'];

  if (isset($data['response'])){
    echo "Brawlers atualizados.";
    $image = $data['response'];
  } else {
    $image = $brawlerToEdit['image'];
  }
} else {
  $id = 0;
  $name = '';
}


if (!count($data['brawlers'])){
  echo "Brawler atualizado";
  header("Location:./../success");
}

?>




<form action="./../update/<?php echo $id;?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id;?>"/>

  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo $name;?>" id="name" >

    </div>
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="text" class="form-control" value="<?php echo $role;?>" id="role" name="role" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="rarity">Rarity</label>
      <input type="text" class="form-control" value="<?php echo $rarity;?>" id="rarity" name="rarity">
    </div>
    <div class="form-group col-md-3">
      <label for="health">Health</label>
      <input type="text" class="form-control" value="<?php echo $health;?>" id="health" name="health">
    </div>
    <div class="form-group col-md-3">
      <label for="speed">Speed</label>
      <input type="text" class="form-control" value="<?php echo $speed;?>" id="speed" name="speed">
    </div>
    <div class="form-group col md-12">
    <label for="exampleFormControlTextarea1">Description</label>
    <input class="form-control"value="<?php echo $description;?>"  id="description" name="description" rows="3"/>
  </div>


    <div class="custom-file">
    <input type="file" class="custom-file-input" value="<?php echo $image;?>" name="image" id="image"  >
    <div class="row no-gutter">
    <div class="col-md-10" style="padding-top:40px">
    <button type="submit" name="submit" class="btn btn-primary">Edit Brawler</button>  <a href="./../../brawler">Voltar</a>
    </div>
    <div class="col-md-2" style="padding-top:20px">
    <img style="height:150px; width:150px;"src="img src ='./../../../<?php echo $image;?>" />
    </div>
    </div>
    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
  </div>

  </div>
  
  <div style="padding-top: 40px;">
</div>
  
  
</form>
<?php
  ini_set('display_errors', 0 );
  error_reporting(0);
?>
</div>
<div style="padding-bottom:50px"></div>
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