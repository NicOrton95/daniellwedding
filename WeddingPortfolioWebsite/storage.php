<!-- a place to store snippets of code that are cut out in case I want to add them back later -->

<!-- Footer pieces of code -->

<span id="backtotop"><i></i></span>




<!-- Gallery code -->

/* grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto; 
    grid:
        'img1 img1 img1 img2 img2 img2 img3 img3 img3 img4 img4 img4 img5 img5 img5'
        'img1 img1 img1 img2 img2 img2 img3 img3 img3 img4 img4 img4 img5 img5 img5'
        'img1 img1 img1 img2 img2 img2 img3 img3 img3 img4 img4 img4 img5 img5 img5'
        'img1 img1 img1 img2 img2 img2 img3 img3 img3 img4 img4 img4 img5 img5 img5'
        'img1 img1 img1 img2 img2 img2 img3 img3 img3 img4 img4 img4 img5 img5 img5';         */

#galleryimg1{
    grid-area: img1;
}

#galleryimg2{
    grid-area: img2;
}

#galleryimg3{
    grid-area: img3;
}

#galleryimg4{
    grid-area: img4;
}

#galleryimg5{
    grid-area: img5;
}

/* 
#galleryimg6{
    grid-area: img6;
}

#galleryimg7{
    grid-area: img7;
}

#galleryimg8{
    grid-area: img8;
}

#galleryimg9{
    grid-area: img9;
}

#galleryimg10{
    grid-area: img10;
}

#galleryimg11{
    grid-area: img11;
}

#galleryimg12{
    grid-area: img12;
}

#galleryimg13{
    grid-area: img13;
}

#galleryimg14{
    grid-area: img14;
}


#galleryimg15{
    grid-area: img15;
} */


2fr 2fr 2fr 1fr 1fr 1fr 2fr 2fr 2fr 1fr 1fr 1fr 2fr 2fr 2fr;

<img src="images/gallery/wedding-gallery1.jpg" alt="weddingpic1" id="galleryimg1">
<img src="images/gallery/wedding-gallery2.jpg" alt="weddingpic2" id="galleryimg2">
<img src="images/gallery/wedding-gallery3.jpg" alt="weddingpic" id="galleryimg3">
<img src="images/gallery/wedding-gallery4.jpg" alt="weddingpic" id="galleryimg4">
<img src="images/gallery/wedding-gallery5.jpg" alt="weddingpic" id="galleryimg5">
<img src="images/gallery/wedding-gallery6.jpg" alt="weddingpic" id="galleryimg6">
<img src="images/gallery/wedding-gallery7.jpg" alt="weddingpic" id="galleryimg7">
<img src="images/gallery/wedding-gallery8.jpg" alt="weddingpic" id="galleryimg8">
<img src="images/gallery/wedding-gallery9.jpg" alt="weddingpic" id="galleryimg9">
<img src="images/gallery/wedding-gallery10.jpg" alt="weddingpic" id="galleryimg10">
<img src="images/gallery/wedding-gallery11.jpg" alt="weddingpic" id="galleryimg11">
<img src="images/gallery/wedding-gallery12.jpg" alt="weddingpic" id="galleryimg12">
<img src="images/gallery/wedding-gallery13.jpg" alt="weddingpic" id="galleryimg13">
<img src="images/gallery/wedding-gallery14.jpg" alt="weddingpic" id="galleryimg14">
<img src="images/gallery/wedding-gallery15.jpg" alt="weddingpic" id="galleryimg15">

<!-- Gallery original divs -->

<div id="start-gal-cont"><h1 class="section-heading gal-heading">Gallery</h1></div>
            <div class="general-spacer-small"></div>
            <div id="gallery-container">
                <h1>check storage file for links to images, gonna have to resize & replace it</h1>
            </div>





<!-- stopped working when link was added -->
.mid-menu-grid{
    display: flex;
    justify-content: space-evenly;
    column-gap: 50px;
}


.mid-menu-grid{
    font-family: 'Poppins';
    font-size: 17px;
} 


<!-- Wedding details & invite section with 3 blocks inside container - test -->
<div id="wedding-details-container2">
    <div class="wedding-details-three-containers"><h3>blank container</h3></div>
    <div class="wedding-details-three-containers">actual details to go here</div>
    <div class="wedding-details-three-containers">blank container</div>
</div>


<!-- This code works for referencing the URL for a background image, for some reason, not working how it worked before when I could just pull the image name:
background-image: url("http://localhost:4000/desktop/WeddingPortfolioWebsite/images/wedding-slider-img1.png"); -->


<!-- Home Page Slider -->
<div class="slider-img-section-container">
    <div class="slider-img-grid-flex fade">
        <img src="images/wedding-slider-img1.png" style="width:100%">
    </div>
    <div class="slider-img-grid-flex fade">
        <img src="images/wedding-slider-img2.png" style="width:100%">
    </div>
    <div class="slider-img-grid-flex fade">
        <img src="images/wedding-slider-img3.png" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br/>
<br/>

<!-- JS code for home page slider  -->

// Slideshow functions

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

/* Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
} */

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slider-img-grid-flex");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}