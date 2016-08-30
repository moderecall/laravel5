/**
 * Created on 13/08/2016.
 */
var marca = {
    index: function(delete_link, token, success, errors){
    //index: function(){
        $("#tblMarcas").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblMarcas', 'marcas', delete_link, 'admin.marca.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmMarca');
    },
}