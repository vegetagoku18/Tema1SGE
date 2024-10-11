<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Rellena el siguiente formulario para calcular el coste total del envio:</h4>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="precio">Precio: </label>
        <input type="text" name="precio" id="precio">
        <br><br>
        <label for="cantidad">Cantidad: </label>
        <input type="number" name="cantidad" id="cantidad">
        <br><br>
        <label for="descuento">Descuento: </label>
        <input type="number" name="descuento" id="descuento">
        <br><br>
        <label for="iva">IVA </label>
        <input type="number" name="iva" id="iva" max_length="3">%
        <br><br>
        <label for="metodo">Método de envío: </label>

        <br><br>
    </form>
</body>
</html>