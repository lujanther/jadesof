

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
.informe{
	font-size: x-small;
	
}
.titulo{
	background-color:#0111bc;
	color: white;
	text-align: center;
}
.centrar{
	text-align: center;
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
	</style>
</head>
<body>
<div class="sup">
	<img src="<?php echo base_url();?>assets/img/banhd.png" alt="">
	</div>
	<div>
	<table >
		<tr>
			<td align="left"><b>DATOS DE EMPRESA</b></td>
			<td align="right"><b> <?php echo $venta->tipocomprobante; ?></b></td>
		</tr>
		
		<tr>
			<td align="left"><b>Señores:</b> <?php echo $venta->nombre; ?> </td>	
			<td align="right"><b>Nro:</b> <?php echo $venta->numero_documento; ?></td>
		</tr>

		<tr>
			<td align="left"><b>NIT/CI:</b> <?php echo $venta->documento; ?></td>	
			<td align="right"><b>Fecha</b> <?php echo $venta->fecha; ?></td>
		</tr>

		<tr>
			<td align="left"><b>Ciudad:</b> <?php echo $venta->ciudad; ?></td>	
			<td align="right"><b>Nota:</b> <?php echo $venta->notas; ?></td>
		</tr>
		<tr>
			<td ><b>Agencia:</b> <?php echo $venta->agencia; ?> </td>		
		</tr>
		<tr>
		<td ><b>Area/Encargado</b> <?php echo $venta->area; ?> </td>
		</tr>

	</table>

</div>
	

<br>


		<table class="informe"  border="1">
		
			<thead>
				<tr class="titulo">
					<th>CANTIDAD</th>
					<th colspan="2">DESCRIPCIÓN</th>
					<th>PRECIO UNITARIO</th>
					
					<th>SUB TOTAL</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($detalles as $detalle ):?>
				<tr>
					<td class="centrar"><?php echo $detalle->cantidad; ?></td>
					<td colspan="2"><?php echo $detalle->nombre; ?></td>
					<td class="centrar"><?php echo $detalle->precio; ?></td>
					
					<td class="centrar"><?php echo $detalle->importe; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>

				<tr>
					<td colspan="4" align="right"><strong>Total Bs. : </strong></td>
					<td class="titulo" align="center" ><?php echo $venta->total; ?></td>
				</tr>
			</tfoot>
		</table>

<div class="footer">
<p>&copy; 2020 Jadetech Servicios Integrales<p>
</div>


</body>
</html>

