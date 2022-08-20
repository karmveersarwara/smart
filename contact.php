<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Media</title>
    <?php require("./head.php")?>

</head>
<body>
<header></header>
    <main class="contact">
        <nav>
            <?php require("./nav.php")?>
        </nav>
        <div class="row el-form">
            <div class="el-f el-touch">
                <span>Get In Touch</span>
                <h2 class="hd2">Interested to get our full-featured services?</h2>
                <p>Find the Perfect Solution for Your Business.</p>
                <p>We focus on the needs of small to middle-market businesses to improve and grow their return.</p>
            </div>
            <div class="el-f form">
                <?php // require("./comp/form.php")?>
                <h2 class="hd2">Just Say Hello!</h2>
                <form action="">
                    <!-- <div class="field"> -->
                        <div class="field">
                            <label for=""  class="f-label">YOUR NAME</label>
                            <input type="text"  class="f-input" name="name" id="fname" placeholder="YOUR NAME" require>
                        </div>
                        <div class="field">
                            <label for=""  class="f-label">EMAIL</label>
                            <input type="email" class="f-input" name="email" id="femail" placeholder="EMAIL" require>
                        </div>
                        <div class="field">
                            <label for=""  class="f-label">MOBILE NO.</label>
                            <input type="tel" class="f-input" name="mobile" id="fmobile" placeholder="MOBILE NO." require>
                        </div>
                        <div class="field">
                            <label for=""  class="f-label">WEBSITE</label>
                            <input type="text" class="f-input" name="website" id="fwebsite" placeholder="WEBSITE" require>
                        </div>
                        <div class="field fimass">
                            <label for=""  class="f-label f-labelm">MASSAGE</label>
                            <input type="text" class="f-input" name="massage" id="fmassage" placeholder="MASSAGE" require>
                        </div>
                        <!-- <input type="button" value=""> -->
                        <div class="field " id="w100">
                            <button id="formsub" class="formsub" onclick="FormEmaill(); return false">Send Message</button> 
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="el-ad">
            <div class="row">
                <div class="el-addr">
                    <div class="addr-con">
                        <h2 class="hd2"><span>-</span>Bathinda Office</h2>
                        <div class="row">
                            <!-- <div ><span>➤</span></div> -->
                            <div class="r-col2">
                            <p><a href="tel:88-587-83-587" class="phone"> <span>&#9743;</span> 88-587-83-587</a></p>
                                <p><a href="mailto:info@i-samrtmedia.com" ><span>&#9993;</span> info@i-samrtmedia.com</a></p>
                                <p><a href="" target="_blank"><span><i class='fas fa-map-marker-alt' ></i></span> 
                                Ajit Road Corner Bullding, 1st Floor,  Near Ghora Chowk Bathinda-151001, Punjab</a></p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="el-addr">
                    <div class="addr-con">
                        <h2 class="hd2"><span>-</span>Canada Office</h2>
                        <div class="row">
                        <!-- <div ><span>&#xf3c5; </span></div> -->
                            <!-- <div ><a href="tel:88-587-83-587"> <span> 📞 &#9743;</span></a></div> -->
                            <div class="r-col2">
                            <p><a href="tel:88-587-83-587" class="phone" > <span>&#9743;</span> 88-587-83-587</a></p>
                                <p><a href="mailto:info@i-samrtmedia.com" ><span>&#9993;</span> info@i-samrtmedia.com</a></p>
                                <p><a href="" target="_blank"><span><i class='fas fa-map-marker-alt' ></i></span> 
                                Ajit Road Corner Bullding, 1st Floor,  Near Ghora Chowk Bathinda-151001, Punjab</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="el-addr">
                    <div class="addr-con">
                        <h2 class="hd2"><span>-</span>Australia Office</h2>
                        <div class="row">
                            <!-- <div><a href=""></span>&#9993;<span></a> </div> -->
                            <div class="r-col2">
                                <!-- <p><a href="mailto:info.isamrtmedia@gmail.com"  target="_blank"></span>&#9993;<span> info.isamrtmedia@gmail.com</a></p> -->
                                <p><a href="tel:88-587-83-587" class="phone" > <span>&#9743;</span> 88-587-83-587</a></p>
                                <p><a href="mailto:info@i-samrtmedia.com"  ><span> &#9993;</span> info@i-samrtmedia.com</a></p>
                                <p><a href=""><span><i class='fas fa-map-marker-alt' ></i></span>
                                Ajit Road Corner Bullding, 1st Floor,  Near Ghora Chowk Bathinda-151001, Punjab</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d215.4919020530497!2d74.95313761854335!3d30.212245252326277!3m2!1i1024!2i768!4f13.1
                !3m3!1m2!1s0x39173389c8ff7351%3A0x428ace66aad5639c!2sFly%20Global%20Consultancy!5e0!3m2!1sen!2sus!4v1660896810365!5m2!1sen!2sus"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    
    <!-- <br><br><br> -->
    
    <div>
                <a id="topbtn" href="#top"><span>➤</span></a>
                <?php require("./comp/chatbot.php")?>
    </div>

    <footer>
        <?php require("./footer.php")?>
    </footer>

    <script src="ajax/javascript.js"></script>
    <script src="ajax/jquery.js"></script>
</body>
</html>