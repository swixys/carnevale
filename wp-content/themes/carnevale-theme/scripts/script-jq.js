$('.flowing-scroll').on( 'click', function(){
    var el = $(this);
    var dest = el.attr('href'); // получаем направление
    if(dest !== undefined && dest !== '') { // проверяем существование
        $('html').animate({
                scrollTop: $(dest).offset().top -120// прокручиваем страницу к требуемому элементу
            }, 1000 // скорость прокрутки
        );
    }
    return false;
});

$(".menu__list li").addClass("menu__item");
$(".menu__list li a").addClass("menu__link");