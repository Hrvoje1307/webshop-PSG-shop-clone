<?php
    class Articles {
        private $id;
        private $name;
        private $url;
        private $price;

        function __construct($id, $name, $url, $price) {
            $this->id = $id;
            $this->name = $name;
            $this->url = $url;
            $this->price = $price;
        }

        function get_id() { return $this->id; }
        function get_name() { return $this->name;}
        function get_url() { return $this->url;}
        function get_price() { return $this->price;}

        function pricePrint() {
            return strval(number_format($this->price, 2,',','.'))."$";
        }
    }

    $article=array();
    $article ["1"]=new Articles("1","First kit","./images/items/first-kit.png","90");
    $article ["2"]=new Articles("2","Second kit","./images/items/second-kit.png","90");
    $article ["3"]=new Articles("3","Third kit","./images/items/third-kit.png","90");
    $article ["4"]=new Articles("4","Goalkeeper kit","./images/items/goal-kit.png","92");
    $article ["5"]=new Articles("5","Psg hoodie","./images/items/hoodie.png","60");

    // $xml = simplexml_load_file('shop.xml');

    // foreach($xml as $x) {
    //     $article[".$x->id."] = new Articles(strval($x->id), strval($x->name), strval($x->url), strval($x->price));
    // }

?>