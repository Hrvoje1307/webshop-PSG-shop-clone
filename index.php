<html>
    <head>
        <title>Psg fan shop</title>
        <link rel="icon" href="./images/psg.png">

        <!-- CSS -->
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/pocetna.css">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <header><?php require_once("./php/header.php");?></header>
        <main>
            <?php
                $page=$_GET['page'];
                if(!isset($page)) {
                    die(header("Location: index.php?page=pocetna"));
                }else if($page === "pocetna"){
                    require_once("./php/pocetna.php");
                }
            ?>
        </main>
    
        <!-- JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="./js/script.js"></script>
    </body>
</html>