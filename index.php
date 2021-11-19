<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title>Contact</title>
    </head>
    <body>
        <header>
            <h1>Florian <img src="./assets/img/logo-deep.png" alt="logo Deep_Flow"> Renders</h1>
        </header>
        <main>
            <form action="index.php" method="post">
                <h2>Contact</h2><br>
                <input type="text" name="name" placeholder="Name"><br>
                <div class="radioDiv">
                    <input type="radio" name="gender" value="male" checked="checked"><label for="gender">Male</label>
                    <input type="radio" name="gender" value="female"><label for="gender">Female</label>
                    <input type="radio" name="gender" value="other"><label for="gender">Other</label> <br>
                </div>
                <input type="email" name="mail" placeholder="Mail"><br>
                <input type="text" name="company" placeholder="Company"><br>
                <select name="object">
                    <option value="other">Other</option>
                    <option value="job">Job</option>
                    <option value="Internship">Internship</option>
                    <option value="hello">Just hello</option>
                </select><br>
                <input type="textarea" name="msg" id="msg" class="msg" placeholder="Your message..."><br>
                <div class="btnDiv">
                <input type="submit" value="Send" class="button">
                </div>
                <?php
                    if (isset($_POST["name"]) AND isset($_POST["mail"]) AND isset($_POST["company"]) AND isset($_POST["msg"])) {
                        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
                        $mail = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
                        $company = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
                        $msg = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
                        $gender = $_POST["gender"];
                        $object = filter_var($_POST["object"], FILTER_SANITIZE_STRING);
                        $me = "florianrenders@gmail.com";
                        
                        //mail($me, "Quelqu'un a envoyé un message via le fomrulaire de contact pour" . $object, "Quelqu'un a envoyé un message via le fomrulaire de contact pour" . $object . '/n Nom : ' . $name . '/n Mail : ' . $mail . '/n Genre : ' . $gender . '/n Companie : ' . $company . '/n Message : /n' . $msg);
                        
                        //Import PHPMailer classes into the global namespace
                        //These must be at the top of your script, not inside a function
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\SMTP;
                        use PHPMailer\PHPMailer\Exception;

                        require './PHPMailer-master/src/Exception.php';
                        require './PHPMailer-master/src/PHPMailer.php';
                        require './PHPMailer-master/src/SMTP.php';

                        //Create an instance; passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                            $mail->isSMTP();
                            $mail->Host = 'smtp.mailtrap.io';
                            $mail->SMTPAuth = true;
                            $mail->Port = 2525;
                            $mail->Username = 'e7837e8788f36d';
                            $mail->Password = 'eab9cf82629c3c';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('from@example.com', 'Mailer');
                            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
                            $mail->addAddress('ellen@example.com');               //Name is optional
                            $mail->addReplyTo('info@example.com', 'Information');
                            $mail->addCC('cc@example.com');
                            $mail->addBCC('bcc@example.com');

                            //Attachments
                            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Here is the subject';
                            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        echo "Message correctly sended";
                    } else {
                        echo "Something wrong...";
                    }
                ?>
            </form>
            <div class="popupBox">
                <div>
                    <a href="https://github.com/Deepyflo"><img src="./assets/img/logo_git.png" alt="logo Github"><span>Deepyflo</span></a>
                </div>
                <div>
                    <a href="https://www.linkedin.com/in/florian-renders-04556a21a/"><img src="./assets/img/logo-linkedin.png" alt="logo Linkedin"><span>/florian-renders-04556a21a</span></a>
                </div>
                <div>
                    <img src="./assets/img/png-clipart-gmail-gmail.png" alt="logo Gmail"><span>florianrenders@gmail.com</span>
                </div>
                <div>
                    <img src="./assets/img/Discord-Logo-Black.png" alt="logo Discord"><span>𝕯𝖊𝖊𝖕_𝕱𝖑𝖔𝖜#2500</span>
                </div>
            </div>
        </main>
        <footer>
            <button id="btnPopup" class="button">Contact</button>
        </footer>

        
        <script src="./assets/js/script.js"></script>
    </body>
</html>