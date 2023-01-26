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
    <h1 class="text-center intro">FILM RECOMMENDER</h1>
    <h3 class="text-center intro">VALUTA I SEGUENTI FILM E FATTI ISPIRARE DAI NOSTRI CONSIGLI</h3>
    <P class="intro">Con film recommender, ti consigliamo film in base ai tuoi gusti personali. Non devi far altro che valutare i seguenti film con un voto da 1 a 5 stelle, o premere il pulsante "Non l'ho visto" se ti manca alla tua collezione. Inizia ora!</P>
    <?php
        stampacardfilm();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="codice.js"></script>
</body>
</html>