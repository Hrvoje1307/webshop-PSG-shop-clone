<div class="container-fluid">
    <div class="row">
        <div class="heading-top-picks">
            <h1>Top listed items</h1>
            <h3>Our top picks for this month</h3>
        </div>
        <div class="items">
            <div class="items">
                <?php require_once("oop/articles.php"); ?>
                <table class="item-table">
                    <tr>
                        <?php
                            foreach($article as $articles){
                                echo '<td>
                                        <h3><b>'.$articles->get_name().'</b></h3><br/>
                                        <img src="'.$articles->get_url().'"><br/>
                                        <p>'.$articles->pricePrint().'</p><br/>
                                        <button class="btn btn-primary" onclick="addToCart('.$articles->get_id().')">Add to cart</button>
                                </td>';
                            }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>