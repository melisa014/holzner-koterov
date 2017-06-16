
$(function() {
    init();
});


function init()
{  
    // Методы для работы с CSS
    var image_style = $("img").css({
        'float' : 'right'        
    });
    $('footer').css({
        'background-color' : '#99CCFF',  
        'font-style' : 'italic',
        'box-shadow' : '1px 1px 3px 3px #999999',
        'position' : 'relative'
    });
    $('body').css('background-color', '#FFFFCC');
    $('h1').css({
        'font-family' : 'Monotype Corsiva',
        'text-align' : 'center'
    });
//    $('div img').css('display', 'none');
    
        
    $("#my p.announce").css('color', '#003399'); // установка значения 1 св-ва
    $(".tt.pm li li").find("a:hover+span").css('color', '#003399'); // установка значения 1 св-ва
      //вторым селектором здесь должен быть .find(" a:hover+span"), но hover не работает(ОШИБКА)
    console.log($("#my").css("color"), '- значение свойства #my'); // получение значения 1 св-ва

      //добавление/изменение классов "на лету"
    $("h4").addClass("second_name"); // Добавление класса
    $("h4").toggleClass("second_name new_name"); // Переключение класса
    $(".second_name").css('opacity', '0.5'); // установка значения вновьдобавленному классу
    $(".new_name").css('font-variant', 'small-caps'); // установка значения переключённому классу

    console.log("Есть ли у н4 класс second_name:", $("h4").hasClass('second_name'));
    console.log("Есть ли у н4 класс new_name:", $("h4").hasClass('new_name'));


    // Методы-обработчики событий
    $("footer span").click(function(){  
        prompt("Who enters your house whith the kind fairy tale?", "");
    });
    $("#danger").click(function(event){
        //$(".tt.pm li a").remove();
        alert("Одумайся!");
        event.preventDefault(); // отменяет действие по умолчанию данного элемента после вывода окна alert
        event.stopPropagation(); // отменяет срабатывание обработчика событий родителей (в данном случае - MENUUUUUU)
    });
    //ниже описаны учебные обработчики события клик. Они закомментированы, чтобы не мешать обработчикам из раздела AJAX 
//    $(".tt.pm ul ul").click(function(event){
//        alert ("MENUUUUUUUUUUU");
//        event.stopImmediatePropagation();  // отменяет действие по умолчанию и наследованное действие от родителей
//    })
//    $("h4+ul li:nth-child(3)").click(function(){
//        alert ("А вот и событие 'клик'");
//        return false; // отменяет действие по умолчанию и наследование  от родителей
//    })
//    $("article.tt.pm>ul").click(function(){
//        alert ("Я кликаю, как ... (точнее в любое место списка)");
//    })

    
    //Методы Анимации
    $("img").fadeIn("100000");  //почему-то появляется сразу 
    
    $("h1>span").on('click', function() { 
        $("img").hide("3000");
        $("img").show("3000");
    });
    
    $('h4+p a').on('mouseover', function() {  
        $('h4+p a').animate({'font-size' : '30px'});
    });
    $('h4+p a').on('mouseout', function() { 
        $('h4+p a').animate({'font-size' : '16px'});
    });
        
    
    
    // Методы для работы с DOM
    $("article").after("<hr>");
    
    
    // Методы для работы с формой (здесь submit - событие)
    $('form').submit(function(){
        if ($(this).find($('input[name=name]')).val() === '') {
            alert('Введите имя!');
            return false;
        }
//        if ($(this).find($('input[name=php]')).prop('checked', false)) { // Почему условие изменяет значение атрибута?
//            alert('Выберите хотя бы один язык программрования!');
//            return false;
//        }
        $.post(
                $(this).attr('action'),
                $(this).serialize()
                );
    });
               

    // Методы для работы с AJAX 
        
    heandler(); // ф-ция добавляет вопрос о языках программирования в форму
        
    $(function(){ // ф-ция по клику подгружает картинки на страницу
        $('ul.navigation a').click(function(){
            $('#logo').hide("5000");
            var url = $(this).attr('href');
            $('#logo').load(url);
            $('#logo').css('float', 'right').show("5000");
            return false;
        });
    });
        
        //когда посылать запрос
    function heandler()
    {
        $('#userName').on('mouseover', function(){
            ajaxSend();
            $(this).off();
        });
    }    
    
    // отправляем запрос к серверу 
    function ajaxSend()
    {
        showLoaderIdentity();
        $.ajax({
            url: 'ajaxHtml.html',
            dataType: 'html'      
        }).done(function(res){
            hideLoaderIdentity();
            console.log('Ответ получен,', res);
            $('form').append(res);
//            if(res.success){
//                console.log('OK');
//                $('form').append(res);
//            } else {
//                console.log('Пришли не те данные');
//                alert(res.message);
//            }
        }).fail(function() {
            hideLoaderIdentity();
            console.log('Ошибка соединения с сервером');     
        });
    }
     
    // выводим идентификатор
    function showLoaderIdentity() 
    {
        $("#loader-identity").show("slow");
    }

    // скрываем идентификатор
    function hideLoaderIdentity() 
    {
       $("#loader-identity").hide();  
    }
    
    
    // Методы Deffered
//    
//      //notify и progress
//    var D = $.Deferred();
//    var money = 100; // наш бюджет
//    // съём денежки
//    D.progress(function($){
//        console.log(money + " - " + $ + " = " + (money-$));
//        money -= $;
//        if (money < 0) {
//        // деньги закончиличь
//        this.reject();
//        }
//    });
//    // тратим деньги
//    setTimeout(function(){ D.notify(40); }, 500); // покупка 1
//    setTimeout(function(){ D.notify(50); }, 1000); // покупка 2
//    setTimeout(function(){ D.notify(30); }, 1500); // покупка 3
//    D.done(function(){console.info("All Ok");});
//    D.fail(function(){console.error("Insufficient Funds");});
    
    
    // Мой плагин
    (function($){  
        var defaults = {color: 'green'};
        var options;
        $.fn.myPlugin = function(params){
            console.log(options, 'options');        
            options = $.extend({}, defaults, options, params); 
            /* объект options  хранит в себе информацию о свойстве, передаваемом плагином
            метод extend() позволяет изменять объект динамически. приоритет свойств - в порядке, указанном в скобках*/ 
            $(this).on('click.pluginSpase',function(){ // здесь непосредственный обработчик события объявленв своём namespace, чтобы можно было отделить его вызов от других кликов, либо удалить
                $(this).css('color', options.color);
            });           
        }; 
    })(jQuery);
    
    $('p').myPlugin();  // так цвет будет по умолчанию (defaults)
    $('p').myPlugin({color : '#CC3300'}); // так цвет будет установлен пользовательем (params)
    $('p').myPlugin(); // теперь цвет останется тем, что указан в предыдущем вызове (options)
}
