/**
 * Created by nickc on 9/10/2016.
 */
"use strict";
//
//Keeps form label in upper-left corner on material form inputs
var formInput=$('.material-form-input');
formInput.blur(function() {
    var current = $(this);
    if (current.val())
        current.addClass('used');
    else
        current.removeClass('used');
});
//
//ripple effect on the buttons
var ripples = $('.ripples');
ripples.click(function(e) {
    var current = $(this);
    var offset = current.parent().offset();
    var cirlce = current.find('.ripplesCircle');
    var x = e.pageX - offset.left;
    var y = e.pageY - offset.top;
    cirlce.css({
        top: y + 'px',
        left: x + 'px'
    });
    current.addClass('is-active');
});
ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
});
//