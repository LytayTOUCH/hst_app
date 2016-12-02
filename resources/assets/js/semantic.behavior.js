$(document).ready(function(){
    $('.ui.dropdown').dropdown();
    $('.location_modal').click(function(e){
    	e.preventDefault();
    	$('.ui.modal.location').modal({
    		duration: 100
    	}).modal('show');
    });
});