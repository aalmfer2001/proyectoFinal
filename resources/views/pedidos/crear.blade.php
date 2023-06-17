<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DISJUALTO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/stylePedido.css'])
</head>
<body class="bg-crema">
    <div class="pedido-insertar-producto">
        <div class="form-group">
            <label for="producto">Producto:</label>
            <select name="producto" id="producto" class="form-control">
                <option value="">Seleccione un producto</option>
                <!-- Aquí puedes generar dinámicamente las opciones de productos -->
                <option value="1">Producto 1</option>
                <option value="2">Producto 2</option>
                <option value="3">Producto 3</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control">
        </div>
    
        <button class="btn btn-primary" onclick="agregarProducto()">Agregar Producto</button>
    </div>
</body>
</html>