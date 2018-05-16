<html>
<head>
    <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <style>
        .li{
        }
    </style>
</head>

<body>
<ul>

    <li class="li"><a href="#" class="lista" id="0">Canción 1</a> </li>
<div id="respuesta-0" style="display:none"><iframe width="500" height="281" src="https://www.youtube.com/embed/OtWWkW7nEI8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>

     <li class="li"><a href="#" class="lista" id="1">Canción 2</a> </li>
<div id="respuesta-1" style="display:none"><iframe width="500" height="281" src="https://www.youtube.com/embed/OtWWkW7nEI8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>

     <li class="li"><a href="#" class="lista" id="2">Canción 3</a> </li>
<div id="respuesta-2" style="display:none"><iframe width="500" height="281" src="https://www.youtube.com/embed/F1Vgu237AbU?list=RDvz9QbgXDHVA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>

     <li class="li"><a href="#"class="lista" id="3">Canción 4</a> </li>
<div id="respuesta-3" style="display:none"><iframe width="500" height="281" src="https://www.youtube.com/embed/LBr7kECsjcQ?list=RDvz9QbgXDHVA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>

</ul>


</body>
<script>
var array=[0,1,2,3];
var bool=true;
    // jQuery
    $(document).ready(function(){

        $('.lista').on('click',function(){

            var num=$(this).attr("id");

            if (bool) {
                for (i = 0; i < array.length; i ++) {

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
                for (i = 0; i < array.length; i ++) {
                    $('#'+[i]).css('display','block');

                }
                $('#respuesta-'+num).toggle();
                $('.li').css('list-style','circle');

                bool=!bool;

            }


        });
    });

</script>
</html>