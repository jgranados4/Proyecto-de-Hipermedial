<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="png" href="img/icono.png">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Productos | TecnoFast</title>
	<script type='text/javascript' src="../js/jquery-1.7.1.min.js" > </script>
	<script type='text/javascript'>
	function cargarcontrolador()
	{
		$.post("../../Controlador/EspecialidadController.php",
				{'opcion':'consultar'},respuesta);
	}
	function respuesta(arg)
	{
		$("#datos tbody").append(arg);
	}
	function editar(codigo)
	{
		document.location.href = "actualizar.php?id=" + codigo;
	}
	window.onload=cargarcontrolador;
	</script>
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand"><img src="img/logo2.png" class="img-fluid" width="200px" height="200px" alt=""></a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </div>
            </div>
    </nav>
    <br>
    <div class=container>
    <a href="insertar.php" class="btn btn-primary">Ingresar producto</a>
    <a href="index.php" class="btn btn-danger">Salir</a>
    </div>
    <br>
    <div class="container mt-6">
          <div class="row ">
              
              <div class="col-md-20 text-center">
              
                <table class="table" id="datos">
                  <thead class="table-info table-striped">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Nombre</th>
					  <th scope="col">Descripcion</th>
                      <th scope="col">Categoria</th>
					  <th scope="col">Precio</th>
	                  <th scope="col">Cantidad</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
    </div>
  </body>
</html>
