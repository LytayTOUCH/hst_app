$(document).ready(function(){
    $("p").click(function(){
        $('.ui.modal').modal({
          duration: 200
        }).modal('show');
    });
    $('.ui.dropdown').dropdown();
});
