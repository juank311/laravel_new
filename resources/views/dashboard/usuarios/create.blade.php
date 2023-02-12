<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Formulario para ingresar datos</title>
</head>
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href= {{  route('usuarios.index') }} >Vista Usuarios</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href= {{  route('usuarios.index') }}>Usuarios</a></li>
            <li><a href="#">Administradores</a></li>
            <li><a href="#">Articulos</a></li>
        </ul>
    </div>
</nav>
<br/><br/><br/>
<body style="background-color: lightgray;">
    <div class="container mt-5">
        <h2>Ingresar datos</h2>
        <form action="">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>