<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Media</title>
    <?php require("./head.php")?>
</head>
<body >
    <div id="top"></div>

    <main>
    <!-- <div class="corner"><div class="cornerimg"></div></div> -->

        <div id="bg-img">  
            <header></header>
            <div class="corner"><div class="cornerimg"></div></div>
            <nav>
                <?php require("./nav.php")?>
            </nav>
            <div>
                <a id="topbtn" href="#top"><span>➤</span></a>
                <?php require("./comp/chatbot.php")?>
            </div>
            <div class="confrist">
            <div class="mainani animimgp"><div class="animationr animimg"></div></div>
    
                <div class="fimgd">
                    <div class="fimg"></div>


                </div>
                <!-- <h2>We Provide</h2>
                <h1>    GRAPHIC  <br>
                    <span>DESIGING</span> <br>
                    <span>& </span>DIGITAL <br>
                    <span>MARKETING</span>
                </h1>  -->
                <!-- <p>A full suite of digital marketing agency offering</p> -->
                <div>
                    <h1>
                      <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im Si.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
                        <span class="wrap"></span>
                     </a>
                    </h1>
                </div>
                <button><a href="">Viwe Our Work</a></button>
                <button class="carkal"> <span class="carkalani"></span> <a href="">
                    <!-- <abbr title="WATCH SHOW REEL"> -->
                    <div class="carkalbtn">button </div></abbr>
                </a>
                </button>
            </div>
        </div>

        <div>
            <?php require("./icontent.php")?>
        </div>
        <div>
        <?php require("./comp/form.php")?>
        <!-- <php require("./comp/slideshow.php")?> -->
        </div>
    </main>
<div class="h100"></div>
    <footer>
        <?php require("./footer.php")?>
        <div class="footerf"><div class="mainani"><div class="animationr">1</div></div>
        <!-- <div class="mainani animimgp"><div class="animationr animimg"></div>2</div> -->
    </div>
    </footer>
    <script src="ajax/javascript.js"></script>
    <script src="ajax/slidshow.js"></script>
    <script src="ajax/jquery.js"></script>
    <script src="ajax/typwriter.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script> -->
    <!-- <script src="https://matthewelsom.com/assets/js/libs/instafeed.min.js"></script> -->
    <script>
           // Use the CDN or host the script yourself
// 
// 

    // var userFeed = new Instafeed({
    //     get: 'user',
    //     userId: '8987997106',
    //     clientId: '924f677fa3854436947ab4372ffa688d',
    //     accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
    //     resolution: 'standard_resolution',
    //     template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
    //     sortBy: 'most-recent',
    //     limit: 4,
    //     links: false
    // });
    // userFeed.run();
    </script>

</body>
</html>