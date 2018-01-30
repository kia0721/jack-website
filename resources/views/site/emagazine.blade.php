<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/extras/jquery.min.1.7.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extras/jquery-ui-1.8.20.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extras/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extras/modernizr.2.5.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('emag-lib/hash.js') }}"></script>
<style type="text/css">
    body{
        background-color: #ff932b;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            background:transparent url("{{ asset('css/pics/emag_bg.jpg') }}") no-repeat center bottom;
    }

    .book-content2{
        margin: 50px 20px 20px 30px;
        font-size: 16px;
    }
    .sub-1{
        font-weight: bold;
        margin-top: 10px;
        color: #fd9c33;
    }
    .sub-2{
        margin-left: 10px;
    }

    .custom-btn{
        background-color: #f8c91b;
        color: black;
        border-color: #f8c91b;
    }

    .custom-btn:hover, .custom-btn:active:hover, .custom-btn:active, .custom-btn:focus{
        background-color: #f7a853;
        color: black;
        font-weight: bold;
        border-color: #fd9c33;
    }

    .blog_link:focus, .blog_link:hover {
        color: #002e56;
        text-decoration: none;
    }
</style>
</head>
<body>
<div id="main-container" class="active">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div  class="navbar-brand" style="padding: 0px 15px;">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                        <i class="fa fa-bars"></i>
                    </a>

                    <a href="{{ url('/') }}" ><img src="{{ asset('/images/jack_logo.png') }}" /></a>
                </div>
            </div>

            <div id="navbar" class="collapse navbar-right navbar-collapse" >
                <ul class="nav navbar-nav" style="font-weight: bold;">
                    <li><a href="{{ url('/courses') }}"><img src="{{ asset('/images/courses.png') }}" class="icon-menu-top"> Courses</a></li>
                    <li><a href="{{ url('/calendar') }}"><img src="{{ asset('/images/calendar.png') }}" class="icon-menu-top"> Calendar</a></li>
                    <li><a href="{{ url('/e-magazine') }}"><img src="{{ asset('/images/e-magazine.png') }}" class="icon-menu-top"> E-Magazine</a></li>
                    <li><a href="{{ url('/faqs') }}"><img src="{{ asset('/images/faqs-icon.png') }}" class="icon-menu-top"> FAQ's</a></li>
                    <li><a href="{{ url('/home#Contact-us') }}" id="contactUsLink"><img src="{{ asset('/images/contact us.png') }}" class="icon-menu-top"> Contact us</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div id="canvas" class="main-wrapper" style="margin-top: 63px;">
	
    <div id="book-zoom" style="margin: auto; vertical-align: middle;">
        <div class="sj-book">
            <div depth="5" class="hard"> <div class="side"></div> </div>
            <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
            <div class="own-size"></div>
            <div class="own-size even"></div>
            <div class="hard fixed back-side p17"> <div class="depth"></div> </div>
            <div class="hard p18"></div>
        </div>
    </div>
    <div id="slider-bar" class="turnjs-slider">
        <div id="slider"></div>
    </div>
</div>
   </div>


<script type="text/javascript">

function loadApp() {
    
    var flipbook = $('.sj-book');

    // Check if the CSS was already loaded
    
    if (flipbook.width()==0 || flipbook.height()==0) {
        setTimeout(loadApp, 10);
        return;
    }

    // Mousewheel

    $('#book-zoom').mousewheel(function(event, delta, deltaX, deltaY) {

        var data = $(this).data(),
            step = 30,
            flipbook = $('.sj-book'),
            actualPos = $('#slider').slider('value')*step;

        if (typeof(data.scrollX)==='undefined') {
            data.scrollX = actualPos;
            data.scrollPage = flipbook.turn('page');
        }

        data.scrollX = Math.min($( "#slider" ).slider('option', 'max')*step,
            Math.max(0, data.scrollX + deltaX));

        var actualView = Math.round(data.scrollX/step),
            page = Math.min(flipbook.turn('pages'), Math.max(1, actualView*2 - 2));

        if ($.inArray(data.scrollPage, flipbook.turn('view', page))==-1) {
            data.scrollPage = page;
            flipbook.turn('page', page);
        }

        if (data.scrollTimer)
            clearInterval(data.scrollTimer);
        
        data.scrollTimer = setTimeout(function(){
            data.scrollX = undefined;
            data.scrollPage = undefined;
            data.scrollTimer = undefined;
        }, 1000);

    });

    // Slider

    $( "#slider" ).slider({
        min: 1,
        max: 100,

        start: function(event, ui) {

            if (!window._thumbPreview) {
                _thumbPreview = $('<div />', {'class': 'thumbnail'}).html('<div></div>');
                setPreview(ui.value);
                _thumbPreview.appendTo($(ui.handle));
            } else
                setPreview(ui.value);

            moveBar(false);

        },

        slide: function(event, ui) {

            setPreview(ui.value);

        },

        stop: function() {

            if (window._thumbPreview)
                _thumbPreview.removeClass('show');
            
            $('.sj-book').turn('page', Math.max(1, $(this).slider('value')*2 - 2));

        }
    });


    // URIs
    
    Hash.on('^page\/([0-9]*)$', {
        yep: function(path, parts) {

            var page = parts[1];

            if (page!==undefined) {
                if ($('.sj-book').turn('is'))
                    $('.sj-book').turn('page', page);
            }

        },
        nop: function(path) {

            if ($('.sj-book').turn('is'))
                $('.sj-book').turn('page', 1);
        }
    });

    // Arrows

    $(document).keydown(function(e){

        var previous = 37, next = 39;

        switch (e.keyCode) {
            case previous:

                $('.sj-book').turn('previous');

            break;
            case next:
                
                $('.sj-book').turn('next');

            break;
        }

    });


    // Flipbook

    flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

    flipbook.turn({
        elevation: 50,
        acceleration: !isChrome(),
        autoCenter: true,
        gradients: true,
        duration: 1000,
        pages: 18,
        when: {
            turning: function(e, page, view) {
                
                var book = $(this),
                    currentPage = book.turn('page'),
                    pages = book.turn('pages');

                if (currentPage>3 && currentPage<pages-3) {
                
                    if (page==1) {
                        book.turn('page', 2).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    } else if (page==pages) {
                        book.turn('page', pages-1).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    }
                } else if (page>3 && page<pages-3) {
                    if (currentPage==1) {
                        book.turn('page', 2).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    } else if (currentPage==pages) {
                        book.turn('page', pages-1).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    }
                }

                updateDepth(book, page);
                
                if (page>=2)
                    $('.sj-book .p2').addClass('fixed');
                else
                    $('.sj-book .p2').removeClass('fixed');

                if (page<book.turn('pages'))
                    $('.sj-book .p17').addClass('fixed');
                else
                    $('.sj-book .p17').removeClass('fixed');

                Hash.go('page/'+page).update();
                    
            },

            turned: function(e, page, view) {

                var book = $(this);

                if (page==2 || page==3) {
                    book.turn('peel', 'br');
                }

                updateDepth(book);
                
                $('#slider').slider('value', getViewNumber(book, page));

                book.turn('center');

            },

            start: function(e, pageObj) {
        
                moveBar(true);

            },

            end: function(e, pageObj) {
            
                var book = $(this);

                updateDepth(book);

                setTimeout(function() {
                    
                    $('#slider').slider('value', getViewNumber(book));

                }, 1);

                moveBar(false);

            },

            missing: function (e, pages) {

                for (var i = 0; i < pages.length; i++) {
                    addPage(pages[i], $(this));
                }

            }
        }
    });


    $('#slider').slider('option', 'max', numberOfViews(flipbook));

    flipbook.addClass('animated');

    // Show canvas

    $('#canvas').css({visibility: ''});
}

// Hide canvas

$('#canvas').css({visibility: 'hidden'});

// Load turn.js

yepnope({
    test : Modernizr.csstransforms,
    yep: ['{{ asset("emag-lib/turn.min.js") }}'],
    nope: ['{{ asset("emag-lib/turn.html4.min.js") }}', '{{ asset("css/extras/jquery.ui.html4.css") }}', '{{ asset("css/extras/jack-emag-html4.css") }}'],
    both: ['{{ asset("js/extras/jack-emag.js") }}', '{{ asset("css/extras/jquery.ui.css") }}', '{{ asset("css/extras/jack-emag.css") }}'],
    complete: loadApp
});

</script>

</body>
</html>