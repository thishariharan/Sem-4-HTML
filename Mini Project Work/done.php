<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shark Dice - Common</title>
    <script src="throw.js" type="text/javascript"></script>
    <link rel="stylesheet" href="getcss.css"> 
</head>
<body id="whl">
        <div id="tit">
            <div id="hd">
                <a href="smple.html" style="text-decoration: none;color: red;"><h1>SHARK DICE</h1></a></div>
                <button onclick="cks()" id="ls"></button>
        </div>
        <div id="scs">
            <h2>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="smple.html">HOME</a></span>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="#du">DONATE US</a></span>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="#cu">CONTACT US</a></span>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="#ab">ABOUT</a></span>
            </h2>
        </div>
        <div id="bod">
                <img id="ad1" src="rad.jpg" alt="leftad">
            <div id="mn">
            <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $nm = $_COOKIE['shkie'];
                            $all = "DELETE from current_match where Chaos > 2";
                            if (mysqli_query($conn, $all)) {
                                
                            }                        ?>
                        <H1 style="justify-content:center;margin-left:10%;">HOORAY!!, We just won the Match</H1>
                        <a href="smple.html" class="rsg3">Get Back to HOME</a><br><br>                
                <div id="dets">
                    <h4 class="alls2">Also us</h4>
                    <a href="https://www.facebook.com/"><img class="gto" src="fb.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img class="gto" src="inst.png" alt="Instagram"></a>
                    <a href="https://www.youtube.com/"><img class="gto" src="yt.png" alt="Youtube"></a>
                    <h5 class="alls2">
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="smple.html">HOME</a></span>
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="#du">DONATE US</a></span>
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="#cu">CONTACT US</a></span>
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="#ab">ABOUT</a></span>
                    </h5>
                    <p class="alls2">&copy; Rights Reserved from Year 2023 by Us (Shark Dice Company)</p>                </div>            </div>
                <img id="ad2" src="rad.jpg" alt="rightad">
        </div></body></html>
