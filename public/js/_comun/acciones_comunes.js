/**
 * Created on 13/08/2016.
 */
function eliminar(nameTabla,tabla,path,destino, token){
    arregloDatos = new Array();
    recorrerTabla(nameTabla,arregloDatos);

    if(arregloDatos.length < 1){
        bootbox.alert(dataTableManaged.al_menos_uno);
        return;
    }

    bootbox.confirm(mensajes.mensaje_eliminar, function($result){
        if($result){
            //mostrarSpinner();

            var form = $('<form/>',{
                name: 'form_table',
                action: path,
                method: 'POST'
            });
            form.append($('<input/>',{type: "hidden", name :"_token", value: token}));

            // adicionando el nombre de la clase de la Tabla
            form.append($('<input/>', {name: 'tabla', type: 'hidden', value: tabla}));

            // adicionando la url a donde se va a redireccionar una vez que se elimine
            form.append($('<input/>', {name: 'forward', type: 'hidden', value: destino}));

            // adicionando los elementos seleccionados
            for (var key in arregloDatos) {
                hidden = $('<input/>', {
                    name: 'arregloDatos[]',
                    type: 'hidden',
                    value: arregloDatos[key]
                });
                hidden.appendTo(form);
            }
                form.appendTo($('body'));
            form.submit();
        }
    });

    return true;
}


//FUNCION PARA RECORRER LA TABLA MANEGABLE Y OBTENER LOS ID DE LOS SELECT MARCADOS
function recorrerTabla (nameTabla,arregloDatos)
{
    var checkboxes = $("#"+nameTabla+" tbody td:first-child :checkbox");

    for (var j=0; j < checkboxes.length; j++) {
        var checkbox = checkboxes[j];
        if(checkbox.checked==true)
        {
            arregloDatos.push(checkbox.value);
        }
    }
}

//validar form con Jquery.validata y muestre spiner
function validateConJquery(nameForm)
{
    var form = $('#'+nameForm);
    form.validate();

    form.submit(function(){
        if(form.valid()){
            bootbox.confirm(mensajes.mensaje_confirmacion, function(result){
                if(result){
                    //mostrarSpinner();
                    form.unbind('submit');
                    form.submit();
                }
            });
        }

        return false;
    });
}

function notificacion(success, errors)
{
    if (success != '')
        toastr.success(success);
    if (errors != '')
        toastr.error(errors);

}