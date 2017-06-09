
$(function() {
    init();
});


function init()
{  
    var image_style = $("img").attr('style', 'float : right');

/*
    // Методы для работы с CSS
    $("#my p.announce").css('color', '#003399'); // установка значения 1 св-ва
    $(".tt.pm li li").find("a:hover+span").css('color', '#003399'); // установка значения 1 св-ва
      //вторым селектором здесь должен быть .find(" a:hover+span"), но hover не работает(ОШИБКА)

    console.log($("#my").css("color"), '- значение свойства #my'); // получение значения 1 св-ва

    $("footer").css({    //установка значений нескольких свойств (ОШИБКА)
        'background-color' : '0066FF',
        'fount-style' : 'italic'
    });

    $("h4").addClass("second_name"); // Добавление класса
    $("h4").toggleClass("second_name new_name"); // Переключение класса
    $(".second_name").css('opacity', '0.5'); // установка значения вновьдобавленному классу
    $(".new_name").css('font-variant', 'small-caps'); // установка значения переключённому классу

    console.log("Есть ли у н4 класс second_name:", $("h4").hasClass('second_name'));
    console.log("Есть ли у н4 класс new_name:", $("h4").hasClass('new_name'));

    // Методы-обработчики событий
    $("footer span").click(function(){  
        prompt("Who enters your house whith the kind fairy tale?", "");
    })
    $(".tt.pm li a").click(function(event){
        //$(".tt.pm li a").remove();
        alert("Одумайся!");
        event.preventDefault(); // отменяет действие по умолчанию данного элемента после вывода окна alert
        event.stopPropagation(); // отменяет срабатывание обработчика событий родителей (в данном случае - MENUUUUUU)
    })
    $(".tt.pm ul ul").click(function(event){
        alert ("MENUUUUUUUUUUU");
        event.stopImmediatePropagation();  // отменяет действие по умолчанию и наследованное действие от родителей
    })
    $("h4+ul li:nth-child(3)").click(function(){
        alert ("А вот и событие 'клик'");
        return false; // отменяет действие по умолчанию и наследование  от родителей
    })
    $("article.tt.pm>ul").click(function(){
        alert ("Я кликаю, как ... (точнее в любое место списка)");
    })
*/
    
    //Методы Анимации
    $("h1>span").on('click', function() { 
        $("img").hide("3000");
        $("img").show("3000");
    });
    
    $('h4+p a').animate('mouseover', function() {  // почему-то срабатывает сразу при загрузке страницы.
        $('h4+p a').attr('style', 'font-size : 30px');
    });
    $('h4+p a').animate('mouseout', function() {  // вообще не срабатывает(из-за типа события)
        $('h4+p a').attr('style', 'font-size : 16px');
    });
 /*   
    // Методы для работы с DOM
    $("article").after("<hr>");
*/    
    
}
