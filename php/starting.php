<div class="container-fluid">
    <div class="row">
        <div class="heading-top-picks">
            <h1>Top listed items</h1>
            <h3>Our top picks for this month</h3>
        </div>
        <?php require_once("oop/articles.php");
            foreach($article as $key){
                echo' <div class="col">
                <section class="items-section">
                    <div class="items">
                        <img src="'. $key->get_url() .'"><br>
                        <span><b>'. $key->get_name() .'</b></span> <br>
                        <span>'. $key->pricePrint() .'</span> <br><br>
                        <button class="btn btn-primary" onclick="addToCart('. $key->get_id().')">Add to cart</button>
                    </div>
                </section>
            </div>';
            }
        ?>
    </div>
    <div class="row">
        <div class="col">
            <div class="text-part">
                <h1>Something about us...</h1>
                <p>Paris Saint-Germain Football Club, commonly referred to as Paris Saint-Germain, Paris,<br>
                Paris SG or simply PSG is a professional football club based in Paris, France.<br>
                They compete in Ligue 1, the top division of French football. As France's most successful<br> 
                club, they have won over 40 official honours, including ten league titles and one major <br>
                European trophy. Their home ground is the Parc des Princes. </p>
            </div>
        </div>
        <div class="col">
            <div class="champions-image-div">
                <img src="./images/champions.png" alt="champions" class="champions">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="trophies"> 
            <div class="col">
                <section>
                   <img src="./images/league1-trophy.png" alt="league1-trophy">
                   <h3>Ligue 1<br></h3>
                   <h1 id="numTrophies">0</h1> 
                </section>
            </div>
            <div class="col">
                <section>
                   <img src="./images/french-cup-trophy.png" alt="french-cup-trophy">
                    <h3>French Cup<br></h3>
                    <h1 id="numTrophies">0</h1> 
                </section>
            </div>
            <div class="col">
                <section>
                    <img src="./images/league-cup.png" alt="league-cup">
                    <h3>French<br> League Cup</h3>
                    <h1 id="numTrophies">0</h1>
                </section>
            </div>
            <div class="col">
                <section>
                    <img src="./images/trophy-champions.png" alt="trophy-champions">
                    <h3>Champions <br> Trophy</h3>
                    <h1 id="numTrophies">0</h1>
                </section>
            </div>
            <div class="col">
                <section>
                    <img src="./images/winnerscup-trophy.png" alt="winnerscup-trophy">
                    <h3>UEFA Cup<br> Winners Cup</h3>
                    <h1 id="numTrophies">0</h1>
                </section>
            </div>
        </div> 
    </div>
</div>
