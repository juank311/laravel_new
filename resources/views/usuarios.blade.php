<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href= {{ route('usuarios.index')}} >Vista Usuarios</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href= {{ route('login')}}>Login</a></li>
            <li><a href= {{ route('usuarios.index')}}>Usuarios</a></li>
            <li><a href="#">Administradores</a></li>
            <li><a href="#">Articulos</a></li>
        </ul>
    </div>
</nav>
<body>
<br/>

    <div class="container" style="margin-top: 50px;">
        <table class="table table-bordered">
            <thead>
                
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pepito</td>
                    <td>Pérez</td>
                    <td>555-555-555</td>
                    <td>juanperez@email.com</td>
                    <td>
                        <a href="#" class="btn btn-success">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María</td>
                    <td>García</td>
                    <td>555-555-556</td>
                    <td>mariagarcia@email.com</td>
                    <td>
                        <a href="#" class="btn btn-success">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pedro</td>
                    <td>Martínez</td>
                    <td>555-555-557</td>
                    <td>pedromartinez@email.com</td>
                    <td>
                        <a href="#" class="btn btn-success">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href= {{ route('usuarios.create')}} name="createUser" class="btn btn-primary w-100"><i class="bi bi-person-bounding-box"></i> Crear Nuevo Usuario</a>
    </div>
</body>

</html>