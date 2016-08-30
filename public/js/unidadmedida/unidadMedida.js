/**
 * Created on 14/08/2016.
 */
var unidadMedida = {
    index: function(delete_link, token, success, errors){
        $("#tblUnidadesM").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblUnidadesM', 'unidad_medidas', delete_link, 'admin.unidadmedida.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmUnidadM');
    },
}