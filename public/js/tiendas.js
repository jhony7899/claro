$(document).ready(function(){
    $('ul.listado li a').click(function() {
    var textoFiltro = $(this).text().toLowerCase().replace(/\s/g,"-");
    if(textoFiltro == 'todas')
    {
        $('div.cuadroder div.hidden').fadeIn('slow').removeClass('hidden');
    }
    else
    {
        $('.cuadroder div').each(function()
        {
            if(!$(this).hasClass(filterVal))
            {
                $(this).fadeOut('normal').addClass('hidden');
            }
            else
            {
                $(this).fadeIn('slow').removeClass('hidden');
            }
        });
    }
    return false;
    });
});