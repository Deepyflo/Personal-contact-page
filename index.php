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
            <form action="send.php" method="post">
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
            </form>
            <div class="popupBox">
                <div>
                    <p><img src="./assets/img/logo_git.png" alt="logo Github">Deepyflo</p>
                </div>
                <div>
                    <p><img src="./assets/img/logo-linkedin.png" alt="logo Linkedin">/florian-renders-04556a21a</p>
                </div>
                <div>
                    <p><img src="./assets/img/png-clipart-gmail-gmail.png" alt="logo Gmail">florianrenders@gmail.com</p>
                </div>
                <div>
                    <p><img src="./assets/img/Discord-Logo-Black.png" alt="logo Discord">𝕯𝖊𝖊𝖕_𝕱𝖑𝖔𝖜#2500</p>
                </div>
            </div>
        </main>
        <footer>
            <button id="btnPopup" class="button">Contact</button>
        </footer>

        <?php

        ?>
    </body>
</html>