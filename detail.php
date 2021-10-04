<?php
require_once ('functions.php');
$num = $_GET['index'];

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="./vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Great Quotes</title>

    <style>
        h1 {
            color: gold;
            margin: 20px;
            font-size: 100px;
        }
        h2 {
            color: gray;
        }
        #buttons {
            margin-left: 50px;
        }
        #detailbox {
            background-color: lightgray;
            margin: 50px;
            padding: 50px;
            border-radius: 40px;
        }
        .flexbox {
            display: flex;
        }
        #description {
            padding: 25px 100px 25px 25px;
        }
    </style>
</head>

<body>

    <div class="container text-center">
            <h1><?php echo $authors[$num]["first_name"], " ", $authors[$num]["last_name"]?> </h1>
    </div>

    <div id="detailbox" class="flexbox">

        <div class="animation-card_image">
            <img src=<?= $imgs[random_int(0, 7)] ?>>
        </div>

        <div>
            <div>
                <h2>"<?php echo $quotes[$num]["quote"] ?>"</h2>
            </div>

            <div id="description">
                <h3>Description</h3>
                <p><!--$descriptions[$num]["description"]--></p>
                <p>William Henry Gates III is an American business magnate, software
                    developer, investor, author, and philanthropist. He is a co-founder
                    of Microsoft, along with his late childhood friend Paul Allen.
                    Wikipedia</p>
            </div>

        </div>
    </div>

    <div id="buttons">
        <a href="index.php"><button type="button" class="btn btn-primary">Home Page</button></a>
        <a href="modify.php?index=<?=$num?>" ><button type="button" class="btn btn-warning">Modify</button></a>
        <a href="delete.php?index=<?=$num?>"><button type="button" class="btn btn-danger">Delete</button></a>
    </div>

</body>