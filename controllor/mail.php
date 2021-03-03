<!DOCTYPE html>
<?php
session_start();


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
                </ul>
            </nav>

            <div id="content" onscroll="scrollPage()">
                <section id="contact">
                    <div class="devide_con">
                         <form role="form">
                            <?php
                              if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];

                            require_once "confirmation.php";

                            mb_language("Japanese");
                            mb_internal_encoding("UTF-8"); 

                            $name = $_SESSION['name'];
                            $email = $_SESSION['email'];
                            $message = $_SESSION['message'];
                            $test = "test test"
                                            
                            $to_admin = 'yuki_au_pon@hotmail.com';
                            $title_admin = 'Application from contact form';
                            $body_admin =  "\n"
                                            ."You received a message from My.k web design contact form\n"
                                            ."You are required to reply within 3 days\n"
                                            ."\n"
                                            ."========================================\n"
                                            ."Name\n"
                                            .$name."\n"
                                            ."\n"
                                            ."Mail address\n"
                                            .$email."\n"
                                            ."\n"
                                            ."Contents\n"
                                            .$message."\n"
                                            .$test."\n"
                                            ."========================================";

                            $header_admin  = "From: ".$name."\n"."User address:". $email."\n"."X-Priority: 1"."\n"."X-Mailer: PHP/".phpversion();
                            
                            if(mb_send_mail($to_admin, $title_admin, $body_admin, $header_admin)){

                                echo "<div id='".'confirm_mail'."'>";
                                echo "<h3>Thank you!</h3>";
                                echo "<h3>Your message has been sent correctly.</h3>";
                                echo "<h3>I will be in touch within 3 days.</h3>";
                                echo"<h3>You automatiocally will be redirected to home page in 5 seconds.</h3>";
                                echo "</div>";
                      

                            session_destroy();
                            }
                        }else{
                            echo "<div id='".'confirm_mail'."'>";
                            echo "<h3>Sorry, you are facing an error!</h3>";
                            echo "<h3>Please try it again</h3>";
                            echo "<h3>You also can send a message on instagram</h3>";
                            echo"<h3>You automatiocally will be redirected to home page in 5 seconds.</h3>";
                            echo "</div>";

                            session_destroy();
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
        <script type="text/javascript">
                setTimeout(function() {
                window.location.href = "../index.html";
                }, 8000);
        </script>
        <script src="../js/js.js"></script>
    </body>

    </html>