$(document).ready(function() {

    $('input[type="text"]').change(function(){
        this.value = $.trim(this.value);
    });

    $.validator.addMethod("formAlphanumeric", function(value, element) {
        var pattern1 = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
        return this.optional(element) || pattern1.test(value);
    }, "El campo debe tener un valor alfanumérico");


    $("#promo_form").validate({
       
        wrapper: 'span',
        errorPlacement: function(error, element) {
            error.css({
                'padding-left': '10px',
                'margin-right': '20px',
                'padding-bottom': '2px',
                'color': 'red',
                'font-size': 'small'
            });
            error.addClass("arrow")
            error.insertAfter(element);
        },


        rules: {
            titulo: {
                required: true,
                maxlength: 100,
                
                
            },

            url_img1:{
                extension: "png|jpeg|jpg"
            },

            file1: {
                extension: "pdf"
                
            },
            
            visible: {
                required: true    
            },

           
        
        },

        messages: {

            titulo: {
                required: 'El título es requerido',
                formAlphanumeric: 'El nombre solo puede contener letras',
                maxlength: 'El nombre debe tener menos de 100 caracteres'     
            },

            url_img1:{
                required: "La imagen del slide es requerido",
                extension: "Solo se aceptan imágenes en formato png|jpeg|jpg"
                   
            },

            file1: {
                extension: "Solo se aceptan archivos en formato pdf"     
            },

            visible: {
                required: 'El campo visible es requerido'    
            },

        },

    });

});