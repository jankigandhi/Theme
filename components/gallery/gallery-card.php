<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="../card/css/card.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<div class="my-4 text-center">
    <h1 class="h2 text-center mt-3">Isotop Gallery Card Section</h1>
    <div class="button-group filters-button-group d-inline-block">
        <button class="btn btn-link is-checked" data-filter="*">show all</button>
        <!-- <button class="btn btn-link" data-filter=".metal">PHP Developer</button>
        <button class="btn btn-link" data-filter=".transition">Java Developer</button>
        <button class="btn btn-link" data-filter=".alkali, .alkaline-earth">Web Developer</button> -->
        <button class="btn btn-link" data-filter="numberLessThan50">Web Designer</button>
        <button class="btn btn-link" data-filter="numberGreaterThan50">number > 50</button>
        <button class="btn btn-link" data-filter="ium">name ends with &ndash;ium</button>
    </div>
    <div>
        <div class="container-fluid">
            <div class="gallery-section">
                <div class="gutter-sizer"></div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(63).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">Telephone</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">60</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">12</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">21</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">35</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(62).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">Telescope</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">51</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">12</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">21</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">45</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">potenium</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">1</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">72</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">21</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">85</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">Telecom</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">6</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">22</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">21</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">35</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(25).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">Telenium</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">1</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">72</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">21</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">85</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(85).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">Trellow</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">81</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">12</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">11</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">25</p>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery-box p-3 mb-0">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <div class="custom-card card">
                            <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(80).jpg');"></div>
                            <div class="card-body">
                                <h5 class="img-name card-title">Telenium</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go somewhere</a>
                                <a href="#" class="btn-float btn btn-dark rounded-circle">
                                    <i class="zmdi zmdi-share"></i>
                                </a>
                            </div>
                            <div class="card-footer bg-dark text-white text-center">
                                <ul class="list-unstyled mb-0 d-flex justify-content-between">
                                    <li class="d-inline-block p-1">
                                       <span class="d-inline-block"><i class="zmdi zmdi-time"></i></span>
                                        <p class="num d-inline-block">1</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-comments"></i></span>
                                        <p class="number d-inline-block">72</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-facebook"></i></span>
                                        <p class="number d-inline-block">21</p>
                                    </li>
                                    <li class="d-inline-block p-1">
                                        <span class="d-inline-block"><i class="zmdi zmdi-twitter"></i></span>
                                        <p class="number d-inline-block">85</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div>
            <div class="custom-card card">
                <div class="bg-img" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg');"></div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                    <a href="#" class="btn-float btn btn-dark rounded-circle">
                        <i class="zmdi zmdi-share"></i>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script>
// external js: isotope.pkgd.js
// init Isotope
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
var $grid = $('.gallery-section').isotope({
itemSelector: '.element-item',
layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
// show if number is greater than 50
numberGreaterThan50: function() {
var number = $(this).find('.number').text();
return parseInt( number, 10 ) > 50;
},
// show if number is less than 50
numberLessThan50: function() {
var num = $(this).find('.num').text();
return parseInt( num, 10 ) < 50;
},
// show if name ends with -ium
ium: function() {
var name = $(this).find('.img-name').text();
return name.match( /ium$/ );
}
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
var filterValue = $( this ).attr('data-filter');
// use filterFn if matches value
filterValue = filterFns[ filterValue ] || filterValue;
$grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
var $buttonGroup = $( buttonGroup );
$buttonGroup.on( 'click', 'button', function() {
$buttonGroup.find('.is-checked').removeClass('is-checked');
$( this ).addClass('is-checked');
});
});
</script>
</body>
</html>