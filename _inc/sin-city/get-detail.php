<?php
require_once 'functions.php';
$searched_id = $_GET['key'];

$data = load_data();
echo json_encode($data[$searched_id - 1]);
