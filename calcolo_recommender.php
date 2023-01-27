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
    <?php
        $conn = connetti("film_recomender");
        $s = "DELETE FROM utente_rate WHERE 1=1";
        $query = mysqli_query($conn, $s);
        $s = "SELECT id_film FROM mytable";
        $query = mysqli_query($conn, $s);
        $n = mysqli_num_rows($query);
        $s2 = "INSERT INTO utente_rate VALUES (88, ";
        for($i=0; $i<$n; $i++){
            $s2 = $s2.$_POST[$i+1];
            //$film[$i] = $_POST[$i+1];
            if($i<$n-1){
                $s2 = $s2.", ";
            }
        }
        $s2 = $s2.");";
        $query2 = mysqli_query($conn, $s2);
    ?>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="titolocalcolo">
                    <h3 class="text-center title-paragraph">Ecco quello che abbiamo scelto per te: </h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-4">
                <?php  
                    stampaconsiglio();
                ?>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p class="text-center">
            <a href="index.php">film recommender</a><br><br>
            Copyright ©2022 All rights reserved
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="codice.js"></script>
</body>
</html>