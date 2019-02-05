//JavaScript Document

$(document).ready(function () {
    var active;
    $('body').on('click', '.item_link', function (e) {
        if(!$(this).hasClass('n_lot')){
            e.preventDefault();
            var index=$(this).closest('.item').index();
            if($(this).hasClass('after')){
                if($('.item').eq(index).hasClass('active')){
                    $('.item').eq(index).removeClass('active');
                    return;
                }
            }
            if($(this).hasClass('profile')) {
                $('.pageContent').eq(index).addClass('active').siblings().removeClass('active');
                $('.item_2').filter('.active').removeClass('active');
            }
            $('.item').eq(index).addClass('active').siblings().removeClass('active');
        }

    });


    $('body').on('click', '.item_link2', function (e) {
        e.preventDefault();
        var	indexList=$(this).closest('.item').index(),
            list=$('.pageContent').eq(indexList);
        list.addClass('active').siblings().removeClass('active');
        $('.item_2').filter('.active').removeClass('active');
        $(this).closest('.item_2').addClass('active');
    })
});