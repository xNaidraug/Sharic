var array=[0,1,2,3];
var bool=true;
// jQuery
$(document).ready(function(){

    $('.lista').on('click',function(){

        var num=$(this).attr("id");

        if (bool) {
            for (var i = 0; i < array.length; i ++) {

                if (array[i] == num ) {
                    $('#respuesta-'+num).toggle();

                }
                if (array[i] != num) {
                    $('#'+[i]).css('display','none');
                    $('.li').css('list-style','none');

                }

            }
            bool=!bool;
        }
        else {
            for (var i = 0; i < array.length; i ++) {
                $('#'+[i]).css('display','block');

            }
            $('#respuesta-'+num).toggle();
            $('.li').css('list-style','circle');

            bool=!bool;

        }


    });
});
