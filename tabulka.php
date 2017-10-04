<?php
$rows = rand(50, 100);
$names = ["Giovanni", "Florian", "Nathanuel", "Vendelin", "Bendegúz", "Enrigue", "Zalán", "Alfonz", "Nimród", "Jean-Pierre", "Migel"];
$surnames = ["Premrdal", "Toth", "Herák", "Bihary", "Vyhonský", "Šuška", "Adamec", "Obsust", "Plesivec", "Fekete", "Kundaker", "Holochuj"];

function getEmailAddress($name, $surname)
{
    return strtolower($name) . "." . strtolower($surname) . "@slovensko.sk";
}

function getRandomName()
{
    global $names;
    return $names[array_rand($names)];
}

function getRandomSurname()
{
    global $surnames;
    return $surnames[array_rand($surnames)];
}

?>
<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<style>
    body {
        background-color: #352f33;
    }

    * {
        color: #ed69ff;
    }

    h1 {
        font-family: Montserrat, serif;
        font-size: 50px;
    }

    table {
        font-size: 18px;
        margin-top: 50px;
    }

    .table > thead > tr > th, .table > thead > tr {
        border-bottom: 2px solid #b095ae;
    }

    .table > tbody > tr > td, .table > tbody > tr > th,
    .table > tfoot > tr > td, .table > tfoot > tr > th,
    .table > thead > tr > td, .table > thead > tr > th {
        border-top: 1px solid #b095ae;
    }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Nahodna tabulka</h1>
    <div class="row">
        <table class="table">
            <thead>
            <th>Id</th>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Email</th>
            </thead>
            <tbody>
            <?php for ($i = 1; $i < $rows + 1; $i++) {
                $name = getRandomName();
                $surname = getRandomSurname();
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";
                echo "<td>";
                echo $name;
                echo "</td>";
                echo "<td>";
                echo $surname;
                echo "</td>";
                echo "<td>";
                echo getEmailAddress($name, $surname);
                echo "</td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
    </div>
</body>
</html>