<?php

require_once '_inc/sin-city/functions.php';
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
        <form action="_inc/sin-city/add-new.php" class="form-group" method="POST">
            <input type="text" name="title" class="form-control" placeholder="title">
            <input type="text" name="author" class="form-control" placeholder="sinner">
            <textarea name="message" id="" cols="10" rows="5" placeholder="what have you done?"
                      class="form-control"></textarea>
            <button type="submit" class="btn btn-block">confess</button>
        </form>
        <h3>all sins<span>(<?php echo count($data) ?>)</span></h3>
        <?php if (!empty($data)) : ?>
            <ul class="list-of-sins">
                <?php foreach ($data as $mesidz): ?>
                    <li class="sin">
                        <?php echo $mesidz->title ?>
                        <a data="<?php echo $mesidz->id ?>" href="">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
    <div class="col-md-5 col-md-offset-1 detail">
        <h3>detail of sin</h3>
        <article>
            <h4>
                <datetime></datetime>
            </h4>
            <p></p>
            <h5></h5>
        </article>

    </div>
    <img src="assets/img/sincity.jpg" alt="" class="sinbadge">
</div>
</body>
<script>
    var detail = $('.detail');
    $("li.sin").click(function (event) {
        event.preventDefault();
        var key = $(this).find('a').attr("data");

        $.ajax({
            url: baseURL + 'get-detail.php',
            data: {key: key},
            dataType: "json"
        })
            .done(function (data) {
                detail.fadeIn(300);
                detail.find('h4').text(data.author+" : "+data.title);
                detail.find('p').text(data.message);
                detail.find('h4').append("<span>" + data.creation_date + "</span>");

            })
            .fail(function (msg) {
            })
            .always(function () {
            });

    });

</script>
</html>