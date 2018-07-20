<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" type="text/css" href="css/light-box.css">
</head>
<body>
<div class="container">
    <h2 style="text-align:center">Lightbox</h2>
    <div class="row mx-0">
        <div class="col-md-3">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="col-md-3">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
        <div class="col-md-3">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="col-md-3">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg" style="width:100%">
            </div>
            
            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <div class="row mx-0">
                <div class="col-md-3">
                <img class="demo cursor" src="https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
            </div>
            <div class="col-md-3">
                <img class="demo cursor" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
            </div>
            <div class="col-md-3">
                <img class="demo cursor" src="https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="col-md-3">
                <img class="demo cursor" src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            </div>
        </div>
    </div>
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
</div>
</body>
</html>