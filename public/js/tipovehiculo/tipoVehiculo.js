/**
 * Created on 14/08/2016.
 */
var tipoVehiculo = {
    index: function(delete_link, token, success, errors){
        $("#tblTipoVehic").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblTipoVehic', 'tipovehiculos', delete_link, 'admin.tipovehiculo.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmTipoVehic');
    },
}