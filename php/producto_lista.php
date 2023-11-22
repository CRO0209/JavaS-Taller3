<?php

$inicio = 0;
$tabla = "";
$totalCantidad = 0;

$conexion = conexion();

$consulta_datos = "SELECT * FROM car  ";
$consulta_total = "SELECT COUNT(id) FROM car WHERE id";

$datos = $conexion->query($consulta_datos);
$datos = $datos->fetchAll();

$total = $conexion->query($consulta_total);
$total = (int) $total->fetchColumn();



$tabla .= '
	<div class="table-responsive">
        <table class="table table-secondary table-striped-columns  table-hover ">
            <thead>
                <tr class="text-center">
                	<th class="">#</th>
                    <th class="">Descripcion</th>
                    <th class="">Marca</th>
                    <th class="">Modelo</th>
                    <th class="">Tipo</th>
                    <th class="">Año</th>
                    <th class="" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
	';

if ($total >= 1) {
    $contador = $inicio + 1;
    foreach ($datos as $rows) {

        $id = $rows['id'];

        $tabla .= '
				<tr class="text-center" >
					<td class="">' . $id . '</td>

                    <td class="">' . $rows['descripcion'] . '</td>

                    <td class="">' . $rows['marca'] . '</td>

                    <td class="">' . $rows['modelo'] . '</td>
                   
                    <td class="">' . $rows['tipo'] . '</td>

                    <td class="">' . $rows['año'] . '</td>

                    <td class="" colspan="2">
                        <a href="producto-act.php?id_act=' . $rows['id'] . '" class="btn btn-primary btn-sm" >Actualizar</a>
                        <a href="' . $url . '?id_del=' . $rows['id'] . '" class="btn btn-danger btn-sm px-3">Eliminar</a>
                    </td>
                </tr>
                ';
        $contador++;
        $id = '';
    }
} else {
    $tabla .= '
            <tr class="text-center" >
                <td colspan="10">
                    No hay registros en el sistema
                </td>
            </tr>
        ';
}


$conexion = null;
echo $tabla;
