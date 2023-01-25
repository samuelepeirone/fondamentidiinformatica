<?php
    session_start();
    include "utilities.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="card_film">
        <img src="media/img/cinema.jpg">
        <div class="card_film-body">
            <h2>Titolo film</h2>
            <p>valuta questo film</p>
            <div class="rating">
                <i class="bi bi-star" id="1star" onclick="starSelector(this.id, 0)"></i>
                <i class="bi bi-star" id="2star" onclick="starSelector(this.id, 0)"></i>
                <i class="bi bi-star" id="3star" onclick="starSelector(this.id, 0)"></i>
                <i class="bi bi-star" id="4star" onclick="starSelector(this.id, 0)"></i>
                <i class="bi bi-star" id="5star" onclick="starSelector(this.id, 0)"></i>
            </div>
            <input type="number" id="rate_film" value="0">
        </div>
        <button onclick="starSelector(this.id, 0)" id="nonvisto" disabled>Non l'ho visto</button>
    </div>
    <div class="card_film">
        <img src="media/img/cinema.jpg">
        <div class="card_film-body">
            <h2>Titolo film 2</h2>
            <p>valuta questo film</p>
            <div class="rating">
                <i class="bi bi-star" id="1star" onclick="starSelector(this.id, 1)"></i>
                <i class="bi bi-star" id="2star" onclick="starSelector(this.id, 1)"></i>
                <i class="bi bi-star" id="3star" onclick="starSelector(this.id, 1)"></i>
                <i class="bi bi-star" id="4star" onclick="starSelector(this.id, 1)"></i>
                <i class="bi bi-star" id="5star" onclick="starSelector(this.id, 1)"></i>
            </div>
            <input type="number" id="rate_film" value="0">
        </div>
        <button onclick="starSelector(this.id, 1)" id="nonvisto" disabled>Non l'ho visto</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="codice.js"></script>
</body>

</html>