// Сворачивание/разворачивание, замена иконки 
$(document).on('click', '.flex-row',function(){
    $(this).next('.slide-block').slideToggle();
    style=$(this).find('#plus').css('display');
    if (style=='block') {
        $(this).find('#minus').css({'display':'block'});
        $(this).find('#plus').css({'display':'none'});
    } else {
        $(this).find('#minus').css({'display':'none'});
        $(this).find('#plus').css({'display':'block'});
    }
});