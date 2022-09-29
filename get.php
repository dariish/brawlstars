<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
  http_response_code(405);
  exit('405 Method Not Allowed');
}

require_once('./app/core/Db.php');
require_once('./app/models/Brawlers.php');

$brawler = new Brawlers();

if (!isset($_GET['n'])) {
  $data = $brawler->get();
} else {
  if (is_numeric($_GET['n'])) {
    $data = $brawler->getById($_GET['n']);
  } else {
    $data = array();
  }
}

$nrecords = count($data);
$info = array();

if ($nrecords > 0) {
  $info['brawlers'] = array();
  foreach ($data as $brawler) {

    extract($brawler);

    $item = array(
      'id' => $id,
      'name' => $name,
      'rarity' => $rarity,
      'role' => $role,
      'role' => $health,
      'speed' => $speed,
      'description' => $description,
      'image' => $image
    );

    array_push($info['brawler'], $item);

  }

} else {
  $info = array('message' => '0 brawlers encontrados...');
}

echo json_encode($info);
?>
