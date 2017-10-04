<?php
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navigation.php' ?>
<style>
    body {
        background-color: #f5f5f5;
    }

    h1 {
        text-transform: uppercase;
        font-size: 50px;
        font-weight: 600;
        color: #be2d2b;
        text-shadow: 2px 2px #9c2424;
    }

    h2 {
        color: #008f4a;
    }

    h1, h2 {
        font-family: 'Gloria Hallelujah', cursive;
    }

    .current-wait-time p {
        font-size: 30px;
        font-weight: 600;
    }

    .current-wait-time span {
        color: #be2d2b;
    }

    .error {
        border: 2px solid #be2d2b;;
    }

    div.current-wait-time {
        margin-top: 50px;
    }

    div.row {
        margin: 30px 0;
    }

</style>
</body>
<div class="container">
    <div class="text-center">
        <h1>wait for it !</h1>
    </div>
    <div class="col-sm-6 col-sm-offset-3">
        <div class="row">
            <h2>Wait for text</h2>
            <div class="input-group">
                <input type="text" class="form-control" id="waitForTextInput" placeholder="Your text will appear here">
                <span class="input-group-btn">
                <button class="btn-success btn" type="button" id="startWaitForText">Get the text</button>
            </span>
            </div>
        </div>
        <div class="row">
            <h2>Wait for class</h2>
            <div class="input-group">
                <input type="text" class="form-control" id="waitForProperty"
                       placeholder="This input will get a class">
                <span class="input-group-btn">
                <button class="btn-success btn" type="button" id="startWaitForProperty">Get the property</button>
            </span>
            </div>
        </div>

        <div class="current-wait-time text-center"></div>
    </div>
</div>
<script>
    $('#startWaitForText').click(function () {
        setTimeout(function () {
            $('#waitForTextInput').val("I am your father !!!");
        }, getRandomResponseTime());

    });

    $('#startWaitForProperty').click(function () {
        setTimeout(function () {
            $('#waitForProperty').addClass('error');
        }, getRandomResponseTime());
    });

    function getRandomResponseTime() {
        var div = $('.current-wait-time');
        var number = Math.round(Math.random() * (3500 - 1000) + 1000);
        div.html('<p>Work in progress</p>');
        setTimeout(function () {
            div.html('<p>' +
                'Response time was: <span>' + number + '</span> miliseconds</p>');
        }, number);
        return number;
    }

</script>
</html>
