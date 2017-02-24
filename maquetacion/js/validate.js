(function($) {
    function errorFormularioEmpleo() {
        $('<div class="message"></div>').hide().appendTo('#form-empleo');
        $('#contactForm-empleo').validate({
            rules: {
                name: "required",
                surname: "required",
                email: {
                    required: true,
                    email: true
                },
                country : "required",
                organization : "required",
                city : "required",
                message: {
                    required:true,
                    minlength:8
                },
            },
            messages: {
                name: {
                    required: "Usa solo letras"
                },
                surname: {
                    required: "Usa solo letras"
                },
                email: {
                    required: "Ingresa un Email válido",
                    email: "Ingresa un Email válido"
                },
                country: {
                    required: "Elige un país válido"
                },
                organization: {
                    required: "Ingresa una organización válida"
                },
                city: {
                    required: "Elige una ciudad válida"
                },
                message: {
                    required: "Ingresar un mensaje/consulta"
                }
            },
            errorElement: 'p',
            errorClass: 'msg-error',
            validClass: 'validate',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('#form-empleo .loading').css({opacity: 0}).animate({opacity: 1});
                $.post($('#contactForm-empleo').attr('action'), $('#contactForm-empleo').serialize(), function (data) {
                    var obj = $.parseJSON(data);
                    $('#form-empleo .loading').fadeOut();
                    if (obj.exito === 'exito') {
                        $('#form-empleo .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                        $('#contactForm-empleo').find('.validate').removeClass('validate');
                        $('#contactForm-empleo')[0].reset();
                    } else {
                        $('#contactForm-empleo .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                    }
                });
                return false;
            }
        });
    }
    function errorFormularioSingleEmpleo() {
        $('<div class="message"></div>').hide().appendTo('#form');
        $('#contactForm').validate({
            rules: {
                name: "required",
                surname: "required",
                email: {
                    required: true,
                    email: true
                },
                cv : "required",
                phone : "required",
                subject : "required",
                message: {
                    required:true,
                    minlength:8
                },
            },
            messages: {
                name: {
                    required: "Usa solo letras"
                },
                surname: {
                    required: "Usa solo letras"
                },
                email: {
                    required: "Ingresa un Email válido",
                    email: "Ingresa un Email válido"
                },
                cv: {
                    required: "Ingresar un archivo"
                },
                phone: {
                    required: "Ingresar un telefono valido"
                },
                subject: {
                    required: "Ingresar un texto valido"
                },
                message: {
                    required: "Ingresar un mensaje/consulta"
                }
            },
            errorElement: 'p',
            errorClass: 'msg-error',
            validClass: 'validate',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('#contactForm'),
                    formURL = form.attr("action"),
                    loader = $('.bubbles');
                $.ajax( {
                    url: formURL,
                    type: 'POST',
                    data: new FormData($('#contactForm')[0]),
                    processData: false,
                    contentType: false,
                    beforeSend: function(XHR){
                        form.find('.bubbles').fadeIn(300);
                    },
                    success : function(result) {
                        $('#contactForm')[0].reset();
                        form.find('.bubbles').fadeOut(300);
                        form.find('.send').hide();
                        form.parent().find('.message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                        form.find('.validate').removeClass('validate');
                    }
                } );
                return false;
            }
        });
    }
    function errorFormularioContacto() {
        $('<div class="message"></div>').hide().appendTo('#formcontact');
        $('#contactForm-contact').validate({
            rules: {
                name: "required",
                surname: "required",
                email: {
                    required: true,
                    email: true
                },
                phone : "required",
                subject : "required",
                message: {
                    required:true,
                    minlength:8
                },
            },
            messages: {
                name: {
                    required: "Usa solo letras"
                },
                surname: {
                    required: "Usa solo letras"
                },
                email: {
                    required: "Ingresa un Email válido",
                    email: "Ingresa un Email válido"
                },
                phone: {
                    required: "Ingresar un telefono valido"
                },
                subject: {
                    required: "Ingresar un texto valido"
                },
                message: {
                    required: "Ingresar un mensaje/consulta"
                }
            },
            errorElement: 'p',
            errorClass: 'msg-error',
            validClass: 'validate',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('#formcontact .loading').css({opacity: 0}).animate({opacity: 1});
                $.post($('#contactForm-contact').attr('action'), $('#contactForm-contact').serialize(), function (data) {
                    var obj = $.parseJSON(data);
                    $('#formcontact .loading').fadeOut();
                    if (obj.exito === 'exito') {
                        $('#formcontact .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                        $('#contactForm-contact').find('.validate').removeClass('validate');
                        $('#contactForm-contact')[0].reset();
                    } else {
                        $('#contactForm-contact .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                    }
                });
                return false;
            }
        });
    }
    errorFormularioEmpleo();
    errorFormularioSingleEmpleo();
    errorFormularioContacto();
})(jQuery);