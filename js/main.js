$(function(){
    if ($(document).scrollTop() < 100)
    { $("#button-top").fadeOut(0); }
    $(document).scroll(function() {
        if ($(this).scrollTop() >= 100)
        {
            $("#button-top").fadeIn(250);
        }
        else
        {
            $("#button-top").fadeOut(250);
        }
    })
})