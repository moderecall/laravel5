;(function($) {
    $.fn.dataTableManaged = function($options) {

        // support mutltiple elements
        if (this.length > 1){
            this.each(function(){
                $(this).dataTableManaged($options)
            });

            return this;
        }

        var defaultOptions = {
            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": false,
                "targets": [0]
            }],
            "order": [
                [1, "asc"]
            ],
            "lengthMenu": [
                [10, 20, 30, -1],
                [10, 20, 30, dataTable.language.es.All]
            ],
            // set the initial value
            "pageLength": 10,
            "pagingType": "bootstrap_full_number",
            "language": dataTable.language.es
        };

        $.extend(defaultOptions, $options);

        var table = $(this);
        var elementsSelected = [];

        // inicializando el dataTables.
        table.dataTable(defaultOptions);

        table.find('.group-checkable').change(function () {
            var set = table.selector + ' .checkboxes';
            var checked = $(this).is(":checked");
            $(set).each(function () {
                var checkbox = $(this);
                if (checked) {
                    checkbox.attr("checked", true);
                    checkbox.parents('tr').addClass("active");
                    //añadiendo todos los elementos seleccionados al arreglo
                    elementsSelected.push(checkbox.val());
                } else {
                    checkbox.attr("checked", false);
                    checkbox.parents('tr').removeClass("active");
                }
            });
            // si el check general se desmarca limpio el listado de elementos
            if(!checked){
                elementsSelected = [];
            }
            $.uniform.update(set);
        });

        table.on('change', 'tbody tr .checkboxes', function () {
            $(this).parents('tr').toggleClass("active");
            var checked = $(this).is(":checked");
            var value = $(this).val();
            //si al cambiar está marcado lo agrego al listado de elementos marcados
            if(checked){
                elementsSelected.push(value);
            }
            else{
                // sino se elimina del listado
                var index = elementsSelected.indexOf(value);// se obtiene el indice del elemento
                elementsSelected.splice(index, 1);// se pica el arreglo en el indice y solo una(1) posicion
            }
        });

        // Guardando los checks que estaban marcados en elementsSelected
        // y dandole estilo a las filas seleccionadas
        table.find('[type=checkbox]').each(function(){
            var checkbox = $(this);
            if(checkbox.is(":checked")){
                checkbox.parents('tr').toggleClass("active");
                elementsSelected.push(checkbox.val());
            }
        });

        this.getElementsSelected = function(){
            return elementsSelected;
        }

        /**
         *
         * @param $url
         * @param $params: parametros para configurar el target del formualrio y para enviar
         * datos extras al controlador
         */
        this.sendData = function($url, $params){
            var form = $('<form/>',{
                name: 'form_table',
                action: $url,
                method: 'POST',
                target: ($params != null && $params != undefined) ? $params.target || "_self" : "_self"
            });


            if(elementsSelected.length > 0){
                for (var key in elementsSelected) {
                    var name = 'data[' + key + ']';
                    var hidden = $('<input/>', {
                        name: name,
                        type: 'hidden',
                        value: elementsSelected[key]
                    });
                    hidden.appendTo(form);
                }

                for (var key in $params) {
                    var name = 'extra[' + key + ']';
                    var hidden = $('<input/>', {
                        name: name,
                        type: 'hidden',
                        value: $params[key]
                    });
                    hidden.appendTo(form);
                }

                form.appendTo($('body'));
                form.submit();
            }
        }

        return this;
    }
})(jQuery);
