<?php

require_once '_inc/batman-diary/functions.php';
$data = load_data();


?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<link rel="stylesheet" href="css/batmans-diary.css">
<script>
    var baseURL = '<?php echo "http://localhost/_inc/batman-diary/" ?>';
</script>
<body>
<?php include 'partials/navigation.php' ?>
<div class="col-md-3 col-md-offset-2">
    <h3>Nova staznost</h3>
    <form action="_inc/batman-diary/add-new.php" class="form-group" method="POST">
        <input type="text" name="title" class="form-control" placeholder="titulok">
        <textarea name="message" id="" cols="10" rows="5" placeholder="whats bothering you?"
                  class="form-control"></textarea>
        <button type="submit" class="btn btn-block">Odosli</button>
    </form>
    <h3>Vsetky staznosti (<?php echo count($data) ?>)</h3>
    <?php if (!empty($data)) : ?>
        <ul class="list-of-sins">
            <?php foreach ($data as $mesidz): ?>
                <li class="sin">
                    <?php echo $mesidz->title ?>
                    <a data="<?php echo $mesidz->id ?>" href="">Detail</a>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

</div>
<div class="col-md-3 col-md-offset-1">
    <h3>Detail staznosti</h3>
    <div class="detail">
        <h4>
        </h4>
        <p></p>
    </div>
</div>
</body>
<script>
    var detail = $('.detail');
    $("li.sin a").click(function (event) {
        event.preventDefault();
        var key = $(this).attr("data")
        $.ajax({
            url: baseURL + 'get-detail.php',
            data: {key: key},
            dataType: "json",
        })
            .done(function (data) {
                detail.find('h4').text(data.title);
                detail.find('p').text(data.message);
            })
            .fail(function (msg) {
            })
            .always(function () {
            });


    });

</script>
</html>