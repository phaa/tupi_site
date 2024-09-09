(function ($) {
    "use strict";
    
    /*[ On page load ]
    ===========================================================*/

    //Prevent hidden header bug
    $(window).on("load", function(){
        if($(this).scrollTop() > 5 && $(this).width() > 992) {
            $(header).addClass('header-fixed');
        }
        else {
            $(header).removeClass('header-fixed');
        }
        $('.wrap-menu-header').css('border-top', '5px solid #43A906');
    });

    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });

    /*[ Play video 01]
    ===========================================================
    var srcOld = $('.video-mo-01').children('iframe').attr('src');

    $('[data-target="#modal-video-01"]').on('click',function(){
        $('.video-mo-01').children('iframe')[0].src += "&autoplay=1";

        setTimeout(function(){
            $('.video-mo-01').css('opacity','1');
        },300);
    });

    $('[data-dismiss="modal"]').on('click',function(){
        $('.video-mo-01').children('iframe')[0].src = srcOld;
        $('.video-mo-01').css('opacity','0');
    });
    */

    /*[ Fixed Header ]
    ===========================================================*/
    var header = $('header');
    //var logo = $(header).find('.logo img');

    $(window).on('scroll',function(){
        if($(this).scrollTop() > 5 && $(this).width() > 992) {
            $(header).addClass('header-fixed');
        }
        else {
            $(header).removeClass('header-fixed');
        }
    });

    /*[ Show/hide sidebar ]
    ===========================================================*/
    $('body').append('<div class="overlay-sidebar trans-0-4"></div>');
    var ovlSideBar = $('.overlay-sidebar');
    var hamburger = $("#myHamburger");
    var toogledHamburger = $('#sidebarHamburger');
    var sidebar = $('.sidebar');

    var callback = function() {
        hamburger.toggleClass("hidden");
        hamburger.toggleClass("is-active");
        toogledHamburger.toggleClass("is-active");
        sidebar.toggleClass('show-sidebar');
        ovlSideBar.toggleClass('show-overlay-sidebar');
        $("body, html").toggleClass("overflow-diff");
    }

    //When the hamburger is inside the upper nav
    hamburger.on('click', function(){
        callback();
    })

    //When the hamburger is inside the sidebar
    toogledHamburger.on('click', function(){
        callback();
    })

    //Sidebar overlay
    ovlSideBar.on('click', function(){
        callback();
    })


    /*[ Isotope ]
    ===========================================================*/
    var topeContainer = $('.isotope-grid');
    var filter = $('.filter-tope-group');

    // init Isotope
    $(window).on('load', function () {
        var grid = topeContainer.each(function () {
            $(this).isotope({
                itemSelector: '.isotope-item',
                percentPosition: true,
                animationEngine : 'best-available',
                masonry: {
                    columnWidth: '.isotope-item'
                }
            });
        });
    });

    // filter items on button click
    filter.each(function () {
        filter.on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            //Toda vez que filtrar, ele vai apagar todos os elementos do grid primeiro 
            //para liberar memoria
            topeContainer.empty();

            //que cada filtro vai corresponder a uma pasta, então vou pegar um pouco 
            //de imagens daquela pasta
            topeContainer.isotope({filter: filterValue});
            //filterValue = some folder on server
            //get a chunck from that folder laravel querySet->paginate(3)

            //make some ajax request to get that images from server on button click 
            //or use jscroll to fill isotope grid on user scroll

            /**
             * var options = {
             *      loadingHtml: '<img src="loading.gif" alt="Loading" /> Loading...',
             *      padding: 20,
             *      nextSelector: 'some <a> with laravel route'
             * };
             * 
             * Something like:
             * $(function() {
             *     $('.isotope-grid').jscroll();    
             * });
             * 
             * A medida que for descendo a pagina, vai pegando as imagens que correspondem 
             * ao filtro atual.
             */

            
            //aqui vamos colocar as requisições AJAX para puxar as imagens 
        });

    });

    //Coloca o risco verde embaixo do ativo
    var labelGallerys = $('.label-gallery');

    $(labelGallerys).each(function(){
        $(this).on('click', function(){
            for(var i=0; i<labelGallerys.length; i++) {
                $(labelGallerys[i]).removeClass('is-actived');
            }
            $(this).addClass('is-actived');
        });
    });   

    lightbox.option({
        'disableScrolling' : true
    });

})(jQuery);
