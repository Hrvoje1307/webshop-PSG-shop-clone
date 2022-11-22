<?php
    require_once("./php/oop/articles.php");
    if($_GET["page"]=="cart"){
        $cart=array();
        if(isset($_COOKIE["cart"])){
            $cart=json_decode($_COOKIE["cart"]);
        }
        if(isset($_GET["action"]) && isset($_GET["id"])){
            if($_GET["action"]=="added"){
                $cart[]=$_GET["id"];
                setcookie("cart",json_encode($cart),time()+5000);
            } 
        }
    }

?>

<h1 class="heading-cart">Cart</h1>
<?php
    require_once("./php/oop/articles.php");
    if(isset($_COOKIE["cart"])){
        $totalPrice=0;
        foreach($cart as $id){
            foreach($article as $key){
                if($id == $key->get_id()){
                    echo'<div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="cart-print">
                                    <p>'.$key->get_name().'</p>
                                    <div class="id-price-print">
                                        <p>'.$key->get_id().' | '.$key->pricePrint().'</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>';
                    $totalPrice+=$key->get_price();
                }
            }
        }
        echo '<div class="totalPrice"><b>Total price:</b>'.number_format($totalPrice, 2, ',', '.')." € </div>";;
    }
?>