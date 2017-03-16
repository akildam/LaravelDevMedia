$(document).ready(function () {
    $(".button-collapse").sideNav();
    $(".slider").slider();
});

function sliderPrev(){
    $('.slider').slider('pause');
    $('.slider').slider('prev');
}

function sliderNext(){
    $('.slider').slider('pause');
    $('.slider').slider('next');
}