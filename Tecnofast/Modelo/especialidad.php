<?php
require_once("conexion.php");
Class Especialidad
{
	public function ObtenerTodos()
	{	$conexion=new Conexion;
		$especialidad=$conexion->consultar('tb_producto');
		return $especialidad;
	}
	public function nuevo($datos)
	{	$conexion=new Conexion;
		$especialidad=$conexion->insertar('tb_producto',$datos);
		return $especialidad;
	}
	public function Guardar($datos,$filtro)
	{	$conexion=new Conexion;
		$especialidad=$conexion->actualizar('tb_producto',$datos,$filtro);
		return $especialidad;
	}
	
	public function ObtenerFiltro($filtro)
	{
		$conexion=new Conexion;
		$especialidad=$conexion->consultarFiltro('tb_producto',$filtro);
		return $especialidad;
	}
}
?>