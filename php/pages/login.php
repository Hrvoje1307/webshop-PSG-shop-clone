<?php
    function printForm(){
        echo '
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-form">
                        <div class="color-div">
                            <h1>Log in</h1>
                            <div class="form-div">
                                <form method="POST">
                                    <h2>Username:</h2>
                                    <input type="text" class="username" placeholder="username" name="username"><br>
                                    <h2>Password:</h2> 
                                    <input type="password" class="password" placeholder="*******" name="password"><br>
                                    <input id="submit"class="btn btn-warning" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    

    if($_GET["page"]=="login"){
        if(!isset($_SESSION["username"])) {printForm();}
        if(isset($_SESSION["username"])){
            if($_SESSION["username"]!="admin"){
                printForm();
                echo '<div class="text-center text-danger">You entered wrong informations!</div>';
            }else {
                echo'<div class="login-successful"><div class="text-center text-success"><h1>You logged in succesful!</h1></div> 
                    <div class="logout">
                        <button class="btn btn-danger" onclick="logout()">LOGOUT</button>
                    </div></div>
                ';
            }
        }
    }
    if($_SERVER["REQUEST_METHOD"]=="POST" && $_GET["page"]=="login"){
        $user=$_POST["username"];
        $pass=$_POST["password"];

        if($user=="admin" && password_verify($pass, '$2y$10$Ja2ShMpt57XxL5/tLKgXhOxpQ8ZXQB7gxBtNMchnFUE/ad9ih5wZm')){
            $_SESSION["username"]="admin";
            die(header("Location: index.php?page=login"));
        }else {
            echo "<div class='text-center text-danger'>Invalid login informations!</div>";
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"]=="logout"){
            unset($_SESSION["username"]);
        }
    }
?>

