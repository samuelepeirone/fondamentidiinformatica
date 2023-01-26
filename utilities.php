<?php
    function connetti($database){
        $conn = mysqli_connect("localhost", "root", "", $database);
        return $conn;
    }
    function stampacardfilm(){
        $conn = connetti("film_recomender");
        $s = "SELECT id_film, Title, Director, Duration, ReleaseYear, img FROM mytable";
        $query = mysqli_query($conn, $s);
        $n = mysqli_num_rows($query);
        if($n==0){
            echo "Non funziona :(";
        }
        else{
        ?>
            <form action="calcolo_recommender.php" method="POST">
        <?php
            for($i=1; $i<=$n; $i++){
                $riga = mysqli_fetch_assoc($query);
                $titolofilm = $riga["Title"];
                $registafilm = $riga["Director"];
                $durata = $riga["Duration"];
                $anno = $riga["ReleaseYear"];
                $id_film = $riga["id_film"];
                $immagine = $riga["img"];
                ?>
                <div class="card_film">
                    <?php
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $immagine ).'"/>';
                    ?>
                    <div class="card_film-body">
                        <h2>
                            <?php echo $titolofilm; ?>
                        </h2>
                        <h3>
                            <?php echo $registafilm; ?>
                        </h3>
                        <h4>
                            <?php echo $anno; echo " &#8226; "; echo $durata; ?>
                        </h4>
                        <p class="trattino"> - </p>
                        <p>valuta questo film</p>
                        <div class="rating">
                            <i class="bi bi-star" id="1star" onclick="starSelector(this.id,<?php echo $i-1; ?>)"></i>
                            <i class="bi bi-star" id="2star" onclick="starSelector(this.id,<?php echo $i-1; ?>)"></i>
                            <i class="bi bi-star" id="3star" onclick="starSelector(this.id,<?php echo $i-1; ?>)"></i>
                            <i class="bi bi-star" id="4star" onclick="starSelector(this.id,<?php echo $i-1; ?>)"></i>
                            <i class="bi bi-star" id="5star" onclick="starSelector(this.id,<?php echo $i-1; ?>)"></i>
                        </div>
                        <input type="number" id="rate_film" value="0" min="0" max="5" name="<?php echo $id_film; ?>">
                    </div>
                    <button onclick="starSelector(this.id,<?php echo $i-1; ?>)" id="nonvisto" disabled>Non l'ho visto</button>
                </div>
                <?php
            }
        }
        ?>
        <br><br>
        <div class="text-center invio">
            <input type="submit" value="Scopri i risultati! " class="submitbutton text-center"> 
        </div>
        </form>
        <?php
        mysqli_close($conn);
    }
    function stampaconsigliati(){
        $conn = connetti("film_recomender");
        $s = "SELECT p.id_utente, distanza
        FROM rate_pubblico AS p JOIN utente_rate AS u";
        $query = mysqli_query($conn, $s);
        $n = mysqli_num_rows($query);
    }
?>