$(document).ready(function(){

    $("#year-carousel").owlCarousel({
        dots:false,
        items: 1
    });

    $("#month-carousel").owlCarousel({
        dots:false,
        loop: false,
        responsive:{
            0:{
                items: 3
            },
            600:{
                items:7
            },
            1000:{
                items:12
            }
        }
    });

    $("#day-carousel").owlCarousel({
        dots:false,
        responsive:{
            0:{
                items: 5
            },
            600:{
                items:10
            },
            1000:{
                items:15
            }
        }
    });

    var itemIndex = $("#day-carousel .owl-item .item.selected").parent().index();
    $("#day-carousel").trigger('to.owl.carousel', itemIndex);

    var IsPresentFeb = false;
    $('#month-carousel .item').click(function() {
        console.log('clicked');
        $('#month-carousel .item').removeClass('selected');
        var CurYear = $("#year-carousel").text();
        $(this).addClass('selected');   
        var CurSelected = $(this).text().toUpperCase();
        if((CurSelected == "JAN") || (CurSelected == "MAR") || (CurSelected == "MAY") || (CurSelected == "JUL") || (CurSelected == "AUG") || (CurSelected == "OCT") || (CurSelected == "DEC")) {
            $('#day-carousel .owl-item:nth-child(31)').show();
            if(IsPresentFeb) {
                $('#day-carousel .owl-item:nth-child(30)').show();
                $('#day-carousel .owl-item:nth-child(29)').show();
                IsPresentFeb = false;
            }
        }
        else if((CurSelected == "APR") || (CurSelected == "JUN") || (CurSelected == "SEP") || (CurSelected == "NOV")) {
            $('#day-carousel .owl-item:nth-child(31)').hide().slow();
            if(IsPresentFeb) {
                $('#day-carousel .owl-item:nth-child(30)').show();
                $('#day-carousel .owl-item:nth-child(29)').show();
                IsPresentFeb = false;
            }
        }
        else if((CurSelected == "FEB")) {
            IsPresentFeb = true;
            $('#day-carousel .owl-item:nth-child(31)').hide();
            $('#day-carousel .owl-item:nth-child(30)').hide();
            $('#day-carousel .owl-item:nth-child(29)').hide();
        }
    });

    $('#day-carousel .item').click(function(){
        $('#day-carousel .item').removeClass('selected');
        $(this).addClass('selected');   
    });

    $('.btn-inline-container .btn').click(function(){
        $('.btn-inline-container .btn').removeClass('selected');        
        $(this).addClass('selected');
    });

    $('.menu-icon').click(function(){
        $(this).parent().parent().parent().parent().toggleClass('slide-out');
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('body').on('click', function (e) {
        if ($(e.target).data('toggle') !== 'tooltip'
            && $(e.target).parents('.tooltip.in').length === 0) { 
            $('[data-toggle="tooltip"]').tooltip('hide');
        }
    });

    $('.collapse').on('show.bs.collapse', function () {
        $(this).siblings('.card-header').addClass('active');
    });

    $('.collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.card-header').removeClass('active');
    });

    $('.grid-view-btn').click(function() {
        console.log('grid');
        $('.gridview').show();
        $('.mapview').hide();
        $(this).addClass('btn-primary');
        $('.map-view-btn').removeClass('btn-primary').addClass('btn-secondary');
    });

    $('.map-view-btn').click(function() {
        console.log('grid');
        $('.mapview').show();
        $('.gridview').hide();
        $(this).addClass('btn-primary');
        $('.grid-view-btn').removeClass('btn-primary').addClass('btn-secondary');
    });

    $('.expected-value-label').click(function(){
        $(this).addClass('active');
        $('.expected-quality-label').removeClass('active');
        $(this).parent().parent().parent().addClass('expected-value');
    });

    $('.expected-quality-label').click(function(){
        $(this).addClass('active');
        $('.expected-value-label').removeClass('active');
        $(this).parent().parent().parent().removeClass('expected-value');
        $('.expected-value-field').val('');
    });

    $('.chekbox-bg').click(function(){
        $(this).toggleClass('active');
    });

    $('.selected-event-name').click(function(){
        $('.event-names').slideToggle();
    }); 
    
    $('.push-arrow').click(function(){
        $('.calendar-container').slideToggle();
        $('.calendar-collapse').toggleClass('turn');
    }); 

    $('.additem').click(function(){
        $('.inner-add-template').slideToggle();
    }); 

    $('.radio-container input').click(function(){
        $('.radio-container input').parent().removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('.checkbox-container input').click(function(){
        $(this).parent().toggleClass('checked');
    });

    $('.incident-symptoms').click(function(){
        $(this).toggleClass('selected');
    });

    $('.toast').toast();

    $('.updatebtn').click(function(){
        window.scrollTo(0, 0);
        $('.toast').toast('show');
    });

    $('#datetimepicker1').datetimepicker({
        debug: true
    });

    $('#datetimepicker2').datetimepicker({
        format: 'L'
    });
});