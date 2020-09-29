
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>
	<style>
		
h4 {
  text-align: center;
}
.uno{
	font-size: x-small;
}
.footer {
	width: auto;
    height: 200px;
    margin-top:-200px;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    background: #333;
    border-top: 2px solid #000;
	text-align: center;
	color:#0111bc;
}
.titulo{
	background-color:#0111bc;
	color: white;
	border: 1px solid black;
}
.tabla{
	font-size: x-small;
	border: 1px solid black;
}
.centrar{
	text-align: center;

}
.total{
	text-align: right;
	border: 1px solid black;
}
.detalle{
	border: 1px solid black;
}
.det{
	font-size: x-small;
	border: 1px solid black;
}
.firma{
	text-align: center;
	font-size: x-small;
}

body, html {margin:0; padding:0}

</style>
</head>
<body>	
	<div class="sup">
	<img src="<?php echo base_url();?>assets/img/banhd.png" alt="">
	</div>

	
<table class="uno">
<tr>
	<td> Señores:<br> <?php echo $informes->nombre; ?> </td>
	<td style= "text-align:right ">Fecha: <?php echo $informes->fecha; ?></td>	
</tr>
</table>
<h4 style="color:#0111bc">Informe Técnico</h3>
<br>
<table class="det">
<tr class="titulo" >
		<th>Marca:</th>
		<th>Serie:</th>
		<th>Codigo Interno:</th>
	</tr>
<tr>
	<td><?php echo $informes->marca_modelo; ?></td>
	<td><?php echo $informes->serie; ?></td>
	<td><?php echo $informes->codigo; ?> </td>
</tr>
</table>
<br>
<br>
<table class="det">
	<tr class="titulo">
		<th>Valido de oferta:</th>
		<th>Tiempo de entrega:</th>
		<th>Forma de pago:</th>
	</tr>
<tr>
	<td><?php echo $informes->valido_oferta; ?></td>
	<td><?php echo $informes->tiempo_entrega; ?></td>
	<td><?php echo $informes->forma_pago; ?> </td>
</tr>
</table>
<br>
<br>
<table class="uno">
<tr>
	<td><b>FALLA REPORTADA:</b> <?php echo $informes->falla; ?> </td>
</tr>
<tr><td><b>DIAGNOSTICO:</b> <?php echo $informes->diagnostico; ?></td>	</tr>
</table>

<div class="row">
	<div class="col-xs-12" >
	
		<table class="tabla">
		
			<thead>
				<tr class="titulo">
					<th>CANTIDAD</th>
					<th>DESCRIPCION</th>
					<th></th>
					<th>PRECIO UNIARIO</th>
					
					<th>SUB TOTAL Bs.</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($detalles as $detalle ):?>
				<tr class="detalle" >
					<td class="centrar"><?php echo $detalle->cantidad; ?></td>
					<td colspan="2"><?php echo $detalle->nombre; ?></td>
					<td class="centrar"><?php echo $detalle->precio; ?></td>
					
					<td class="centrar"><?php echo $detalle->importe; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>

				<tr>
					<td class= "total" colspan="4"><strong>Total Bs.:</strong></td>
					<td class="centrar" style="background-color:#0111bc" ><?php echo $informes->total; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<div class="firma">
</div>
<div class="footer">
<p>&copy; 2020 Jadetech Servicios Integrales<p>
</div>
</body>
</html>