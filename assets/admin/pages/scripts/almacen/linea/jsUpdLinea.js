$(function(){

	/*Metodos Update*/
	$("#frmUpdLinea").validate({
	    errorElement: 'span',
	    errorClass: 'help-block',
	    submitHandler: function(form) {
	        $.ajax({
	            type: "POST",
	            url: "linea/editarLinea",
	            data: $(form).serialize(),
	            success: function(data) {
	                if (data == '1') {
	                    alert("Datos ingresados correctamente");
	                    listarLinea();
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
	        txtUpdLinea: {
	            required: true
	        },
	        txtUpdAlias: {
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