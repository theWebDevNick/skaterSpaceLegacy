require('./bootstrap');
require('./visualEffects');
require('./checkFormAutofill');
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
