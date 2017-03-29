jQuery(document).ready(function(){
    //no jump for simple anchor
    $('a[href="#"]').click(function(event){
        event.preventDefault();
    });
    
    //tooltips initialization
    $('[data-toggle="tooltip"]').tooltip();
});