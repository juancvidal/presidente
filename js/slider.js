$(function () {
    
    $('#duque').hover(function(ui){
        $(this).animate({left: '-=15'},300);
    }, function(){
        $(this).animate({left: '+=15'},300);
    });

    window.addEventListener("message", function(event){
        var click = event.data.click;
        if(click == 1){
            $('#linea-title').show();
            $( "#duque" ).draggable({         
                axis: "x",       
                drag: function(event, ui) {
                    
                    var maxscroll = screen.width * 0.46;                    
                    var minscroll = $(window).width() - $('#duque').width() + 30;
                    console.log(minscroll);                    
                    /*if(screen.width <= 768){
                        minscroll = (innerWidth.width * 2.86) * -1;
                    }else{
                        var minscroll = (screen.width * 2.76) * -1;
                    }*/
                    var leftPosition = ui.position.left;
                    if (leftPosition > maxscroll) {
                      ui.position.left = maxscroll;
                    }
                    if(leftPosition < minscroll){
                        ui.position.left = minscroll;
                    }
                }
            });
            $('#duque').draggable('enable');
        }
        if(click == 2){   
                     
            $('#duque').animate({left: '0'}, 1000,
            function () {
                $('#linea-title').hide();
            });
            $('#duque').draggable('disable');
        }
    });
});