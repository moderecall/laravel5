/**
 * Created on 14/08/2016.
 */
var tipoCarga = {
    index: function(delete_link, token, success, errors){
        $("#tblTipoCarga").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblTipoCarga', 'tipo_cargas', delete_link, 'admin.tipocarga.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmTipoCarga');
    },
}