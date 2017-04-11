jQuery(document).ready(function() {
    var correct = [];
    $('input').on('keyup', function(){
        if($.trim($(this).val()) === '') {
            $(this).parent().next().removeClass('hide');
            //correct = ($(this).attr('type') === 'password') ? true : false;
            correct.pop($(this).attr('name'));
            console.log('pop : ' + correct);
        }
        else {
            var exits = false;
            // console.log(correct.length);
            (correct.length === 0) ? (correct.push($(this).attr('name'))) (console.log('push : ' + correct)) : null;
            for(var i = 0; i < correct.length; i++)
            {
                 if(correct[i] === $(this).attr('name')){ exists = true; }
                if(!exists)
                {
                    correct.push($(this).attr('name'));
                    console.log('push : ' + correct);
                }
            }

            if(!$(this).parent().next().hasClass('hide'))
            {
                $(this).parent().next().addClass('hide');
            }
        }
    });
    $('.adminForm').on('submit', function(e){
        // if(correct.length === 4)
        // {
        //     e.preventDefault();
        //     return false;
        // }
    });
});
