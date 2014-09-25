$(function(){
	$("#frmUpdProducto").validate({
	    errorElement: 'span',
	    errorClass: 'help-block',
	    submitHandler: function(form) {
	        $.ajax({
	            type: "POST",
	            url: "producto/editarProducto",
	            data: $(form).serialize(),
	            success: function(data) {
	                switch (data) {
	                    case "1":
	                        alert("Datos ingresados correctamente");
	                        listarProducto();
	                        break;
	                    case "2":
	                        alert("La linea ya cuenta con dicho producto");
	                        break;
	                }
	            },
	            error: function(data) {
	                alert("Error al ingresar los datos");
	            }
	        });
	    },
	    rules: {
	        txtUpdProducto: {
	            required: true
	        },
	        cbo_linea: {
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