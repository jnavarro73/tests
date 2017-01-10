/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("#div_tabla_equipo").hide();
    $(".alert-warning").html('');
    $(".alert-warning").hide();

    //change selection.
    $("#selectionPC").html('');

    $("#go_button").click(function () {
        $(".alert-warning").hide();
        var aValue = $('#select_figure option:selected').attr('id');
        // console.log('valor:' + aValue);
        if (aValue == "-1") {
                 $('.alert-warning').html('Please select a figure');
                 $(".alert-warning").show();
                 return false;
             }
        else{
                $.post("game/whoistheWinner/figure/"+aValue,
                        {
                        },
                        function (data) {
                           
                        }).done(function (data) {
                            data = $.parseJSON(data);
                            data = data['datos'];
                            var state= data['state'];
                            var message= data['message'];
                            var pcFigureName = data['pcFigureName'];
                         //   alert(state+message);
                            $("#selectionPC").html('<span>'+pcFigureName+'</span>');
                            //$("#div_pcfigure").append("<img src='/basic/img/"+figure_imgpc+".jpg'");
                            
                            $('.alert-warning').html('');
                            $('.alert-info').html('');
                            $('.alert-success').html('');
                            $('.alert-warning').hide();
                            $('.alert-info').hide();
                            $('.alert-success').hide();
                            
                            switch(state){
                                case 0:
                                    $('.alert-info').html(message);
                                    $(".alert-info").show();
                                break;
                                case 1:
                                    $('.alert-success').html(message);
                                    $(".alert-success").show();
                                    break;
                                case 2:
                                    $('.alert-warning').html(message);
                                    $(".alert-warning").show();
                                    break;
                            }
                            
                            
                   
                }).fail(function () {
                    //show message alert box fail xhr call
                     $('.alert-warning').html('Error . Contact administrator');
                    
                });
        
        }
        
});
      
});


