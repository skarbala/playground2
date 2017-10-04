<?php
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Stalinist+One" rel="stylesheet">
<style>
    .prime-form {
        margin-top: 150px;
    }

    h1 {
        font-family: 'Stalinist One', cursive;
        font-size: 50px;
        color: #11106a;
    }

    div.result {
        font-family: 'Stalinist One', cursive;
        margin: 50px auto;
        font-size: 35px;
    }

    div.error {
        color: #8c0f02;
    }

    div.success {
        color: #11106a;
    }

    input.form-control, button.btn {
        border-radius: 0;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
</body>
<h1 class="text-center">Optimus Prime</h1>
<div class="container">
    <div class="col-md-6 col-md-offset-1">
        <div class="prime-form">
            <input type="number" class="form-control">
            <button class="btn btn-block">Is it prime?</button>
        </div>
        <div class="result text-center"></div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <img src="assets/img/optimus.png" alt="">
    </div>
</div>

<script>
    $('button').click(function () {
        var result = $("div.result");

        result.text('');
        var input = $('input');
        setTimeout(function () {
            if (input.val()) {
                if (isPrime(input.val())) {
                    result.text("Optimus approves").addClass("success");
                } else {
                    result.text("Optimus is sad").addClass("error");
                }
            }
        }, 1000);


    });

    function isPrime(num) {
        for (var i = 2; i < num; i++)
            if (num % i === 0) return false;
        return num !== 1;
    }


</script>
</html>
