<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href= {{ route('welcome') }}>Vista Usuarios</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href= {{ route('usuarios') }}>Usuarios</a></li>
                <li><a href="#">Administradores</a></li>
                <li><a href="#">Articulos</a></li>
            </ul>
        </div>
    </nav>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan</td>
                    <td>Pérez</td>
                    <td>555-555-555</td>
                    <td>juanperez@email.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María</td>
                    <td>García</td>
                    <td>555-555-556</td>
                    <td>mariagarcia@email.com</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pedro</td>
                    <td>Martínez</td>
                    <td>555-555-557</td>
                    <td>pedromartinez@email.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>