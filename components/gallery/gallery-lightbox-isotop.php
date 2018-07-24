<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<div class="my-4">
    <h1 class="h2 text-center mt-3">Isotop Gallery Section</h1>
    <div class="container-fluid">
        <div class="gallery-section">
            <div class="gutter-sizer"></div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(1)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(2)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(3)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(4)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(5)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(6)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(7)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(8)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(9)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(10)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(11)" />
                </a>
            </div>
            <div class="gallery-box">
                <a href="#" class="d-block">
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg"  alt="" class="hover-shadow cursor mw-100" onclick="openModal();currentSlide(12)" />
                </a>
            </div>
        </div>
        <div id="myModal" class="modal">
            <span class="close cursor font-weight-bold" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <div class="mySlides">
                    <div class="numbertext">1 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">7 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">8 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">9 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">10 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">11 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg" class="w-100"/>
                </div>
                <div class="mySlides">
                    <div class="numbertext">12 / 12</div>
                    <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg" class="w-100"/>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="caption-container text-center text-white">
                    <p id="caption"></p>
                </div>
                <!-- <div class="bg-black row pb-5">
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg" onclick="currentSlide(1)" alt="Nature and sunrise"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg" onclick="currentSlide(2)" alt="Snow"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg" onclick="currentSlide(3)" alt="Mountains and fjords"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg" onclick="currentSlide(4)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg" onclick="currentSlide(5)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg" onclick="currentSlide(6)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg" onclick="currentSlide(7)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg" onclick="currentSlide(8)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg" onclick="currentSlide(9)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg" onclick="currentSlide(10)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/catherine-zaidova-6620.jpg" onclick="currentSlide(11)" alt="Northern Lights"/>
                    </div>
                    <div class="col-3">
                        <img class="demo cursor w-100" src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/scott-webb-367607.jpg" onclick="currentSlide(12)" alt="Northern Lights"/>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script>
function openModal() {
document.getElementById('myModal').style.display = "block";
}
function closeModal() {
document.getElementById('myModal').style.display = "none";
}
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
showSlides(slideIndex += n);
}
function currentSlide(n) {
showSlides(slideIndex = n);
}
function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("demo");
var captionText = document.getElementById("caption");
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
captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
$grid = $('.gallery-section');
var $listing = $grid.isotope({
// set itemSelector so .grid-sizer is not used in layout
itemSelector: '.gallery-box',
percentPosition: true,
masonry: {
// use element for option
gutter: '.gutter-sizer',
//isFitWidth: true,
}
});
/*$grid.imagesLoaded().progress( function() {
$grid.isotope('layout');
});*/
</script>
</body>
</html>