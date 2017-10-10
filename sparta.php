<?php
require_once '_inc/functions.php';
$data = load_data();
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
<link rel="stylesheet" href="css/sparta.css">
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <div class="text-center">
        <h1>300</h1>
        <h2>hriechov hrmených</h2>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <? foreach ($data as $message): ?>
            <article class="sin">
                <header>
                    <h4><? echo $message->title?><span><? echo $message->creation_date?></span></h4>
                </header>
                <p><? echo $message->message ?></p>
                <footer>
                    <h5><? echo $message->author?></h5>
                    <button class="btn btn-danger" data="<? echo $message->id?>">forgive</button>
                </footer>
            </article>
        <? endforeach ?>
    </div>
</div>

</body>
</html>
