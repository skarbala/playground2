<?php
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navigation.php' ?>
<style>
    h1 {
        font-family: 'Gloria Hallelujah', cursive;
        text-transform: uppercase;
        font-size: 50px;
        font-weight: 600;
        color: #be2d2b;
    }

    ul.minions {
        list-style: none;
    }

    img {
        width: 70px;
        margin:20px;
    }

    ul.minions li {
        float: left;
        margin: 10px auto;
    }
</style>
</body>
<div class="container">
    <div class="text-center">
        <h1>Minion time</h1>
        <div class="col-md-8 col-md-offset-2">
            <input type="number" class="form-control">
            <button class="btn btn-warning btn-block">Get them</button>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <ul class="minions">
            </ul>
        </div>
    </div>

</div>
<script>
    $('button').click(function () {
        for (i = 0; i < $('input').val(); i++) {
            setTimeout(function () {
                addMinion($('.minions'));
            }, 1000 * i);

        }
    });
    function addMinion(element) {
        element.append('<li><img src="assets/img/minion.png" alt=""></li>');
    }
</script>
</html>
