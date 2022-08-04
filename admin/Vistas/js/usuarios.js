


$(".table").on("click", ".EditarUsuario", function(){

	var Uid = $(this).attr("Uid");
	var datos = new FormData();

	datos.append("Uid", Uid);

	$.ajax({

		url: "Ajax/usuariosA.php",
		method: "POST",
		data: datos,
		contentType: false,
		dataType: "json",
		cache: false,
		processData: false,

		success: function(resultado){

			$("#idE").val(resultado["id"]);
			$("#usuarioE").val(resultado["usuario"]);
			$("#claveE").val(resultado["clave"]);
			$("#nombreE").val(resultado["nombre"]);
			$("#apellidoE").val(resultado["apellido"]);
			$("#rolE").val(resultado["rol"]);

		}


	})

})



$(".table").on("click", ".BorrarUsuario", function(){

	var Uid = $(this).attr("Uid");
	var Ufoto = $(this).attr("Ufoto");

	window.location = "index.php?url=Usuarios&Uid="+Uid+"&Ufoto="+Ufoto;

})