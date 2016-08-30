/**
 * Created on 14/08/2016.
 */
var tipoUnidadMedida = {
    index: function(delete_link, token, success, errors){
        $("#tblTipoUM").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblTipoUM', 'tipo_unidad_medidas', delete_link, 'admin.tipounidadmedida.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmTipoUM');
    },
}