<!DOCTYPE html>
<?php
if(!$_POST){
header('Location:../index.html');
}
session_start();
$_SESSION = $_POST;

?>

<html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="image/myk_logo_yellow.png">
        <title>My.k Design</title>
    </head>

    <body>
        <div id="wrap">
           <nav id="main_nav">
                <ul id="mainmenu">
                <li><a class="hum_menu" href="../index.html">←Back</a></li>
                </ul>
            </nav>

            <div id="content" onscroll="scrollPage()">
                <section id="contact">
                    <div class="devide_con">
                        <h1 id="profile_font2">Confirmation your message</h1>
                         <form role="form" action="mail.php" method="post">
                            <?php

                            if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                
            
                                echo "<div id='".'confirm_mail'."'>";
                                echo "<h3>Your name: "." ".$name."</h3>";
                                echo "<h3>Your email address:"." ".$email.".</h3>";
                                echo "<h3>Message</h3>";
                                echo "<h3>".$message."</h3>";
                                echo "</div>";
                                echo "<button type='".'submit'."' name='".'action2'."' class='".'btn btn-default'."'>Send</button>";
                            }else{
                                echo "<div id='".'confirm_mail'."'>";
                                echo "<h3>Sorry, you are facing an error!</h3>";
                                echo "<h3>Please try it again</h3>";
                                echo "<h3>You also can send a message on instagram</h3>";
                                echo "</div>";
                            }

                            
                            ?>
                            
                          </form>
                    </div>
                </section>

                <footer>
                    <span>&copy;2021 My.k Design</span>
                </footer>
            </div>
        </div>
        <script src="../js/js.js"></script>
    </body>

    </html>