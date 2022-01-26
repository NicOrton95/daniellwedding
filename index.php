
<?php
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="wedding, wedding website">
    <meta name="author" content="Nic Orton">
    <meta name="description" content="Wedding website created for Gen & Jason">
    <title>Gen & Jason Wedding</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Imperial+Script&family=Poppins:wght@500&family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- header code -->
    <div class="big-pic-bg overlay">
        <div class="header" id="home">
            <div id="start-header-container-flex">
                <div id="flex-logo-left" class="logo-name-section-flex"></div>
                <div id="flex-logo-center" class="logo-name-section-flex">Gen & Jason</div>
                <div id="flex-logo-right" class="logo-name-section-flex"></div>
            </div>
            <div class="end-header-container-grid">
                <div class="gation-menu-container mid-menu-grid" id="blank-gation-1"></div>
                    <div id="menu-cont">
                        <div class="menu-items men-item1"><a href="#wedding-details-container" name="invite">Wedding Details</a></div>
                        <div class="blank num1"></div>
                        <div class="menu-items men-item2"><a href="#registry-container" name="registry">Registry</a></div>
                        <div class="blank num2"></div>
                        <div class="menu-items men-item3"><a href="#gallery-container" name="gallery">Gallery</a></div>
                        <div class="blank num3"></div>
                        <div class="menu-items men-item4"><a href="#inside-our-story" name="ourstory">Our Story</a></div>
                        <div class="blank num4"></div>
                        <div class="menu-items men-item5"><a href="#RSVP-content" name="rsvp">RSVP</a></div>
                        <div class="blank5 num5"></div>
                    </div>
            <div class="gation-menu-container mid-menu-grid" id="blank-gation-3"></div>
        </div>
        <div id="acting-spacer"></div>
    </div>
</div> <!-- redid the whole thing & the background goes over this entire page if this div isn't here. it's not supposed to be here, not sure where the issue is, solve it later -->

    <!-- body code -->
        <div class="body">
            <br/>
            <br/>

            <!-- Wedding details & invite section with 1 block inside container - test -->
            <div id="wedding-details-container">
                <div class="wedding-details-one-container">
                    <h1 class="section-heading wed-details">Wedding Details</h1> 
                    <h2 class="section-intro">We'd love for you to join us on our special day</h2>
                    <br/> 
                    <h3 class="section-details">Date: 26/02/2021</h3>
                    <br/>
                    <h3 class="section-details">Time: 15h00</h3>
                    <br/>
                    <h3 class="section-details">Location: Die Heuwel</h3>
                    <br/>
                    <h3 class="section-details">Our reception will also be held at Die Heuwel, <br/> right after the ceremony!</h3>
                    <br/>
                    <h3 class="section-details">We hope you can make it!</h3>
                </div>
            </div>
            <div class="general-spacer"></div>
            <div id="RSVP-container">
                <div id="RSVP-content">
                    <h1 class="section-heading">RSVP</h1>
                    <?php
                        if($message_sent):                    
                    ?>
                    <h3 class="form-message-rec">Thank you, we can't wait to see you there!</h3>
                    <?php
                        else:
                    ?>
                    <h2 class="section-intro">Please take a moment to RSVP</h2>
                    <div class="general-spacer-small"></div>
                    <form action="index.php" method="POST" class="section-details"> <!-- action is for the page the form will be submitted to -->
                        <label class="section-details rsvp-form" for="fullguestname">Full Name:</label><br/>
                        <input type="text" id="full-name" name="fullguestname"><br/>
                        <div class="general-spacer-small"></div>
                        <label class="section-details rsvp-form" for="guestcontactnumber">Your Number:</label><br/>
                        <input type="number" id="contact-number" name="guestcontactnumber"><br/>
                        <div class="general-spacer-small"></div>
                        <label class="section-details rsvp-form" for="guestemail">Your Email:</label><br/>
                        <input type="email" id="guest-email" name="guestemail"><br/>
                        <div class="general-spacer-small"></div>
                        <label class="section-details rsvp-form">Will you be attending?</label><br/><br/>
                        <label class="section-details rsvp-form" for="yes">Yes</label>
                        <input type="radio" id="attendingselectyes" name="attending" value="yes">
                        <label class="section-details rsvp-form" for="no">No</label>
                        <input type="radio" id="attendingselectno" name="attending" value="no"><br/>
                        <div class="general-spacer-small"></div>
                        <input type="submit" value="Submit">
                    </form>
                <?php
                    endif;
                ?>
                </div>
            </div>
            <div class="general-spacer"></div>

            <!-- Registry Container -->
    <div id="big-bg">
            <div id="registry-container-main">
                <div id="registry-container">
                    <div id="left-side-reg">
                        <h1 class="section-heading reg-heading">Registry</h1>
                        <p class="section-intro">When it comes to wedding gifts, your presence is the only present we really want...</p>
                        <p class="section-intro">If you would like to get us something special, we've put together a little registry, which can be viewed here: <a href="https://www.mrphome.com/home">Daniell Registry</a></p>
                    </div>
                    <div id="right-side-reg">
                        <?php
                        if($message_sent_reg):                    
                        ?>
                        <div class="general-spacer-med"></div>
                        <h3 class="form-message-rec reg-message-rec">Your message has been received, we'll speak to you soon!</h3>
                        <?php
                            else:
                        ?>
                        <h3 class="section-intro reg-contact-form">If you have any questions about the registry, let us know!</h3>
                        <form action="index.php" method="POST" class="section-details">
                            <label class="section-details" for="regname">Name: </label><br/>
                            <input type="text" name="regname" id="reg-name"><br/>
                            <div class="general-spacer-xsmall"></div>
                            <label class="section-details" for="regcontact">Contact Number/Email: </label><br/>
                            <input type="text" name="regcontact" id="reg-contact"><br/>
                            <div class="general-spacer-xsmall"></div>
                            <label class="section-details" for="regmessage">What do you need to know?</label><br/>
                            <textarea id="reg-message" name="regmessage" rows="4" cols="50"></textarea>
                            <div class="general-spacer-xsmall"></div>
                            <input type="submit" value="Send">
                        </form>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="general-spacer"></div>
            <div id="our-story-container">
                <div id="inside-our-story">
                    <h1 class="section-heading">Our Story</h1>
                    <br/>
                    <p class="section-details">As most of you know, Gen & Jason met when they began attending <br/> the same church. Gen was underage & Jason old enough to be her father... <br/> so, you know, it's just your typical love story...</p>
                    <br/>
                    <p class="section-details">While they both caught feelings early on, they knew <br/> they had to wait and wait they did.<br/> As soon as Gen turned 18, Jason asked her out. <br/>The whirlwind romance began.</p>
                    <br/>
                    <p class="section-details">Their relationship couldn't have been better & they were together <br/> for years. But rough waters approached... <br/>They decided it best to make like a KitKat & take a break.</p>
                    <br/>
                    <p class="section-details">Jason used this time to focus on his duties to the church <br/>while Gen used her time to focus on her studies.</p>
                    <br/>
                    <p class="section-details">I'm sure you know how the rest of the story goes, I mean, you are invited to <br/> their wedding after all... you guessed it, these <br/> 2 found their way back to each other. Having had the <br/> time to work on themselves individually, they came back stronger than ever.</p>
                    <br/>
                    <p class="section-details">After 7 years together, Jason finally popped the question & Gen <br/> said no... just kidding, she said yes, of course!</p>
                    <br/>
                    <p class="section-details">There you have it, the story of us! <br/> Please enjoy our white veil occasion.</p>
                </div>
            </div>
            <div class="general-spacer"></div>
            <div id="start-gal-cont"><h1 class="section-heading gal-heading">Gallery</h1>
                <div class="general-spacer-small"></div>
                <div id="gallery-container">
                    <img src="images/gallery/wedding-gallery1-resize.jpg" alt="weddingpic1" id="galleryimg1">
                    <img src="images/gallery/wedding-gallery2-resize.jpg" alt="weddingpic2" id="galleryimg2">
                    <img src="images/gallery/wedding-gallery3-resize.jpg" alt="weddingpic" id="galleryimg3">
                    <img src="images/gallery/wedding-gallery4-resize.jpg" alt="weddingpic" id="galleryimg4">
                    <img src="images/gallery/wedding-gallery5-resize.jpg" alt="weddingpic" id="galleryimg5"> 
                    <img src="images/gallery/wedding-gallery6-resize.jpg" alt="weddingpic" id="galleryimg6">
                    <img src="images/gallery/wedding-gallery7-resize.jpg" alt="weddingpic" id="galleryimg7">
                    <img src="images/gallery/wedding-gallery8-resize.jpg" alt="weddingpic" id="galleryimg8">
                    <img src="images/gallery/wedding-gallery9-resize.jpg" alt="weddingpic" id="galleryimg9">
                    <img src="images/gallery/wedding-gallery10-resize.jpg" alt="weddingpic" id="galleryimg10">
                    <img src="images/gallery/wedding-gallery11-resize.jpg" alt="weddingpic" id="galleryimg11">
                    <img src="images/gallery/wedding-gallery12-resize.jpg" alt="weddingpic" id="galleryimg12">
                    <img src="images/gallery/wedding-gallery13-resize.jpg" alt="weddingpic" id="galleryimg13">
                    <img src="images/gallery/wedding-gallery14-resize.jpg" alt="weddingpic" id="galleryimg14">
                </div>
            </div>
            <div class="general-spacer"></div>
</div> <!-- this is the closing div for the big bg div -->
            <!-- floating back-to-top button -->

            <button onclick="topFunction()" id="myb2tBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
            
            <!-- Footer section -->
            <br/>
            <div class="footer">
                <div class="backtotop">
                    <a id="a-link" href="#home" name="home">
                     <i class="fa fa-arrow-up"></i><p id="b2tbtn">Back to top</p>
                    </a>
                </div>
                <div id="copyright-author">
                    <h4>2021 Designed & Developed by Nic Orton</h4>
                </div>
            </div>
        </div>
    <script src="assets/js/main.js"></script>
</body>
</html>