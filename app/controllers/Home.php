<?php
use app\core\Controller;

class Home extends Controller {
  // invocação da view index.php de /home
  public function index() {
    $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
    $data = $Brawlers::top4();
    $this->view('home/index', ['brawlers' => $data]);
   
   
    }

 
        }
                               

?>