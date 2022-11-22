<?php
    function formPrint() {
        echo '<div class="container">
        <div class="row">
            <div class="col">
                <div class="form-contact">
                    <div class="form-borders">
                        <h1>Contact us</h1>
                        <form method="POST">
                            <h2>Name:</h2>
                            <input type="text" class="name" name="name" placeholder="Your name" required>
                            <h2>Surname:</h2>
                            <input type="text" class="name" name="surname" placeholder="Your surname" required>
                            <h2>Email</h2>
                            <input type="text" class="email" name="email" placeholder="your@email.com" required>
                            <h2>Phone number:</h2>
                            <input type="text" class="number" name="number" placeholder="+3859/995-6189" required>
                            <h2>Message</h2>
                            <textarea name="message" id="message" cols="20" rows="1" placeholder="Your message"></textarea><br>
                            <input id="submit-contact" type="submit" class="btn btn-dark">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>';
    }

        if(!isset($_SESSION["username"])){
            echo '<div class="container">
                <div class="row">
                    <div class="col>
                        <div class="heading-contact" style="display:grid;justify-content:center;align-items:center;margin:20px;">
                            <h1 class="text-danger">Sorry, but you have to be log in!</h1>
                            <img src="./images/nologin.png" style="width:600px;height:600px;">
                        </div>
                    </div>
                </div>
            </div>';
        }if(isset($_SESSION["username"])) {
            formPrint();
        }

        $check=true;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(preg_match("/^\+3859\d\/\d{3}-\d{3,4}$/", $broj_mobitela)==false){
                echo '<h1 class="text-danger">Wrong phone number!</h1>';
                $check=flase;
            }
            else if(filter_val($email, FILTER_VALIDATE_EMAIL)==false){
                echo '<h1 class="text-danger">Wrong phone number!</h1>';
                $check=false;
            }
        }
        else if($check==true && $_SERVER["REQUEST_METHOD"]=="POST" && $_GET['page']=="kontakt"){
            echo '<div><h1 class="text-danger">Message has been sent!</h1>
                    </div>';
        }

?>