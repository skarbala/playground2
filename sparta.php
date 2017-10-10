<?php
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<style>
    @font-face {
        font-family: '300';
        src: url("assets/fonts/adam.ttf");
    }

    h1 {
        font-family: '300', "sans-serif";

    }

    h1 {
        font-size: 80px;
    }
    h1,h2{
        color:#be2d2b;
    }

    body::after {
        content: "";
        background: url("assets/img/300.jpg") no-repeat center center fixed;
        background-size: cover;
        opacity: 0.2;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
        z-index: -1;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <div class="text-center">
        <h1>
            300
        </h1>
        <h2>hriechov hrmenych</h2>
    </div>

</div>

</body>
</html>
