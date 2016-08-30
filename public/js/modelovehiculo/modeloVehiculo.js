/**
 * Created on 14/08/2016.
 */
var modeloVehiculo = {
    index: function(delete_link, token, success, errors){
        $("#tblModVehic").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblModVehic', 'modelo_vehiculos', delete_link, 'admin.modelovehiculo.index', token);
        });

        notificacion(success, errors);
    },


    new: function(){
        validateConJquery('frmModVehic');
    },
}