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
    .current-wait-time p{
        font-size: 30px;
        font-weight: 600;
    }
</style>
</body>
<div class="container">
    <div class="text-center">
        <h1>wait !</h1>
    </div>
    <div class="form-group">
        <h2>Wait for text</h2>
        <input type="text" class="form-control" id="waitForTextInput" placeholder="wait for text">
        <button class="btn-success btn" id="startWaitForText">Start</button>
    </div>
    <div>
        <h2>Wait for property</h2>
        <input type="text" id="waitForTextInput" placeholder="wait for text">
        <button class="btn-success btn" id="startProperty">Start</button>
    </div>
    <div>
        <h2>Wait for number of elements</h2>
        <div class="input-group">
            <input type="number" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-success" type="button" id="hitme">Start!</button>
            </span>
        </div>
    </div>
    <div>
        <h2>Wait for invisibility</h2>
        <button class="btn-success btn" id="startProperty">Start</button>
    </div>
    <div class="current-wait-time text-center">

    </div>
</div>
<script>
    $('#startWaitForText').click(function () {
        setTimeout(function () {
            $('#waitForTextInput').val("Hello");
        }, getRandomArbitrary());

    });

    function getRandomArbitrary() {
        var number = Math.round(Math.random() * (2000 - 1000) + 1000);
        console.log(number);
        setTimeout(function () {
            $('.current-wait-time')
                .append('<p>' +
                    'Wait time was:'+number+' miliseconds</p>');
        }, number);

        return number;
    }

</script>
</html>
