<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/isotop.css">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-5">Lightbox</h2>
    <div class="image-modal row mx-0">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <div onclick="openModal();currentSlide(1)" class="bg-image hover-shadow cursor w-100" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg');">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <div style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(61).jpg');"onclick="openModal();currentSlide(2)" class="bg-image hover-shadow cursor w-100">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <img style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg');" onclick="openModal();currentSlide(3)" class="bg-image hover-shadow cursor w-100"/>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <img style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(64).jpg');" onclick="openModal();currentSlide(4)" class="bg-image hover-shadow cursor w-100"/>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <img style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(64).jpg');" onclick="openModal();currentSlide(5)" class="bg-image hover-shadow cursor w-100"/>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <img style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(66).jpg');" onclick="openModal();currentSlide(6)" class="bg-image hover-shadow cursor w-100"/>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <img style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg');" onclick="openModal();currentSlide(7)" class="bg-image hover-shadow cursor w-100"/>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
            <img style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg');" onclick="openModal();currentSlide(8)" class="bg-image hover-shadow cursor w-100"/>
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close cursor font-weight-bold" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="mySlides">
                <div class="numbertext">1 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg" class="w-100"/>
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" class="w-100"/>
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg" class="w-100"/>
            </div>
            
            <div class="mySlides">
                <div class="numbertext">4 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" class="w-100"/>
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" class="w-100"/>
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" class="w-100"/>
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" class="w-100"/>
            </div>
            <div class="mySlides">
                <div class="numbertext">8 / 8</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="w-100"/>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="caption-container text-center text-white">
                <p id="caption"></p>
            </div>
            <div class="bg-black row pb-5">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg" onclick="currentSlide(1)" alt="Nature and sunrise"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" onclick="currentSlide(2)" alt="Snow"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg" onclick="currentSlide(3)" alt="Mountains and fjords"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" onclick="currentSlide(4)" alt="Northern Lights"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(64).jpg" onclick="currentSlide(5)" alt="Northern Lights"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(66).jpg" onclick="currentSlide(6)" alt="Northern Lights"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg" onclick="currentSlide(7)" alt="Northern Lights"/>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-5 ">
                <img class="demo cursor w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" onclick="currentSlide(8)" alt="Northern Lights"/>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../inc/footer.php';?>
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
</body>
</html>