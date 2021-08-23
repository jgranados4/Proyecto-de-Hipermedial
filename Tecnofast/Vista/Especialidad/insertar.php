<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="png" href="img/icono.png">
    <title>Productos | TecnoFast</title>
	  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type='text/javascript' src="../js/jquery-1.7.1.min.js" > </script>
	<script type='text/javascript'>
	$(function(){
		$("#guardar").click(function(){ 
			$.post("../../Controlador/EspecialidadController.php",
				$("#datos").serialize(),respuesta);
			window.location.href = "consulta.php";
		});
	});
	
		
	
	function respuesta(arg)
	{
		alert(arg);
	}
	</script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" ><img src="img/logo2.png" class="img-fluid" width="200px" height="200px" alt=""></a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </div>
            </div>
    </nav>
    <div class="container mt-5">
          <div class="row">
              <div class="col-md-5">
                <br>
                <h2>Ingreso de producto</h2>
                <br>
                <form id="datos">
                    <input type="text" class="form-control" name="opcion" value="ingresar" hidden />
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre">
                        </div>
                    </div>
                    
                    
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-10">
                          <select class="form-control input-sm" id="Categoria" name="Categoria">
						    <option value="Categoria">Categoria</option>
                            <option value="Procesador">Procesador</option>
                            <option value="Motherboard">Motherboard</option>
                            <option value="Ram">Ram</option>
                            <option value="Almacenamiento">Almacenamiento</option>
                            <option value="Fuente de poder">Fuente de poder</option>
                            <option value="Case">Case</option>
							</select>
                        </div>
                    </div>
					
                    
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="valor_producto" name="valor_producto" placeholder="Precio">
                        </div>
                    </div>
					
					<div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="stock_producto" name="stock_producto" placeholder="stock">
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="guardar" >Ingresar</button>
					<a href="consulta.php" class="btn btn-danger">Cancelar</a>
                  </form>  
              </div>
    </div>
</body>
    </body>
</html>
