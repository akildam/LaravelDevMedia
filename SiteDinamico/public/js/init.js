$(document).ready(function () {
    $('.button-collapse').sideNav();
    $('.slider').slider();
    $('select').material_select();
    $('.modal').modal();
    $('.dropdown-button').dropdown();
});

function sliderPrev(){
    $('.slider').slider('pause');
    $('.slider').slider('prev');
}

function sliderNext(){
    $('.slider').slider('pause');
    $('.slider').slider('next');
}