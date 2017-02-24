(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        body = $('body');
    /*Menu Mobile*/
    function menubar() {
        $('.icon--mobile').click(function() {
            $('.nav-bar__mobile').stop().slideToggle();
            $(this).toggleClass('open-menu');
        });
    }
    function altoMenu() {
        var windowHeight = $window.height();
        if(windowSize < 1060) {
            $('.nav-bar__mobile').css('height', windowHeight);
        }
    }
    /*Busador*/
    function searchbar() {
        var searchForm = $('.search-form'),
            iconMobile = $('.icon--mobile'),
            iconClose = $('.icon--close'),
            searchGroup = $('.search-group'),
            input = $('.input-goup .js-input'),
            menu = $('.menu');
        searchGroup.click(function() {
            input.focus();
            if(windowSize < 1001) {
                iconMobile.fadeOut(200, function () {
                    searchForm.addClass('open-box');
                });
            }
            if(windowSize < 1200 && windowSize > 1000) {
                menu.addClass('move-left');
                searchForm.addClass('open-box');
            } else {
                searchForm.addClass('open-box');
            }
        });
        iconClose.click(function() {
            searchForm.removeClass('open-box');
            if(windowSize < 1001) {
                iconMobile.fadeIn();
            }
            if(windowSize < 1200 && windowSize > 1000) {
                menu.removeClass('move-left');
            }
        });
    }
    /*Flexslider*/
    function sliderHome() {
        var slide = $('.js-slider'),
            toolkit = $('.js-toolkit');
        if (windowSize > 740 && windowSize < 1060) {
            slide.flexslider({
                animation: "slide",
                move : 1,
                itemWidth: 220,
                itemMargin: 20
            });
        }
        if (windowSize > 1000) {
            slide.flexslider({
                animation: "slide",
                move : 1,
                itemWidth: 320,
                itemMargin: 80
            });
        }
        if (windowSize < 740) {
            toolkit.flexslider({
                animation: "slide"
            });
        }
    }
    /*Isotope*/
    function shuffleIn() {
        var $container = $('.js-grid'),
            $filter = $('.js-filters'),
            $filterBy = $('.js-filter-by__item'),
            $filterByText = $('.js-filter-by__item span');
        var $grid = $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector : '.js-grid__item', 
                layoutMode: 'fitRows'
            });
        });
        $filter.on( 'click', 'li', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $filter.each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'li', function() {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
        $filterBy.click(function () {
            filters = {};
            $container.isotope({ filter: '*' });
            $filterByText.empty();
            $filterBy.removeClass('show');
        });
    }
    /*Filtros Mobile*/
    function mobileFilters() {
        var $selector = $('.js-select-filters'),
            $selectorText = $('.js-select-filters p'),
            $filterBy = $('.js-filter-by__item'),
            $filterByText = $('.js-filter-by__item span'),
            $filter = $('.js-filters'),
            $filterItem = $('.js-filters__item');
        if(windowSize < 740) {
            $selector.click(function() {
                $filter.stop().toggleClass('active');
                $filter.stop().slideToggle();
            });
            $filterItem.click(function() {
                var text = $(this).html();
                $filter.slideUp();
                $filter.removeClass('active');
                $selectorText.empty();
                $selectorText.html(text);
                $selector.addClass('color');
            });
        } else {
            $filterItem.click(function() {
                var text = $(this).html();
                $filterByText.empty();
                $filterByText.html(text);
                $filterBy.addClass('show');
            });
        }
    }
    function intitcionesFilters() {
        var $selector = $('.js-select-filters-insti'),
            $selectorText = $('.js-select-filters-insti p'),
            $filterBy = $('.js-filter-by__item'),
            $filterByText = $('.js-filter-by__item span'),
            $filter = $('.js-filters-insti'),
            $filterItem = $('.js-filters__item-insti');
        $selector.click(function() {
            $filter.stop().toggleClass('active');
            $filter.stop().slideToggle();
        });
        $filterItem.click(function() {
            var text = $(this).html();
            $filter.slideUp();
            $filter.removeClass('active');
            $selectorText.empty();
            $selectorText.html(text);
            $selector.addClass('color');
            $filterBy.parent().animate({opacity: 1}, 300);
        });
        $filterBy.click(function() {
            $selectorText.empty();
            $selectorText.html('Filtrar por:');
            $selector.removeClass('color');
            $filterBy.parent().animate({opacity: 0}, 300);
        });
        if(windowSize > 740) {
            $filterItem.click(function() {
                var text = $(this).html();
                $filterByText.empty();
                $filterByText.html(text);
                $filterBy.addClass('show');
            });
        }
    }
    function formularioPostulate() {
        var formulario = $('.js-formulario__box__button'),
            formularioItem = $('.js-formulario__item');
        formulario.click(function() {
            $(this).addClass('nope');
            $(this).parent().toggleClass('formulario__box--padding');
            formularioItem.stop().slideToggle();
        });
    }
    function newsletter() {
        var lightbox = $('.js-lightbox'),
            opacidad = $('.opac'),
            button = $('.js-newss'),
            cerrar = $('.js-close');
        button.click(function() {
            opacidad.fadeIn();
            lightbox.fadeIn();
        });
        cerrar.click(function() {
            opacidad.fadeOut();
            lightbox.fadeOut();
        });
    }
    function sliderGallery() {
        var slide = $('.js-slider__gallery'),
            textSlide = $('.js-gallery__text p'),
            slideContent = $('.events__single__gallery'),
            fullscreen = $('.js-fullscreen'),
            altura = $window.height();
        slide.flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            controlsContainer: $(".custom-controls-container"),
            prevText: '<svg><use xlink:href="#shape-prev" /></svg>',
            nextText: '<svg><use xlink:href="#shape-next" /></svg>',
            start: function(slider) {
                $('.total-slides').text(slider.count);
                $('.current-slide').text(slider.currentSlide+1);
                var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('title');
                textSlide.empty();
                textSlide.text(title);
            },
            after: function(slider) {
                $('.current-slide').text(slider.currentSlide+1);
                var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('title');
                textSlide.empty();
                textSlide.text(title);
            }
        });
        fullscreen.click(function() {
            if(fullscreen.hasClass('open-gallery')) {
                slideContent.removeClass('slider--fullscreen');
                fullscreen.removeClass('open-gallery');
                slide.find('ul li').css('height', 490);
                slide.resize();
            } else {
                slideContent.addClass('slider--fullscreen');
                fullscreen.addClass('open-gallery');
                slide.find('ul li').css('height', altura);
                slide.resize();
            }
        });

        $('.flex-next, .flex-prev').click(function(){

        });
    }

    function calendarWidget() {
        var $calendar   = $('.wp-calendar'),
            $nextCal    = $calendar.find('#next'),
            $prevCal    = $calendar.find('#prev');

        $nextCal.on('click', function(){
            var $this   = $(this);
            $this.parents('.wp-calendar').removeClass('current').addClass('prev');
            $this.parents('.wp-calendar').next().removeClass('next').addClass('current');
        });
        $prevCal.on('click', function(){
            var $this   = $(this);
            $this.parents('.wp-calendar').removeClass('current').addClass('next');
            $this.parents('.wp-calendar').prev().removeClass('prev').addClass('current');
        });

    }
    function scrollbiotec() {
        var scrollHere = $('.js-scrollhere');
        if (scrollHere.length > 0) {
            body.animate({
                scrollTop: scrollHere.offset().top
            }, 1000);
        }
    }
    function activeChildMenu() {
        var menu = $('.nav-bar .menu');
        if(body.hasClass('becas') || body.hasClass('fondos-concursables')) {
            menu.find('a:nth-child(3)').addClass('.current-menu-item.current-page-ancestor');
        }
        if(body.hasClass('ofertas-laborales') || body.hasClass('tesis')) {
            menu.find('a:nth-child(4)').addClass('.current-menu-item.current-page-ancestor');
        }
        if(body.hasClass('parent-pageid-21')) {
            menu.find('a:nth-child(7)').addClass('.current-menu-item.current-page-ancestor');
        }
    }
    function alturaMoreItems() {
        if($('.more-items').length > 0) {
            var moreItems = $('.more-items').height(),
                items = $('.more-items__item');
            items.css('height', moreItems);
        }
    }
    menubar();
    altoMenu();
    searchbar();
    sliderHome();
    shuffleIn();
    mobileFilters();
    formularioPostulate();
    sliderGallery();
    calendarWidget();
    newsletter();
    scrollbiotec();
    activeChildMenu();
    intitcionesFilters();
    alturaMoreItems();
    $(window).resize(function() {
        sliderHome();
        altoMenu();
    });
})(jQuery);
