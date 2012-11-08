<!DOCTYPE html>

<html>

<head>
    <title>Dan Trachtman</title>

    <!-- Typekit (for special font) -->
    <script type="text/javascript" src="//use.typekit.net/rdz0bat.js"></script>
    <script type="text/javascript">try {
        Typekit.load();
    } catch (e) {
    }</script>

    <meta charset="utf-8"/>
    <meta name="description" content="Dan Trachtman's website"/>

    <meta name="viewport" content="width=device-width, maximum-scale=1.0"/>
    <!-- This line prevents site from getting blow up on a tablet -->

    <link rel="stylesheet" media="all" href="css/main.css"/>
    <link rel="stylesheet" media="all" href="css/home.css"/>
    <link rel="stylesheet" media="all" href="css/nonprofit.css"/>
    <link rel="stylesheet" media="all" href="css/corporate.css"/>
    <link rel="stylesheet" media="all" href="css/photography.css"/>
    <link rel="stylesheet" media="all" href="css/artsandcrafts.css"/>

    <script src="lib/modernizr/modernizr.custom.37797.js"></script>
    <script type="text/javascript" src="lib/jquery/jquery-1.8.2.min.js"></script>

    <script src="lib/fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="lib/fancybox/jquery.fancybox.css" media="screen"/>

    <script src="js/parallax.js"></script>
    <script src="lib/blackandwhite/jQuery.BlackAndWhite.js"></script>

    <script type="text/javascript" src="lib/carousel/simple.carousel.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
<div id="navmarker" style="display:none;"></div>

<div id="wrapper">

<!-------------------------->
<!-- NAVIGATION: MAIN     -->
<!-------------------------->

<div id="mainnav">

    <img src="img/nav/top.png" width="117" height="184" alt="nav top">

    <div id="top">
        <a id="home-link" href="javascript:void(0)">Dan <br/> Trachtman </a>
    </div>

    <ol id="firstnav">

        <li class="navheader" style="padding-left:5px;">WORK</li>
        <li><a id="nonprofit-link" href="javascript:void(0)">&nbsp; NONPROFIT</a></li>
        <li><a id="corporate-link" href="javascript:void(0)">&nbsp; CORPORATE</a></li>

        <li class="navheader" style="padding-left:5px; padding-top:10px;">PLAY</li>
        <li><a id="photography-link" href="javascript:void(0)">&nbsp; PHOTOGRAPHY</a></li>
        <li><a id="artsandcrafts-link" href="javascript:void(0)">&nbsp; ARTS & CRAFTS</a></li>

        <li><a id="about-link" href="javascript:void(0)">&nbsp; ABOUT</a></li>
        <li><a id="contact-link" href="javascript:void(0)">&nbsp; CONTACT</a></li>

    </ol>

    <div id="bottom">
        <ol>
            <li><a href="#">&nbsp; RESUME</a></li>
            <li><a href="#">&nbsp; BLOG</a></li>
        </ol>
    </div>

</div>


<div id="content"> <!-- The content of this div must be here or the parallax scrolling breaks  -->
    <article id="nonprofit2">
    </article>

    <article id="frameless-parachute">
    </article>

    <article id="english-channel">
    </article>
</div>

<!-- Parallax foreground -->
<div id="parallax-bg3">

    <img id="valentinewoman" src="img/nonprofit/valentinewoman.png" alt="Montgolfier hot air balloon"/><br>
    <img id="businessman" src="img/corporate/manbuildingswirls.png" width="819" height="500" alt="executive">
    <img id="swirlbottom" src="img/corporate/swirlbottom.png" width="206" height="128" alt="swirl bottom">
    <img id="circle" src="img/photography/circle.png" width="560" height="206" alt="circle">
    <img id="carandwoman" src="img/artsandcrafts/carandwoman.png" width="470" height="424" alt="car and woman">
    <img id="womanshead" src="img/artsandcrafts/womanshead.png" width="125" height="33" alt="womans head">
    <img id="carleft" src="img/artsandcrafts/carleft.png" width="99" height="457" alt="car left">

    <img id="paintcan" src="img/artsandcrafts/paintcan.png" width="167" height="116" alt="paint can">

    <!--
            To change the default active item, replace active-artsandcrafts with inactive and vice versa
            for the newly active item.
     -->
    <!-------------------------->
    <!-- SECTION: ARTS/CRAFTS -->
    <!-------------------------->
    <div id="artsandcrafts" class="section">
        <div id="nav-artsandcrafts">
            <ol>
                <li>
                    <a id="test1-link" href="javascript:void(0)"
                       class="subnav-link active-subnav">Test 1</a>
                </li>
                <li>
                    <a id="test2-link" href="javascript:void(0)"
                       class="subnav-link inactive-subnav">Test 2</a></li>
                <li>
                    <a id="test3-link" href="javascript:void(0)" target="iframe-artsandcrafts"
                       class="subnav-link inactive-subnav">Test 3</a></li>
            </ol>
        </div>
        <div class="container-content" id="container-artsandcrafts">
            <div id="iframe-artsandcrafts">
                <div class="include-section" id="test1-include">
                    <?php include("artsandcrafts/nasdaq.htm"); ?>
                </div>
                <div class="include-section" id="test2-include" style="display:none">
                    <?php include("artsandcrafts/thriveyoga.htm"); ?>
                </div>
                <div class="include-section" id="test3-include" style="display:none">
                    <?php include("artsandcrafts/aol.htm"); ?>
                </div>
            </div>
        </div>
    </div>

    <img id="circlesundernav" src="img/artsandcrafts/circlesundernav.png" width="167" height="61"
         alt="circles under nav">


    <div id="about" class="section">
        <div id="container-about">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. </p>

            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. </p>

            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. </p>
        </div>
    </div>

    <div id="contact">
        <div id="container-contact">
            <label for="formcontent-name">Name:</label>
            <input type="text" name="name" size="50" id="formcontent-name"><br>

            <label for="formcontent-email">Email:</label>
            <input type="text" name="email" id="formcontent-email"><br>

            <label id="comments-label" for="formcontent-comments">Comments:</label>
            <textarea id="formcontent-comments" name="feedback"></textarea>

            <div>
                <button type="submit" name="submit" value="Submit" id="submitbground">Submit</button>
            </div>
        </div>
    </div>

</div>


<!-- Parallax  midground  - Moves at a different rate than foreground and background -->
<div id="parallax-bg2">
    <img id="heart" src="img/nonprofit/heart.png" alt="cloud"/>
    <img id="heart2" src="img/nonprofit/heart.png" alt="cloud"/>
    <img id="moon" src="img/corporate/moon.png" width="230" height="229" alt="moon">
    <img id="stars" src="img/photography/stars.png" width="719" height="256" alt="stars">
    <img id="arrows" src="img/artsandcrafts/arrows.png" width="345" height="512" alt="arrows">
</div>

<div id="parallax-charliebrown">
    <img id="charliebrown" src="img/about/charliebrown.png" width="119" height="71" alt="charlie brown">
</div>

<div id="parallax-boat">
    <img id="boat" src="img/contact/boat.png" width="168" height="394" alt="boat">
</div>


<!-- Parallax  background  -->
<div id="parallax-bg1">

    <!-------------------------->
    <!--- SECTION: HOME       -->
    <!-------------------------->
    <div id="home" class="section">
        <ul class="home-carousel">
            <li><img src="img/home/banner1.jpg" alt="banner1"/></li>
            <li><img src="img/home/banner2.jpg" alt="banner2"/></li>
            <li><img src="img/home/banner3.jpg" alt="banner3"/></li>
        </ul>
    </div>

    <img src="img/nonprofit/bground.png" alt="cloud" width="1181" height="409" id="bg-nonprofit">

    <!-------------------------->
    <!--- SECTION: NON PROFIT -->
    <!-------------------------->
    <div class="section" id="nonprofit">
        <div id="nav-nonprofit">
            <ol>
                <li>
                    <a id="loc-link" href="javascript:void(0)" class="subnav-link active-subnav">
                        Library of Congress</a>
                </li>
                <li>
                    <a id="nga-link" href="javascript:void(0)" class="subnav-link inactive-subnav">
                        National Gallery of Art
                    </a>
                </li>
            </ol>
        </div>
        <div class="container-content" id="container-nonprofit">
            <div class="include-section" id="loc-include"><?php include("nonprofit/libraryofcongress2.htm"); ?></div>
            <div class="include-section" id="nga-include" style="display:none"><?php include("nonprofit/nationalgalleryofart.htm"); ?></div>
        </div>
    </div>

    <!-------------------------->
    <!--- SECTION: CORPORATE  -->
    <!-------------------------->
    <div id="corporate" class="section">
        <div id="nav-corporate">
            <ol>
                <li>
                    <a id="test4-link" href="javascript:void(0)" class="subnav-link active-subnav">Test 4</a>
                </li>
                <li>
                    <a id="test5-link" href="javascript:void(0)" class="subnav-link inactive-subnav">Test 5</a>
                </li>
                <li>
                    <a id="test6-link" href="javascript:void(0)" class="subnav-link inactive-subnav">Test 6</a>
                </li>
            </ol>
        </div>
        <div class="container-content" id="container-corporate">
            <div class="include-section" id="test4-include">
                <?php include("corporate/nasdaq.htm"); ?>
            </div>
            <div class="include-section" id="test5-include" style="display:none">
                <?php include("corporate/thriveyoga.htm"); ?>
            </div>
            <div class="include-section" id="test6-include" style="display:none">
                <?php include("corporate/aol.htm"); ?>
            </div>
        </div>
    </div>

    <img src="img/photography/bag.jpg" alt="bag" name="bag" width="167" height="100" id="bag">


    <!-------------------------->
    <!-- SECTION: PHOTOGRAPHY -->
    <!-------------------------->
    <div id="photography" class="section">
        <div id="nav-photography">
            <ol>
                <li>
                    <a id="test7-link" href="javascript:void(0)" class="subnav-link active-subnav">Test 4</a>
                </li>
                <li>
                    <a id="test8-link" href="javascript:void(0)" class="subnav-link inactive-subnav">Test 5</a>
                </li>
                <li>
                    <a id="test9-link" href="javascript:void(0)" class="subnav-link inactive-subnav">Test 6</a>
                </li>
            </ol>
        </div>
        <div class="container-content" id="container-photography">
            <div class="include-section" id="test7-include">
                <?php include("photography/nasdaq.htm"); ?>
            </div>
            <div class="include-section" id="test8-include" style="display:none">
                <?php include("photography/thriveyoga.htm"); ?>
            </div>
            <div class="include-section" id="test9-include" style="display:none">
                <?php include("photography/aol.htm"); ?>
            </div>
        </div>
    </div>

    <!--Note: The content for Arts and Crafts is in the foreground section so it can sit above the arrows-->

    <img id="shapesabovetext" src="img/about/shapesabovetext.png" width="651" height="448" alt="shapes above text">
    <img id="me" src="img/about/me.jpg" width="282" height="313" alt="Dan Trachtman Age 8">
    <img id="whitearea" src="img/about/whitearea.png" width="448" height="657" alt="white area">
    <img id="train" src="img/about/train.png" width="81" height="593" alt="train">
    <img id="tentacles" src="img/about/tentacles.png" width="230" height="471" alt="tentacles">
    <img id="staticflowers" src="img/contact/staticflowers.png" width="440" height="268" alt="static flowers">
    <img id="woman" src="img/contact/woman.jpg" width="692" height="409" alt="woman on phone">

    <img id="formbground" src="img/contact/formbground.png" width="692" height="942" alt="form background">
</div>
</div>
<div id="copyright"> All content &copy; Dan Trachtman. All rights reserved.</div>
</body>
</html>
