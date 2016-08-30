/**
 * Created on 14/08/2016.
 */
var genero = {
    index: function(delete_link, token, success, errors){
        $("#tblGenero").dataTableManaged();

        $("#btneliminar").click(function(){
            eliminar('tblGenero', 'generos', delete_link, 'admin.genero.index', token);
        });

        notificacion(success, errors);
    },

    new: function(){
        validateConJquery('frmGenero');
    },
}