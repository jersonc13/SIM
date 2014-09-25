$(function(){
	/*Metodos Update*/
	$("#frmUpdUsuarios").validate({
	    errorElement: 'span',
	    errorClass: 'help-block',
	    submitHandler: function(form) {
	        $.ajax({
	            type: "POST",
	            url: "usuarios/editarUsuario",
	            data: $(form).serialize(),
	            success: function(data) {
	                if (data == '1') {
	                    alert("Datos ingresados correctamente");
	                    listarUsuarios();
	                } else {
	                    alert("Error al ingresar los datos");
	                }
	            },
	            error: function(data) {
	                alert("Error al ingresar los datos");
	            }
	        });
	    },
	    rules: {
	        txtUpdUsuario: {
	            required: true
	        },
	        txtUpdContrasena: {
	            required: true
	        }
	    },
	    highlight: function(element) { // hightlight error inputs
	        $(element)
	                .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
	    },
	    unhighlight: function(element) { // revert the change done by hightlight
	        $(element)
	                .closest('.form-group').removeClass('has-error'); // set error class to the control group
	    }
	});
});