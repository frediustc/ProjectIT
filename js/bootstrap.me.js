jQuery(document).ready(function(){
    //initialisation
    function initGen()
    {
        legend();
        textBlock();
    }
    //legend
    function legend()
    {
        if($('.legend').length > 0)
        {
            var lgd = $('.legend');
            for(var i = 0; i < lgd.length; i++)
                {
                    var lgd_size = $(lgd[i]).outerWidth();
                    var lgd_txt_size = $(lgd[i]).find('.legend-text').outerWidth();
                    var new_size = lgd_size - lgd_txt_size;
                    if($(lgd[i]).hasClass("legend-right"))
                        {
                            $(lgd[i]).find('.legend-text').before('<span class="legend-line-left"></span>');
                            $(lgd[i]).find('.legend-line-left').width(new_size);
                        }
                    else if($(lgd[i]).hasClass("legend-center"))
                        {
                            $(lgd[i]).find('.legend-text').before('<span class="legend-line-left"></span>').after('<span class="legend-line-right"></span>');
                            $(lgd[i]).find('.legend-line-left').width(new_size / 2);
                            $(lgd[i]).find('.legend-line-right').width(new_size / 2);
                        }
                    else
                        {
                            $(lgd[i]).find('.legend-text').after('<span class="legend-line-right"></span>');
                            $(lgd[i]).find('.legend-line-right').width(new_size);
                        }
                }
        }
    }
    //text block
    function textBlock()
    {
        if($('[class*="text-block-"]').length > 0)
        {
            var txt_block = $('[class*="text-block-"]');
            for(var i = 0; i < txt_block.length; i++)
                {
                    var txt_block_size = $(txt_block[i]).outerHeight();
                    var txt_block_parent_size = $(txt_block[i]).parent().outerHeight();
                    var new_pad = txt_block_parent_size - txt_block_size;
                    if($(txt_block[i]).hasClass('text-block-middle'))
                        {
                            $(txt_block[i]).css({marginTop: (new_pad / 2) + 'px'});
                        }
                    else if($(txt_block[i]).hasClass('text-block-bottom'))
                        {
                            $(txt_block[i]).css({marginTop: (new_pad) + 'px'});
                        }
                }
        }
    }
    
    initGen();
    $(window).resize(initGen);
    
     
});