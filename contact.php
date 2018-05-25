<?php
/**
* Portfiolio hemsida
*
* PHP version 7
* @category   Kategori
* @author     Lina <lina.norberg99@gmail.com>
* @license    PHP CC
* @link
*/
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Linisen</title>
        <link rel="stylesheet" href="style/generic.css">
    </head>

    <body>
        <div class="container">
            <header>
                <a href="index.html"><h1>Linisen</h1></a>
                <nav class="topnav" id="myTopnav">
                    <a href="index.html">Home</a>
                    <a href="cominfo.html">Commission Information</a>
                    <div class="dropdown">
                        <button class="dropbtn">Prices</button>
                        <div class="dropdown-content">
                            <a href="illustrations.html">Illustrations</a>
                            <a href="twitch.html">Twtich</a>
                        </div>
                    </div>
                    <a href="about.html">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </nav>
            </header>
            <div class="content contact flex">
                <form class="r1" method="post" action="uploads.php" enctype="multipart/form-data" width="200px">
                    <h2>Commission form</h2>
                    <label for="uname">Name/username</label>
                    <input id="uname" type="text" name="uname" required>
                    <br>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required>
                    <br>
                    <label for="comtype">Commission Type:</label>
                    <input id="comtype" type="text" name="comtype" required>
                    <br>
                    <label for="comdetail">Please enter som details about the commission</label>
                    <br>
                    <textarea id="comdetail" name="comdetail" placeholder="Character name:
                                                                           Character personality traits: (+ likes/dislikes)
                                                                           References:
                                                                           
                                                                               Who did the original design? (yourself, was adopted, from game/anime, etc)"></textarea>
                    <label for="rushjob">Rush Job</label>
                    <input id="rushjob" type="checkbox" name="rush">
                    <br>
                    <input type="submit" value="Submit">
                </form>
                <figure class="conimg r2">
                    <img src="img/main_art/doodle.png" alt="Drawing by Linisen">
                </figure>
            </div>
            <footer>
                <a href="http://www.twitch.tv/linisen"><img src="img/social/twitch_logo.png"></a>
                <a href="https://linisen2.deviantart.com/"><img src="img/social/deviantart_logo.png"></a>
                <a href="https://www.patreon.com/Linisen"><img src="img/social/patreon_logo.png"></a>
                <a href="https://twitter.com/Liinisen"><img src="img/social/twitter_logo.png"></a>
                <a href="https://www.instagram.com/linisen2/"><img src="img/social/instagram_logo.png"></a>
            </footer>
        </div>
        <script src="js/script.js"></script>
    </body>

    </html>
