<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
<div class="my-4 text-center">
    <h1 class="h2 text-center mt-3">Isotop Gallery Section</h1>
    <div class="button-group filters-button-group d-inline-block">
        <button class="button is-checked" data-filter="*">show all</button>
        <button class="button" data-filter=".metal">PHP Developer</button>
        <button class="button" data-filter=".transition">Java Developer</button>
        <button class="button" data-filter=".alkali, .alkaline-earth">Web Developer</button>
        <button class="button" data-filter=":not(.transition)">Web Designer</button>
        <button class="button" data-filter=".metal:not(.transition)">Graphics Designer</button>
        <button class="button" data-filter="numberGreaterThan50">number > 50</button>
        <button class="button" data-filter="ium">name ends with &ndash;ium</button>
    </div>
    <div>
        <div class="container-fluid">
            <div class="gallery-section">
                <div class="gutter-sizer"></div>
                <div class="gallery-box">
                    <a href="#" class="element-item transition metal d-block " data-category="transition"">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/joe-cooke-40727-1.jpg"  alt="" class="mw-100" />
                        <h3 class="img-name">Mercury</h3>
                        <p class="symbol">Hg</p>
                        <p class="number">80</p>
                        <p class="weight">200.59</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item metalloid d-block" data-category="metalloid">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/ruslan-bardash-351288.jpg"  alt="" class="mw-100" />
                        <h3 class="img-name">Tellurium</h3>
                        <p class="symbol">Te</p>
                        <p class="number">52</p>
                        <p class="weight">127.6</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item post-transition metal d-block" data-category="post-transition">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="mw-100" />
                        <h3 class="img-name">Bismuth</h3>
                        <p class="symbol">Bi</p>
                        <p class="number">83</p>
                        <p class="weight">208.980</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item post-transition metal " data-category="post-transition">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="mw-100" />
                        <h3 class="img-name">Lead</h3>
                        <p class="symbol">Pb</p>
                        <p class="number">82</p>
                        <p class="weight">207.2</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item transition metal " data-category="transition">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="mw-100" />
                        <h3 class="img-name">Gold</h3>
                        <p class="symbol">Au</p>
                        <p class="number">79</p>
                        <p class="weight">196.967</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item alkali metal " data-category="alkali">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="mw-100" />
                        <h3 class="img-name">Potassium</h3>
                        <p class="symbol">K</p>
                        <p class="number">19</p>
                        <p class="weight">39.0983</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item alkali metal " data-category="alkali">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="mw-100" />
                        <h3 class="name">Sodium</h3>
                        <p class="symbol">Na</p>
                        <p class="number">11</p>
                        <p class="weight">22.99</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item transition metal " data-category="transition">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/08/marina-vitale-206980.jpg"  alt="" class="mw-100" />
                        <h3 class="name">Cadmium</h3>
                        <p class="symbol">Cd</p>
                        <p class="number">48</p>
                        <p class="weight">112.411</p>
                    </a>
                </div>
                <div class="gallery-box">
                    <a href="#" class="element-item alkaline-earth metal " data-category="alkaline-earth">
                        <img src="http://onero.ellethemes.com/gallery/wp-content/uploads/2017/09/alexandre-tsuchiya-333897.jpg"  alt="" class="mw-100" />
                        <h3 class="name">Calcium</h3>
                        <p class="symbol">Ca</p>
                        <p class="number">20</p>
                        <p class="weight">40.078</p>
                    </a>
                </div>
            </div>
        </div>
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