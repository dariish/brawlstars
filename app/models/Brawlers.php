<?php

namespace app\models;

use app\core\Db;
class Brawlers {

/**
  * Método para obtenção do dataset de todos os brawlers
  *
  * @return   array
  */
  public static function findAll() {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, name, rarity, role, health, speed, image FROM brawlers');
    return $response;
  }

  /**
  * Método para a obtenção de um brawler pelo id correspondente
  * @param    int     $id   Id. do brawler
  *
  * @return   array
  */
  public static function findById(int $id) {
    $conn = new Db();
    $response = $conn->execQuery('SELECT id, name, rarity, role, health, speed, image, description FROM brawlers WHERE id = ?', array('i', array($id)));
    return $response;
  }

  public static function top4(){
      $conn = new Db();
      //$response = $conn->execQuery('SELECT id, name, rarity, role, health, speed, image FROM brawlers');
      $response = $conn->execQuery('SELECT * FROM brawlers ORDER BY id DESC LIMIT 4');
      return $response;
  }











  public static function inserir($post, $files){


       if (isset($post['name']) && isset($post['rarity']) && isset($post['role']) && isset($post['health']) && isset($post['speed']) && isset($files['image']) && isset($post['description'])) {

       if ($files['image']['error'] > 0) {
           echo 'Problema: <br />';
           switch ($files['image']['error'])
               {
               case 1: echo 'Ficheiro excedeu o tamanho máximo especificado em php.ini'; break; 	// do PHP
               case 2: echo 'Ficheiro excedeu o tamanho máximo especificado pelo aributo MAX_FILE_SIZE do formulário HTML'; break; 			// do HTML
               case 3: echo 'Ficheiro apenas parcialmente carregado [corrompido]'; break;			// falhou
               case 4: echo 'Ficheiro não foi carregado'; break;						// falhou
               }
           exit;
           }

       $name = $post['name'];
       $rarity = $post['rarity'];
       $role = $post['role'];
       $health = $post['health'];
       $speed = $post['speed'];
       $image = $files['image']['name'];
       $image_caminho = "imgs/" . $image;
         $description = $post['description'];

       // se existe o ficheiro uploaded
       if (is_uploaded_file($files['image']['tmp_name'])) { // neste caso, o registo em base de dados apenas é efetuado se houver ficheiro

           // verificar se o ficheiro já existe no servidor (na pasta do projeto)
           // no caso de existir, o nome do ficheiro é alterado sendo concatenado com o timestamp
           if (file_exists($image_caminho)) {
               $image = time() . $image;
               $image_caminho = "imgs/" . $image;
           }

           // move-o para o destino
           if (move_uploaded_file($files['image']['tmp_name'], $image_caminho)) { // foi feito o upload do ficheiro com sucesso para a pasta destino
               // registar informação em base de dados
               $conn = new Db();
               $response = $conn->execQuery('INSERT INTO brawlers (name, rarity, role, health, speed, image, description) VALUES (?,?,?,?,?,?,?)', array('sssssss', array($name, $rarity, $role, $health, $speed, $image_caminho, $description)));
               echo 'Brawller inserido';
               header("Location:./success");
               return $response;
               exit;



           } else {
               echo 'Problema: Impossível mover para destino final';
               exit;
           }
       } else {
           echo 'Problema: Filename: ';
           echo $files['image']['name'];
           exit;
       }
       }


  }



  public static function apaga($post, $files){

    if (isset($post['id'])) {
    $id = $post['id'];


    $conn = new Db();
    $response = $conn->execQuery('DELETE FROM brawlers WHERE id = ?', array('s', array($id)));
    //$response = $conn->execQuery('DELETE * FROM brawlers WHERE id = ?', array('i', array($id)));
    //return $response;
    header("Location:./../success");
    return $response;
  }
  }


  public static function edita($post, $files){

    if (isset($post['name']) && isset($post['rarity']) && isset($post['role']) && isset($post['health']) && isset($post['speed']) && isset($post['description']) && isset($files['image'])) {

    $image_uploaded = false;
    $id = $post['id'];
    $name = $post['name'];
    $rarity = $post['rarity'];
    $role = $post['role'];
    $health = $post['health'];
    $speed = $post['speed'];
    $description = $post['description'];
    $image = $files['image']['name'];
    $image_caminho = "imgs/" . $image;

    if (isset($files)){
      $image = $files['image']['name'];
      $image_caminho = "imgs/" . $image;

      if(is_uploaded_file($files['image']['tmp_name'])){
        if(file_exists($image_caminho)){
          $image = time() . $image;
          $image_caminho = "imgs/" . $image;
        }

      if (move_uploaded_file($files['image']['tmp_name'], $image_caminho)){
        $image_uploaded = true;
      }

      }
    }

    if($image_uploaded){
      $conn = new Db();
      $response = $conn->execQuery('UPDATE brawlers SET name = ?, rarity = ?, role = ?, health = ?, speed = ?, description = ?, image = ? WHERE id = ?', array('ssssssss', array($name, $rarity, $role, $health, $speed, $description, $image_caminho, $id)));
      $response = 'imgs/' . $image;
      header("Location:index.php");
    } else{
      $conn = new Db();
      $response = $conn->execQuery('UPDATE brawlers SET name = ?, rarity = ?, role = ?, health = ?, speed = ?, description = ? WHERE id = ?', array('sssssss', array($name, $rarity, $role, $health, $speed, $description, $id)));
      $response = 'imgs/' . $_POST["image"];
      header("Location:index.php");
    }
    return $response;
  }
}

}
