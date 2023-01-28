<?php
    session_start();
    include "utilities.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film recommender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <nav>
        <a href="index.php">film recommender</a>
    </nav>
    <header class="hero d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col col-lg-10">
                <h1 class="title-paragraph text-center text-white">Valuta i seguenti film e fatti ispirare dai nostri consigli</h1>
                <p class="text-center text-white" style="margin-top: 1rem; font-weight: 200;">Con film recommender, ti consigliamo film in base ai tuoi gusti personali.<br>
                                    Non devi far altro che <b>valutare i seguenti film</b> con un voto da 1 a 5 stelle, o premere il pulsante "Non l'ho visto" se ti manca alla tua collezione.
                <br><br><span style="font-weight: 600; font-size: 1.1rem;"> Inizia ora!</span></p>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <?php
                stampacardfilm();
            ?>
        </div>
    </section>
    <footer>
        <p class="text-center">
            <a href="index.php">film recommender</a><br><br>
            Copyright ©2022 All rights reserved</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="codice.js"></script>
</body>
</html>