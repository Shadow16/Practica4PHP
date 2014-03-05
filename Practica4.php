?>
<!DOCTYPE HTML5>
<html>
  <head>
    <title>Ejercicio PHP y HTML5</title>
  </head>
<body>
  <?php
    $estufa = 100;
    $comedor = 210;
    $refrigerador = 340;
    $television = 410;
    $estereo = 100;
    $iva = 0.16;
  ?>
<table>
  <tr>
    <td>Estufa</td>
    <td><?php echo $estufa; ?></td>
</tr>
<tr>
    <td>Comedor</td>
    <td><?php echo $comedor; ?></td>
</tr>
<tr>
    <td>Refrigerador</td>
    <td><?php echo $refrigerador; ?></td>
</tr>
<tr>
    <td>Television</td>
    <td><?php echo $television; ?></td>
</tr>
<tr>
    <td>Estereo</td>
    <td><?php echo $estereo; ?></td>
</tr>
</table>
  <hr />
<table>
<tr>
    <td>SUBTOTAL</td>
    <td><?php echo $total= $estufa + $comedor + $refrigerador + $television + $estereo?></td>
</tr>
<tr>
    <td>IVA</td>
    <td><?php echo $imp = $iva * $total?></td>
</tr>
<tr>
    <td>TOTAL</td>
    <td><?php echo $resultado = $total + $imp ?></td>
</tr>
</table>
</body>
</html>
<?php
