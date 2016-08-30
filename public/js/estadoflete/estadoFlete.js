/**
 * Created on 14/08/2016.
 */
var estadoFlete = {
    index: function(delete_link, token, success, errors){
        $("#tblEstadoF").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblEstadoF', 'estado_fletes', delete_link, 'admin.estadoflete.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmEstadoF');
    },
}