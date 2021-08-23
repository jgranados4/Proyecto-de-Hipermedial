<?php
require_once("../modelo/Especialidad.php");
$objEspecialidad=new Especialidad;
switch($_POST['opcion'])
{
	case 'consultar':
		$datos=$objEspecialidad->ObtenerTodos();
		$tabla="";
		
		foreach($datos as $fila)
		{
			$tabla.="<tr>";
			$tabla.="<th scope='row'>".$fila['id_producto']."</th>";
			$tabla.="<td>".$fila['nombre_producto']."</td>";
			$tabla.="<td>".$fila['descripcion']."</td>";
			$tabla.="<td>".$fila['Categoria']."</td>";
			$tabla.="<td>".$fila['valor_producto']."</td>";
			$tabla.="<td>".$fila['stock_producto']."</td>";
			$tabla.="<td><button type='button' class='btn btn-success' onclick='editar(".$fila['id_producto'].")'>Actualizar</button></td>";
			$tabla.="<tr>";
		}
		echo $tabla;
		break;
	case 'ingresar':
		$datos['nombre_producto']=$_POST['nombre_producto'];
		$datos['descripcion']=$_POST['descripcion'];
		$datos['Categoria']=$_POST['Categoria'];
		$datos['valor_producto']=$_POST['valor_producto'];
		$datos['stock_producto']=$_POST['stock_producto'];
			if($objEspecialidad->nuevo($datos))
			{
				echo "Registro ingresado";
			}
			else
			{
				echo "Error al registrar".$objEspecialidad->geterror();
			}
		break;
	case 'actualizar':
		$filtro['id_producto']=$_POST['codigo'];
		$datos['nombre_producto']=$_POST['nombre_producto'];
		$datos['descripcion']=$_POST['descripcion'];
		$datos['Categoria']=$_POST['Categoria'];
		$datos['valor_producto']=$_POST['valor_producto'];
		$datos['stock_producto']=$_POST['stock_producto'];
		echo $datos=$objEspecialidad->Guardar($datos,$filtro);
		break;
	case 'consultaxcodigo':
		$filtro['id_producto']=$_POST['codigo'];
		echo json_encode($datos=$objEspecialidad->ObtenerFiltro($filtro));
		break;
}
?>