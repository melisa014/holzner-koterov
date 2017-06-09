

$(function() {
    init();
});

function init()
{  
    var image_style = $("img").attr('style', 'float : right');

    //Методы Анимации
    $("h1>span").on('click', function() {   // Срабатывает только если закомментить оба метода animate(ниже)
        $("img").hide("3000");
        $("img").show("3000");
    });
    
    $('h4+p a').animate('mouseover', function() {  // почему-то срабатывает сразу при загрузке страницы.
        $('h4+p a').attr('style', 'font-size : 30px');
    });
    $('h4+p a').animate('mouseout', function() {  // вообще не срабатывает(из-за типа события)
        $('h4+p a').attr('style', 'font-size : 16px');
    });
}

