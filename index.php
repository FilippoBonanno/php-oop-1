<?php

include __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Hello OOP World</h1>
    <ul>
        <?php foreach ($movies as $movie) {
            echo "<li>" . $movie->title . " " . $movie->year . " " . $movie->category . " " . $movie->restricted() . "</li>";
        }?>
    </ul>


</body>

</html>