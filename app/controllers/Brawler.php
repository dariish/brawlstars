<?php
use app\core\Controller;
class Brawler extends Controller {
  /**
  * Invocação da view index.php
  */
  public function index() {
    $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
    $data = $Brawlers::findAll();
    /*
    $objBrawlers = new Brawlers();
    $data = $objBrawlers->findAll();
    ------------------------------------------------------
    $varBrawlers = "Brawlers";
    $data = $varBrawlers::findAll();
    */
    $this->view('brawler/index', ['brawlers' => $data]);
  }
  public function success() {
    $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
    $data = $Brawlers::findAll();
    $this->view('brawler/success', ['brawlers' => $data]);
  }

  /**
  * Invocação da view get.php
  *
  * @param  int   $id   Id. do brawler
  */
  public function get($id = null) {
    if (is_numeric($id)) {
      $Brawlers = $this->model('Brawlers');
      $data = $Brawlers::findById($id);
      $this->view('brawler/get', ['brawlers' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  public function insert() {
    $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()

    $data = $Brawlers::inserir($_POST, $_FILES);
    $this->view('brawler/insert', ['brawlers' => $data]);
  }



  public function edit($id = null) {
    if (is_numeric($id)) {
    $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
    $data = $Brawlers::findById($id);
    $this->view('brawler/edit', ['brawlers' => $data]);
    //$this->view('brawler/edit', ['brawlers' => $data, 'response' => $response]);
      } else {
        $this->pageNotFound();
      }
    }


    public function delete($id = null) {
      if (is_numeric($id)) {
        $Brawlers = $this->model('Brawlers');
        $data = $Brawlers::findById($id);
        $this->view('brawler/delete', ['brawlers' => $data]);
      } else {
        $this->pageNotFound();
      }
    }

    public function deletar() {
      $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
      $data = $Brawlers::apaga($_POST, $_FILES);
      $this->view('brawler/delete', ['brawlers' => $data]);
      }

    public function update() {
        $Brawlers = $this->model('Brawlers');
        $data = $Brawlers::edita($_POST, $_FILES);
        $this->view('brawler/edit', ['brawlers' => $data, 'response' => $response]);
    }


}

// :: Scope Resolution Operator
// Utilizado para acesso às propriedades e métodos das classes
?>
