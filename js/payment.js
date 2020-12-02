jQuery(document).ready(function($) {
    var price1 = $('.price1').html();
    var price2 = $('.price2').html();
    var price3 = parseInt(price1) + parseInt(price2);

    price1 = price1.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
    price2 = price2.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
    price3 = price3.toString().replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');

    $('.price1').html(price1);
    $('.price2').html(price2);
    $('.price3').html(price3);

    $('.price2').change(function() {
        var cprice2 = $('.price2').html();
        price3 = parseInt(price1) + parseInt(price2);
        price3 = price3.toString().replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
        $('.price3').html(price3);
    });
});