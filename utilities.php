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
            <div class="row justify-content-center">     
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
                <div class="col col-lg-3 m-2">
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
                            <input type="number" readonly id="rate_film" value="0" min="0" max="5" name="<?php echo $id_film; ?>">
                        </div>
                        <button onclick="starSelector(this.id,<?php echo $i-1; ?>)" id="nonvisto" disabled>Non l'ho visto</button>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        </div>
        <div class="row justify-content-center">
            <input type="submit" value="Invia" class="submitbutton">
        </div>
        </form>
        
        <?php
        mysqli_close($conn);
    }
    function Raccomanda(){
        $conn = connetti("film_recomender");
        $s = "SELECT * FROM utente_rate";
        $utente_rate_table = mysqli_query($conn, $s);
        $s = "SELECT p.*, (POWER (p.1 - u.1, 2)+POWER (p.2 - u.2, 2)+POWER (p.3 - u.3, 2)+POWER (p.4 - u.4, 2)+
                            POWER (p.5 - u.5, 2)+POWER (p.6 - u.6, 2)+POWER (p.7 - u.7, 2)+POWER (p.8 - u.8, 2)+
                            POWER (p.9 - u.9, 2)+POWER (p.10 - u.10, 2)+POWER (p.11 - u.11, 2)+POWER (p.12 - u.12, 2)+
                            POWER (p.13 - u.13, 2)+POWER (p.14 - u.14, 2))/14 distanza
            FROM rate_pubblico p JOIN utente_rate u
            ORDER BY distanza
            LIMIT 1";
        $rate_pubblico_table = mysqli_query($conn, $s);
        $punteggiofilmconsigliato = 0;
        $filmconsigliato = "vuoto";
        $riga_p = mysqli_fetch_assoc($rate_pubblico_table);
        $riga_u = mysqli_fetch_assoc($utente_rate_table);
        for($i=1; $i<=14; $i++){
            if($riga_p[$i]!=0 && $riga_p[$i]>$punteggiofilmconsigliato && $riga_u[$i]==0){
                $filmconsigliato = $i;
                $punteggiofilmconsigliato = $riga_p[$i];
                $utente = $riga_p["id_utente"];
            }
        }
        return $filmconsigliato;
    }
    function stampaconsiglio(){
        $idfilmconsigliato = Raccomanda();
        $conn = connetti("film_recomender");
        $s = "SELECT * FROM mytable WHERE id_film=$idfilmconsigliato";
        $filmconsigliato = mysqli_query($conn, $s);
        $riga = mysqli_fetch_assoc($filmconsigliato);
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
        </div>
        <button id="aggiungilista" onclick="aggiungilista()"><i class="bi bi-bookmark" id="iconaggiungi"></i>&nbsp;&nbsp;Aggiungi alla mia lista</button>
    </div>
    <?php
    }
?>