<!DOCTYPE html>
<html  lang = " en ">
<head>
    <meta charset="UTF-8">
    <title> Datos enviados </title>
    <link rel="stylesheet" href="style.css">
</head>
<boby >
    <h2> FORMULARIO </h2>
    <form method = "post" action = "connect.php" >
        <P><tag><b><u> NOMBRE: <br></p></tag><input name = "nombre" type = "text" ></fieldset></u></b>
        <br>
        <label for>
        <P><tag><b><u> ESTADO ID: <br></p></tag>
        <input name="estadoid" type="text" id="estadoid" list=estados placeholder="estado">
        </label>
        <datalist id="estados">    
            <option value="Potencial">1</option>
            <option value="Nuevo">2</option>
            <option value="Malo">3</option>
            <option value="Exelente">4</option>
        </datalist>
        <br>
        <P><tag><b><u> FECHA DE ACTUALIZACION: <br></p></tag><input type="date" name="fechaactualizacion" required></u></b><br><br>
        <input type="submit" value="Enviar">
    </form>   

    <?php
        if(isset($_POST["submit"])) {
            if(empty($_POST["nombre"])){
                $errores[] = "Ingrese el nombre";
            }
            if(empty($_POST["estados"])){
                $errores[] = "Ingrese el estado";
            }
            if(empty($_POST["fechaactualizacion"])){
                $errores[] = "Ingrese la fecha de actualizacion";
            }
        }
    ?> 

</boby>
</html>