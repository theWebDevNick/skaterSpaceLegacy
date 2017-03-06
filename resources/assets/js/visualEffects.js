/**
 * Created by nickc on 9/10/2016.
 */
//
//Keeps form label in upper-left corner on material form inputs
var formInput=$('.material-form-input');
formInput.blur(function() {
    var $this = $(this);
    if ($this.val())
        $this.addClass('used');
    else
        $this.removeClass('used');
});
//
//ripple effect on the buttons
var $ripples = $('.ripples');
$ripples.click(function(e) {
    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');
    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;
    $circle.css({
        top: y + 'px',
        left: x + 'px'
    });
    $this.addClass('is-active');
});
$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
});
//