$(function () {
    console.log($('#iframe-slider').css('width'));
    var contCentroPosLeft = function () {
        return $('.cont-centro').offset().left;
    };
    var contCentroWidth = function () {
        return parseFloat($('.cont-centro').css('width'));
    };
    var contBandLeftWidth = function () {
        return parseFloat($('#cont-band-left').css('width'));
    };
    var imgBackHover = 'img/SVG/Botones_Over/40 px blanco.svg';
    var imgBack = 'img/SVG/Botones/40 px blanco.svg';
    var imgFunHover = 'img/SVG/Botones_Over/40 px next.svg';
    var imgFun = 'img/SVG/Botones/40 px next.svg';
    var imgOn = 'img/SVG/Botones/40 px on.svg';
    var imgOnHover = 'img/SVG/Botones_Over/40 px on.svg';
    var clickOn = 0;
    var clickfun = 0;
    var clickCc = 0;
    $('.example').jdSlider();
    $('.example').jdSlider({

        // enable/disable the carousel
        isUse: true,

        // wrapper element
        wrap: null,

        // default CSS selectors
        slide: '.slide-area',
        prev: '.prev',
        next: '.next', // 다음 버튼 선택자
        indicate: '.indicate-area',
        auto: '.auto',
        playClass: 'play',
        pauseClass: 'pause',
        noSliderClass: 'slider--none',
        willFocusClass: 'will-focus',
        unusedClass: 'hidden',

        // how many slides to display at a time
        slideShow: 1,

        // how many slides to scroll at a time
        slideTo: 1,

        // start slide
        slideStart: 1,

        // margin property
        margin: null,

        // animation speed
        speed: 500,

        // easing
        timingFunction: 'ease',
        easing: 'swing',

        // autoplay interval
        interval: 4000,

        // touch throttle
        touchDistance: 20,

        // resistance ratio
        resistanceRatio: .5,

        // is overflow
        isOverflow: false,

        // shows indicator
        isIndicate: true,

        // is autoplay
        isAuto: false,

        // is infinite loop
        isLoop: false,

        // false: use fade animation instead
        isSliding: true,

        // pause on hover
        isCursor: true,

        // enable touch event
        isTouch: true,

        // enable drag event
        isDrag: true,

        // enable swipe resistance
        isResistance: true,

        // auto playback
        isCustomAuto: false,

        // auto playback
        autoState: 'auto',

        // custom indicator
        indicateList: function (i) {
            return '<a href="#">' + i + '</a>';
        },

        // progress function
        progress: function () {}

    });
    $(window).resize(function () {
        $('#cont-band-left').css('left', contCentroPosLeft() - contBandLeftWidth() - 3);
        $('#cont-band-right').css('left', contCentroPosLeft() + parseFloat($('.cont-centro').css('width')) - 2);
        console.log($(window).width());
        if ($(window).width() < 1000 && $(window).width() > 768) {

        } else {

        }
    });
    $('.highlight').click(function () {
        $(this).hide();
    });
    //$('#estilos').attr('href', $('#estilos').attr('href') + '?v=' + Date.now());
    //$('#script').attr('src', $('#script').attr('src') + '?v=' + Date.now());


    window.addEventListener("orientationchange", function () {
        /*console.log('giro '+giro);*/
        if (screen.orientation.angle == 0) {
            /*console.log('portrait giro '+giro);*/
            console.log('portrati');
        } else {
            console.log('landscape');
            /*window.location.replace('http://recursos.thematic.com.co/presidente/index.php?giro=1');*/
        }
    }, false);
    var clicknumeral = 0;
    var clickgifnumeral = 0;
    var clickLogo = 0;
    $('#cont-band-left').animate({
        left: contCentroPosLeft() - contBandLeftWidth() - 3
    }, {
        duration: 2000
    });
    $('#cont-band-right').animate({
        left: contCentroPosLeft() + contCentroWidth() - 2
    }, 2000, function () {
        $('#text-el').animate({
            opacity: '+=1'
        }, 2000);
        $('#text-pre').animate({
            opacity: '+=1'
        }, 2000);
        $('#text-dela').animate({
            opacity: '+=1'
        }, 2000);
        $('#text-rep').animate({
            opacity: '+=1'
        }, 2000);
        $('#text-ysus').animate({
            opacity: '+=1'
        }, 2000);
        $('#text-fun').animate({
            opacity: '+=1'
        }, 2000, function () {
            $('#cont-inicio').animate({
                opacity: 1
            }, 800);
            $('#inicio').animate({
                opacity: 1
            }, 800);
            $('#buttons').animate({
                opacity: 1
            }, 800);
            $('#controls').animate({
                opacity: 1
            }, 800);
        });
    });

    $('#inicio-text').click(function () {
        $('#cont-captions').hide();
        $('#gif-slider').show(300);
        $('#boton-slider').show(300);
        $('#cont-img-refresh').show(300);
        $('#cont-img-funciones').show(300);
        $('#cont-back-logo').show(300);
        $('#cont-cc-logo').hide(300);
        $('#cont-on-logo').hide(300);
        $('#cont-img-corneta').hide(300);
        $('#controls').css('right', '0');
        $('#cont-inicio').hide(300);
        $('#cont-band-left').hide(100);
        $('#backlogoo').attr("src", "img/SVG/Botones/40 px blanco.svg");
        $('#backlogoo').click(false);
        $('.row').animate({
            marginLeft: 0
        }, {
            duration: 1000,
            progress: function () {
                contCentroPos = $('.cont-centro').offset();
                contCentroWidth = parseFloat($('.cont-centro').css('width'));
                $('#cont-band-right').css('left', contCentroPos.left + contCentroWidth - 2);
            },
            done: function () {
                $('.row').animate({
                    width: '15%'
                }, {
                    duration: 800,
                    progress: function () {
                        contCentroPos = $('.cont-centro').offset();
                        contCentroWidth = parseFloat($('.cont-centro').css('width'));
                        $('#cont-band-right').css('left', contCentroPos.left + contCentroWidth - 2);
                    }
                });
                $('#cont-band-right').animate({
                    width: '1%'
                }, 800, function () {
                    $('#slider-pre').fadeToggle(600);
                    $('.iframe-slider').fadeToggle(800);
                    $('.arrow-pre').animate({
                        opacity: '+=1'
                    }, 800);
                    $('#boton-slider').animate({
                        opacity: '+1'
                    }, 800);
                    $('#gif-slider').animate({
                        opacity: '+1'
                    }, 800);
                });

            }
        });
    });
    var botSliderClick = 0;
    $('#refresh').click(function () {
        location.reload();
    });
    $('.img-button').click(function () {
        $(this).animate({
            marginTop: '100%'
        }, 100, function () {
            $(this).animate({
                marginTop: 0
            }, 100);
        });
    });

    $('#gif-slider').click(function () {
        var iframe = document.getElementById('iframe-slider');
        if (screen.width < 769) {
            $(this).animate({
                top: '49%'
            }, 100, function () {
                $(this).animate({
                    top: '48.6%'
                }, 100);
            });
        } else {
            $(this).animate({
                top: '51%'
            }, 100, function () {
                $(this).animate({
                    top: '49%'
                }, 100);
            });
        }

        botSliderClick++;
        if (botSliderClick == 1) {
            $('.parrafo-func').animate({
                opacity: 0
            }, 300);
            iframe.contentWindow.postMessage({
                click: botSliderClick
            }, '*');
            $(this).css('transform', 'rotate(270deg)');
            $('.iframe-slider').animate({
                width: '82%'
            }, {
                duration: 1500
            });
        }
        if (botSliderClick == 2) {
            $('.parrafo-func').animate({
                opacity: 1
            }, 300);
            iframe.contentWindow.postMessage({
                click: botSliderClick
            }, '*');
            $(this).css('transform', 'rotate(90deg)');
            $('.iframe-slider').animate({
                width: '40%'
            }, {
                duration: 1500
            });
            botSliderClick = 0;
        }

    });
    $('#funciones-button').click(function () {
        if (clickfun == 0) {
            $('.gif-numeral').show(300);
            $('[id^=flecha]').show(300);
            $('.numeral').hide(300);
            $('#gif-numeral').show(300);
            $('#parrafo-quien').animate({
                opacity: 1
            }, 300);
            $('[id^=arrow]').show(300);
            $('[id^=arrow]').animate({
                opacity: 1
            }, 800);
            $('.cont-arrow-func').animate({
                marginRight: '2%'
            }, 200);
            //$('#cont-img-funciones').hide(300);
            imgFun = 'img/SVG/Botones/40 px blanco.svg';
            imgFunHover = 'img/SVG/Botones_Over/40 px blanco.svg'
            $('#funciones-button').attr('src', imgFun);
            //$(this).click(false);
            imgBack = 'img/SVG/Botones/40 px back.svg';
            imgBackHover = 'img/SVG/Botones_Over/40 px back.svg';
            $('#backlogoo').attr('src', imgBack);
            $('#cont-img-back').show(300);
            $('#boton-slider').hide(300);
            $('#slider-pre').hide(300);
            $('.iframe-slider').hide(300);
            $('#gif-slider').hide(300);
            $('#funciones-tipo').show(800);
            $('#titulo-tipo').show(800);
            $('#funciones-tipo').animate({
                opacity: '+=1'
            }, 800);
            //numeral1();
            clickfun = 1;

        }
    });
    $('#funciones-button').hover(function () {
        $(this).attr('src', imgFunHover);
    }, function () {
        $(this).attr('src', imgFun);
    });
    $('#backlogoo').click(function () {
        clickfun = 0;
        imgBack = 'img/SVG/Botones/40 px blanco.svg';
        imgBackHover = 'img/SVG/Botones_Over/40 px blanco.svg';
        imgFun = 'img/SVG/Botones/40 px next.svg';
        imgFunHover = 'img/SVG/Botones_Over/40 px next.svg';
        $('.numeral').hide();
        $('.containerf').show();
        clicknumeral = 0;
        if (clickgifnumeral == 1) {
            //$('#funciones-button').click(true);
            $('.cont-arrow-des').hide(300);
            $('#funciones-button').click();
            clickgifnumeral = 0;

        } else {
            $('[id^=flecha]').hide(300);
            $('.cont-arrow-des').hide(300);
            $('.descri-numeral').hide(300);
            //$('#cont-img-funciones').show(300);
            $('#funciones-button').attr('src', 'img/SVG/Botones/40 px next.svg');
            //$('#funciones-button').click(true);
            //$('#cont-img-back').hide(300);
            $('#backlogoo').attr('src', 'img/SVG/Botones/40 px blanco.svg');
            //$('#backlogoo').click(true);
            $('#boton-slider').show(300);
            $('#slider-pre').show(300);
            $('.iframe-slider').show(300);
            $('#gif-slider').show(300);
            $('#funciones-tipo').hide(800);
            $('#titulo-tipo').hide(800);
            $('#funciones-tipo').animate({
                opacity: '+=0'
            }, 800);
            $('#arrow-gif').show(300);
            $('#arrow-gif').animate({
                opacity: '+=1'
            }, 300);
            //$(this).click(false);

        }
        $('[id^=descri-numeral').hide(300);
    });
    $('#backlogoo').hover(function () {
        $(this).attr('src', imgBackHover);
    }, function () {
        $(this).attr('src', imgBack);
    });
    $('#onlogo').click(function () {
        if (clickOn == 0) {
            imgOn = 'img/SVG/Botones/40 px off.svg';  
            imgOnHover = 'img/SVG/Botones_Over/40 px off.svg'; 
            $("#audio").prop("currentTime",0);           
            $('#audio')[0].play();            
            clickOn = 1
        }else{
            imgOn = 'img/SVG/Botones/40 px on.svg';
            imgOnHover = 'img/SVG/Botones_Over/40 px on.svg'; 
            clickOn = 0;
            $('#audio')[0].pause();           
        }
        $(this).attr('src', imgOn);
    });
    $('#onlogo').hover(function () {
        $(this).attr('src', imgOnHover);
    }, function () {
        $(this).attr('src', imgOn);
    });
    $('#cclogoo').click(function(){
        if(clickCc == 0){
            $('#cont-captions').show();
            clickCc = 1;
        }else{
            $('#cont-captions').hide();
            clickCc = 0;
        }
        
    });    
    $('.oculto-arrow-des').click(function () {
        var n = $(this).attr('data-numeral');
        $(this).parent().animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
            console.log(n);
            $('#numeral' + n).show(300);
            $('.descri-numeral').fadeOut(300);
        });
    });
    //$('.numeral').click(function () {
    $('.oculto-arrow').click(function () {
        $('.descri-numeral').fadeOut(300);
        //$('.gif-item').show(300);
        $('.containerl').show(300);
        $('.numeral').show(300);
        //$(this).hide(300);
        $('.containerf').show();
        //$(this).parent().hide();
        clicknumeral = 1;
        clickgifnumeral = 1;
        $('#parrafo-quien').animate({
            opacity: 0
        }, 300);
        $('[id^=arrow]').animate({
            opacity: 0
        }, 800, function () {
            $(this).hide();
        });
        $('.cont-arrow-func').animate({
            marginRight: 0
        }, 200);
    });

    $('.gif-numeral').click(function () {
        clickgifnumeral = 1;
        var n = $(this).attr('data-n');
        $(this).hide(300);
        $('#numeral' + n).click();
    });
    //$('#numeral1').click(function () {
    //$('#containerf1').click(function () {
    //$('[id*=chevron1]').click(function () {
    $('#oculto-arrow1').click(function () {
        $('#numeral1').hide(300);
        $('#gif-numeral1').hide(300);
        //top antes de cata 18,5
        var top = 18;
        if (screen.width <= 768) {
            //top antes de cata 20
            top = 20;
        }
        $('#cont-arrow-des1').show();
        $('#cont-arrow-des1').animate({
            top: top + '%'
        }, 800);
        $('#cont-arrow-des2').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des3').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des4').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des5').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });

    });
    //$('#numeral2').click(function () {
    $('#oculto-arrow2').click(function () {
        $('#numeral2').hide(300);
        $('#gif-numeral2').hide(300);
        var top = 18.5;
        if (screen.width <= 768) {
            top = 20;
        }
        $('#cont-arrow-des2').show();
        $('#cont-arrow-des2').animate({
            top: top + '%'
        }, 800);
        $('#cont-arrow-des1').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des3').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des4').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des5').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
    });
    //$('#numeral3').click(function () {
    $('#oculto-arrow3').click(function () {
        $('#numeral3').hide(300);
        $('#gif-numeral3').hide(300);
        var top = 18.5;
        if (screen.width <= 768) {
            top = 20;
        }
        $('#cont-arrow-des3').show();
        $('#cont-arrow-des3').animate({
            top: top + '%'
        }, 800);
        $('#cont-arrow-des2').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des1').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des4').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des5').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
    });
    //$('#numeral4').click(function () {
    $('#oculto-arrow4').click(function () {
        $('#numeral4').hide(300);
        $('#gif-numeral4').hide(300);
        var top = 18.5;
        if (screen.width <= 768) {
            console.log('mobil');
            top = 20;
        }
        $('#cont-arrow-des4').show();
        $('#cont-arrow-des4').animate({
            top: top + '%'
        }, 800);
        $('#cont-arrow-des2').animate({
            top: '82%'
        }, {
            duration: 800,
            progress: function () {
                $(this).hide(100);
            }
        });
        $('#cont-arrow-des3').animate({
            top: '82%'
        }, {
            duration: 800,
            progress: function () {
                $(this).hide(100);
            }
        });
        $('#cont-arrow-des1').animate({
            top: '82%'
        }, {
            duration: 800,
            progress: function () {
                $(this).hide(100);
            }
        });
        $('#cont-arrow-des5').animate({
            top: '82%'
        }, {
            duration: 800,
            progress: function () {
                $(this).hide(100);
            }
        });
    });

    $('#list-1 li').click(function () {
        $(this).css({
            'color': '#fff',
            'background-image': "url('img/SVG/Over_menus/over-menu-defensa.svg')",
            'background-repeat': 'no-repeat',
            'background-size': 'cover'
        });
        $(this).siblings().css({
            'background-image': '',
            'color': '#333'
        });
    });

    $('#list-2 li').click(function () {
        $(this).css({
            'color': '#fff',
            'background-image': "url('img/SVG/Over_menus/over-menu-politica.svg')",
            'background-repeat': 'no-repeat',
            'background-size': 'cover'
        });
        $(this).siblings().css({
            'background-image': '',
            'color': '#333'
        });
    });

    $('#list-3 li').click(function () {
        $(this).css({
            'color': '#fff',
            'background-image': "url('img/SVG/Over_menus/over-menu-funciones.svg')",
            'background-repeat': 'no-repeat',
            'background-size': 'cover'
        });
        $(this).siblings().css({
            'background-image': '',
            'color': '#333'
        });
    });

    $('#list-4 li').click(function () {
        $(this).css({
            'color': '#fff',
            'background-image': "url('img/SVG/Over_menus/over-menu-inspeccion.svg')",
            'background-repeat': 'no-repeat',
            'background-size': 'cover'
        });
        $(this).siblings().css({
            'background-image': '',
            'color': '#333'
        });
    });

    $('#list-5 li').click(function () {
        $(this).css({
            'color': '#fff',
            'background-image': "url('img/SVG/Over_menus/over-menu-gobierno.svg')",
            'background-repeat': 'no-repeat',
            'background-size': 'cover'
        });
        $(this).siblings().css({
            'background-image': '',
            'color': '#333'
        });
    });

    //$('#numeral5').click(function () {
    $('#oculto-arrow5').click(function () {
        $('#numeral5').hide(300);
        $('#gif-numeral5').hide(300);
        var top = 18.5;
        if (screen.width <= 768) {
            console.log('mobil');
            top = 20;
        }
        $('#cont-arrow-des5').show();
        $('#cont-arrow-des5').animate({
            top: top + '%'
        }, 800);
        $('#cont-arrow-des2').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des3').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des4').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
        $('#cont-arrow-des1').animate({
            top: '82%'
        }, 800, function () {
            $(this).hide();
        });
    });


    $('#link-quien').click(function () {
        $('#tooltip-quien').css('display', 'inline-flex');
        $('#close-eleccion').click();
    });
    $('#link-eleccion').click(function () {
        $('#tooltip-eleccion').css('display', 'inline-flex');
        $('#close-quien').click();
    });
    $('#close-quien').click(function () {
        $('#tooltip-quien').css('display', 'none');
    });
    $('#close-eleccion').click(function () {
        $('#tooltip-eleccion').css('display', 'none');
    });
    $('[id^=item]').click(function () {
        //$('.gif-item').hide(300);
        $('.containerl').hide(300);
        var n = $(this).attr('data-item');
        if ($('#parrafo-quien').css('opacity') == 1) {
            $('#parrafo-quien').animate({
                opacity: 0
            }, 800);
        }
        $('.descri-numeral').hide(100, function () {
            $('#descri-numeral' + n).css('display', 'flex');
            $('#descri-numeral' + n).show(100);
        });
    });
    $('#thematic-logo').click(function () {
        $('.highlight').show();
        $('#creditos').show(300);
        clickLogo = 1;
    });
    $('#close-creditos').click(function () {
        $('#creditos').hide(300);
    });
    $('#close-slider1').click(function () {
        /*$('#slider-fuerza').css('visibility', 'hidden');
        $('#slider-fuerza').css('height', '0%');]*/
        $('#img-funciones').hide();
    });
    $('#close-slider2').click(function () {
        $('#img-mins2').hide();
    });
    $('#close-slider4').click(function () {
        $('#img-depts').hide();
    });
    $('#close-slider3').click(function () {
        $('#img-super').hide();
        /*$('#slider-super').css('visibility', 'hidden');
        $('#slider-super').css('height', '0%');*/
    });
    $('#next-img').click(function () {
        $('#img-mins2').show();
        $('#img-mins1').hide();
    });

    $('#prev-img').click(function () {
        $('#img-mins1').show();
        $('#img-mins2').hide();
    });
    $('#info-fuerza').click(function () {
        $('#img-funciones').show();
        /*$('#slider-fuerza').css('visibility', 'visible');
        $('#slider-fuerza').css('height', 'auto');*/
    });
    $('#info-mins').click(function () {
        console.log('info misn');
        $('#img-mins1').show();
        /*$('#slider-mins').css('visibility', 'visible');
        if (screen.width < 769) {
            $('#slider-mins').css('height', '100%');
        } else {
            $('#slider-mins').css('height', 'auto');
        }*/
    });
    $('#info-admin').click(function () {
        $('#img-depts').show();
    });
    $('#info-super').click(function () {
        $('#img-super').show();
        /*$('#slider-super').css('visibility', 'visible');
        $('#slider-super').css('height', 'auto');*/
    });



});