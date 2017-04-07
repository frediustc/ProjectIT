jQuery(document).ready(function() {
    $('input').on('keyup', function(){
        if($.trim($(this).val()) === '') {
            $(this).parent().next().removeClass('hide')
        }
        else {
            if(!$(this).parent().next().hasClass('hide'))
            {
                $(this).parent().next().addClass('hide');
            }
        }
    });
});
