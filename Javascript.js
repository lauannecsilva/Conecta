/*$(document).ready(function() {
    $("#FormDisciplina").on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: 'Controllers/ControllerDisciplina.php',
            type: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultado').show().html(Dados);
                $('#nome').val('');
                $('#professor').val('');
                $('#email').val('');
            }
        });
    });
});﻿

$(document).ready(function() {
    $("#FormMaterial").on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: 'Controllers/ControllerMaterial.php',
            type: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultado').show().html(Dados);
                $('#titulo').val('');
                $('#link').val('');
            }
        });
    });
});﻿
*/
//confirmar antes de deletar

$('.Deletar').on('click',function(event){
    event.preventDefault();

    var Link=$(this).attr('href');

    if(confirm("Deseja mesmo apagar esse dado?")){
        window.location.href=Link;
    }else{
        return false;
    }

})

