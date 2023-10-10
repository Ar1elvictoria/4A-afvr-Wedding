<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Base de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("boda.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }

        h2{color: white;margin-bottom: 25px;}

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 25px;
            box-sizing: border-box;
            color: white;
            border-radius: 1;
            border-color: white;
            background-color: black;
        }

        button {
            background-color: #E8ECF1;
            color: black;
            padding: 8px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .alert{
            background-color: #7FDB6C;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Registrate YA!</h2>
        <input placeholder="Ingresa tu Nombre(s) Completo(s)" type="text" id="nombre" name="nombre" required>
        <input placeholder="Ingresa tu Email" type="email" id="email" name="email" required>
        <input placeholder="Ingresa tu Contraseña" type="password" id="contrasena" name="contrasena" required>
        <?php
        $registro= ControladorFormularios::ctrRegistro();
        if ($registro == "OK"){
            echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>';
            echo '<div class="alert alert-succecc">El Usuario ha sido Registrado</div>';
        }
        ?>
        <button type="submit">Enviar</button>
    </body>
    </form>
</html>