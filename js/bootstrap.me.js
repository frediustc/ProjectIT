jQuery(document).ready(function(){
    //initialisation
    function initGen()
    {
        legend();
        textBlock();
        squared();
        centerEl();
        respFill();
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
    //Squared
    function squared(){
        if($('[class*="box-squared"]').length > 0)
        {
            var sqr_block = $('[class*="box-squared-"]');
            for(var i = 0; i < sqr_block.length; i++)
            {
                var sqr_block_h = $(sqr_block[i]).height();
                var sqr_block_w = $(sqr_block[i]).width();
                if($(sqr_block[i]).hasClass('box-squared-h-w'))
                {
                    $(sqr_block[i]).css({width: sqr_block_h + 'px'});
                }
                else if($(sqr_block[i]).hasClass('box-squared-w-h'))
                {
                    $(sqr_block[i]).css({height: sqr_block_w + 'px'});
                    console.log('done: ' + sqr_block_w);
                }
            }
        }
    }
    //fill parent
    function respFill(){
        if($('[class*="fill-parent-resp"]').length > 0)
        {
            $('[class*="fill-parent-resp"]').ready(function(){
                var img_res = $('[class*="fill-parent-resp"]');
                for(var i = 0; i < img_res.length; i++)
                {
                    var img_res_p_h = $(img_res[i]).parent().height();
                    var img_res_p_w = $(img_res[i]).parent().width();
                    var img_res_h = $(img_res[i]).height();
                    var img_res_w = $(img_res[i]).width();
                    console.log(img_res_h + ' ' + img_res_w);
                    if(img_res_h > img_res_w)
                    {
                        $(img_res[i]).addClass('center-el-H');
                        $(img_res[i]).addClass('fill-parent-resp-w');
                    }
                    else if(img_res_h < img_res_w)
                    {
                        $(img_res[i]).addClass('center-el-W');
                        $(img_res[i]).addClass('fill-parent-resp-h');
                    }
                    else
                    {
                        $(img_res[i]).addClass('fill-parent-resp-both');
                    }
                }
            });
        }
    }
    //center
    function centerEl(el){
        if($('[class*="center-el"]').length > 0)
        {
            var cen_el = $('[class*="center-el"]');
            for(var i = 0; i < cen_el.length; i++)
            {
                var cen_el_p_h = $(cen_el[i]).parent().height();
                var cen_el_p_w = $(cen_el[i]).parent().width();
                var cen_el_h = $(cen_el[i]).height();
                var cen_el_w = $(cen_el[i]).width();
                console.log();
                if($(cen_el[i]).hasClass('center-el-H'))
                {
                    $(cen_el[i]).css({left: ((cen_el_p_w - cen_el_w) / 2) + 'px'});
                }
                else if($(cen_el[i]).hasClass('center-el-V'))
                {
                    $(cen_el[i]).css({top: ((cen_el_p_h - cen_el_h) / 2) + 'px'});
                }
                else {
                    $(cen_el[i]).css({
                        top: ((cen_el_p_h - cen_el_h) / 2) + 'px',
                        left: ((cen_el_p_w - cen_el_w) / 2) + 'px'
                    });
                }
            }
        }
    }

    $(document).ready(function(){
        initGen();
    });

    $(window).resize(initGen);


});
