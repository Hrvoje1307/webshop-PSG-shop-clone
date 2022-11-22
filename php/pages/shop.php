<div class="container-fluid">
    <div class="row">
        <div class="heading-top-picks">
            <h1>Top listed items</h1>
            <h3>Our top picks for this month</h3>
        </div>
        <?php require_once("./php/oop/articles.php");
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
</div>