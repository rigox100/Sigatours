$(document).ready(function() {

    $('input[type="text"]').change(function(){
        this.value = $.trim(this.value);
    });

    $.validator.addMethod("formAlphanumeric", function(value, element) {
        var pattern1 = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
        return this.optional(element) || pattern1.test(value);
    }, "El campo debe tener un valor alfanumérico");

    $.validator.addMethod("email", function(value, element) {
        var pattern2 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;
        return this.optional(element) || pattern2.test(value);
    }, "Debe ingresar un email válido");

    $("#form").validate({
       
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
            nombre: {
                required: true,
                maxlength: 50,
                formAlphanumeric: true
                
            },

            apellido: {
                required: true,
                maxlength: 50,
                formAlphanumeric: true
            },
            
            email: {
                required: true,
                email: true
            },
            
            new_password: {
                required: true,
                minlength: 5
            },

            estatus: {
                required: true
                
            },
            idRol: {
                required: true
                
            },
        
        },

        messages: {

            nombre: {
                required: 'El nombre es requerido',
                formAlphanumeric: 'El nombre solo puede contener letras',
                maxlength: 'El nombre debe tener menos de 50 caracteres'     
            },

            apellido: {
                required: 'El apellido es requerido',
                formAlphanumeric: 'El apelldio solo puede contener letras',
                maxlength: 'El apellido debe tener menos de 50 caracteres'
                
            },

            email: {
                required: 'El email es requerido',
                email: 'Introduzca un email válido',     
            },
        
            new_password: {
                required: 'La contrseña es requerida',
                minlength: 'La contraseña debe tener al menos 5 caracteres'
            },

            estatus: {
                required: 'El estatus es requerido'
                
            },

            idRol: {
                required: 'El rol es requerido'
                
            }

        },

    });

});