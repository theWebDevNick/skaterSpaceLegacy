require('./visualEffects');
require('./checkFormAutofill');

var hidden = $('.hidden-initially');
$('.side-menu-toggle').click(function(e){
    e.preventDefault();
    $('.side-menu').toggleClass('side-menu--hidden');
    $('body').toggleClass('body--overlaid');
});

$('.overlay').click(function(e){
    e.preventDefault();
    $('.side-menu').addClass('side-menu--hidden');
    $('body').removeClass('body--overlaid');
});

$('input[name=is_coach]').change(function(){
    if ($(this).val()==1)
    {
        hidden.show(300);
    }
    else
    {
        hidden.hide(300);
    }
});