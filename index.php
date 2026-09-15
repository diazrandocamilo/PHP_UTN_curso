<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cuantos tristes tigres comen trigo en un trigal</h2>
    <form method="get">
        <div>
            <label for="tigres">
                Ingrese el la cantidad de tigres:
            </label>
            <input type="number" id="tigres" min="0" name="tigres" placeholder="ingrese un número:">
        </div>
        <button type="submit">Enviar</button>
    </form>   
    <h2> Registrar usuario</h2> 
    <form method="get">
        <div>
            <label for="usuario">
                Ingrese un nombre de usuario:
            </label>
            <input type="text" id="usuario" name="usuario" placeholder="ingrese su usuario:">
        </div>
        <div>
            <label for="contraseña">
                Ingrese una contraseña:
            </label>
            <input type="password" id="contraseña" name="contraseña" placeholder="ingrese su contraseña:">
        </div>
        <button type="submit">Enviar</button>
    </form>   
    <?php 
        if(isset($_GET['tigres'])){
            $cantidad=$_GET['tigres'];
            switch ($cantidad) {
                    case "0":
                        echo "<p> Ningún triste tigre come trigo en un trigal </p>";
                        break;
                    case "1":
                        echo "<p> ". $cantidad ." triste tigre come trigo en un trigal</p>";
                        break;
                    default:
                        echo "<p> ". $cantidad ." tristes tigres comen trigo en un trigal</p>";
                        break;
                }       
        }
        else{
            echo "<p>aun no ingresó la cantidad de tigres</p>";
        }
        if (isset($_GET["usuario"]) && isset($_GET["contraseña"])){
            $usuario=$_GET["usuario"];
            $contraseña=$_GET["contraseña"];
            $tomados=["Juan","Pepe","José","Pedro"];
            if (in_array($usuario, $tomados)) {
                echo "<p>este usuario ya ha sido tomado elige otro </p>";
                }
            else {
                if (strlen($contraseña)==0) {
                    echo "<p>complete su usuario y contraseña</p>";
                }
                elseif (strlen($contraseña)<= 4) {
                    echo "su contraseña es muy corta, tiene que tener mas que 4 caracteres";
                }

                else{
                    echo "<p>se registro su nombre " . $usuario . " correctamente</p>";
                }
            }
        }
        else{
            echo "<p>complete su usuario y contraseña</p>";
        }
        
    ?>
</body>
</html>