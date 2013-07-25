$(window).load(function () {
    $('#featured').orbit();
});
jQuery(document).ready(function () {
    jQuery('#mycarousel').jcarousel({
        wrap: 'last',
        auto: true,
        vertical: true,
        scroll: 3
    });

    $('ul.spisok_product').hide();
    $('ul.spis_sub').hide();
    $("ul.menu_left li span").click(clickhalder);
    $("ul.spisok_product li span").click(clickhalder1);
    function clickhalder1() {
        var thisSpan = $(this).parent().find('span');
        if (thisSpan.hasClass('min')) {
            thisSpan.removeClass('min');
        }
        else {
            $('span.min').removeClass('min');
            $(this).addClass('min');
        }
        $(this).find().next().slideToggle(300);
    }

    function clickhalder() {
        if (0 == $(this).next().is(':visible')) {
            $('ul.spis_sub').slideUp(300);

        }
        $(this).next().slideToggle(300);

    }

    $('ul.spis_sub1').hide();
    $("ul.categories li span").click(function () {
        if (false == $(this).next().is(':visible')) {
            $('ul.categories li span').removeClass();
            $(this).parents().find('ul.spis_sub1').slideUp(300);
        }
        $(this).toggleClass('min1');
        $(this).next().slideToggle(300);
    });
});