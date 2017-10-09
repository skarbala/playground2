<?php
require_once 'functions.php';
$data = load_data();

empty($data) ? $id = 0 : $id = (max($data)->id);

if (!empty($_POST['message'])) {
    $post = (object)[
        "id" => ++$id,
        "message" => $_POST['message'],
        "title" => $_POST['title'],
        "deleted" => false
    ];
    array_push($data, $post);
    save_file($data);
    header("Location: http://localhost/batmansdiary.php");
}
?>