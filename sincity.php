<?php
require_once '_inc/functions.php';
$data = load_data();
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<link rel="stylesheet" href="css/sin-city.css">
<script>
    var baseURL = '<?php echo "/_inc/sin-city/" ?>';
</script>
<body>
<?php include 'partials/navigation.php' ?>

<div class="container">
    <h1 class="text-center">sin city</h1>
    <div class="col-md-6">
        <h3>new sin</h3>
        <?php require_once "partials/sin-city/add-new.form.php" ?>

        <h3>all sins<span>(<?php echo count($data) ?>)</span></h3>
        <?php if (!empty($data)) : ?>
            <ul class="list-of-sins">
                <?php foreach ($data as $message): ?>
                    <li class="sin">
                        <?php echo $message->title ?>
                        <div class="description">
                            <p class="<?php echo ($message->forgiven) ? "" : "pending" ?>">
                                <?php echo ($message->forgiven) ? "forgiven" : "pending" ?></p>
                            <a data="<?php echo $message->id ?>" href="">detail</a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>

    <?php include 'partials/sin-city/detail.php' ?>

    <img src="assets/img/sincity.jpg" alt="" class="sinbadge">
</div>
</body>
<script src="js/sin-city.js" type="text/javascript"></script>
</html>