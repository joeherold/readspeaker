$(document).ready(function() {
        $('.colorbox_grp_0').colorbox({rel: 'colorbox_grp_0'});
        $('.colorbox_grp_1').colorbox({rel: 'colorbox_grp_1'});
        $('.colorbox_grp_2').colorbox({rel: 'colorbox_grp_2'});
        $('.colorbox_grp_3').colorbox({rel: 'colorbox_grp_3'});
        $('.colorbox_grp_4').colorbox({rel: 'colorbox_grp_4'});
        $('.colorbox_grp_5').colorbox({rel: 'colorbox_grp_5'});
        $('.colorbox_grp_6').colorbox({rel: 'colorbox_grp_6'});
        $('.colorbox_grp_7').colorbox({rel: 'colorbox_grp_7'});
        $('.colorbox_grp_8').colorbox({rel: 'colorbox_grp_8'});
        $('.colorbox_grp_9').colorbox({rel: 'colorbox_grp_9'});
        $('.colorbox_grp_10').colorbox({rel: 'colorbox_grp_10'});
        
        
        var toggles = $('.toggler');
        
        toggles.bind('click', function() {
            toggles.not($(this)).removeClass('open');
            $(this).toggleClass('open');
            toggles.each(function(index, cte){
                if (cte.hasClass('open')) {
                    $(this).next().stop(true,true).slideDown(300);
                    $(this).next().addClass('open');
                } else {
                    $(this).next().stop(true,true).slideUp(300);
                    $(this).next().removeClass('open');
                }
            });
            //$(this).next().slideToggle(500);
        });
        toggles.next().slideUp(0);
        

    });
