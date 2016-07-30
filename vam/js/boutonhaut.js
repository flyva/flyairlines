$(document).ready(function(){

    var $fleche = $('#mafleche');

    $(window).scroll(function(){
        console.log($(this).scrollTop());
        if($(this).scrollTop() > 50){
            $fleche.show('fast');
        }else{
            $fleche.hide('fast');
        }
    });

});