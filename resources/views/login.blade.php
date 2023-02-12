<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-color: black;
        }

        .form-group {
            text-align: center;
        }

        h2 {
            color: white;
            text-align: center;
        }
    </style>
    <title>Login Laravel Blog</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h2>Login Laravel Blog</h2>
                <form action="" method="get">
                    <div class="form-group">
                        <label for="username" style="color: white;">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password" style="color: white;">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>