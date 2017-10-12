<?php
require_once '../functions.php';
$searched_id = $_POST['key'];
$data = load_data();
$data[$searched_id-1]->forgiven = true;
save_file($data);
echo json_encode($data[$searched_id - 1]);
