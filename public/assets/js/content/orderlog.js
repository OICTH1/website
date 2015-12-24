$('.log-list-item').click(function() {
    var $datail = $(this).children('.datail');
    var $title = $(this).children('.title');
    if($datail.hasClass('open')) {
        $datail.removeClass('open');
        $datail.slideUp('slow');
        var $a = $title.find('.titleright');
        $a.removeClass('closeicon');
        $a.addClass('openicon');
    } else {
        $datail.addClass('open');
        $datail.slideDown('slow');
        var $a = $title.find('.titleright');
        $a.removeClass('openicon');
        $a.addClass('closeicon');
    }
});
