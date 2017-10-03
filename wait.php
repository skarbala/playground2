<?php
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navigation.php' ?>
</body>
<div class="container">
    <div class="text-center">
        <h1>wait !</h1>
    </div>
    <div>
        <h2>Wait for text</h2>
        <input type="text" id="waitForTextInput" placeholder="wait for text">
        <button class="btn-success btn" id="startWaitForText">Start</button>
    </div>
    <div>
        <h2>Wait for property</h2>
        <button class="btn-success btn" id="startProperty">Start</button>
    </div>

    <div>
        <h2>Wait for number of elements</h2>
        <input type="number" placeholder="number of elements to generate">
        <button class="btn-success btn" id="startProperty">Start</button>
    </div>

    <div>
        <h2>Wait for invisibility</h2>
        <button class="btn-success btn" id="startProperty">Start</button>
    </div>

</div>
<script>
    $('#startWaitForText').click(function () {
        setTimeout(function () {
            $('#waitForTextInput').text("Hello");
        }, getRandomArbitrary());


    });

    function getRandomArbitrary() {
        var number = Math.random() * (2000 - 1000) + 1000;
        console.log(number);
        return number;
    }

</script>
</html>
