<!DOCTYPE html>
<html  lang = " en ">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<boby >
    <h2> FORMULARIO </h2>
    <form method = "post" action = "connect.php" >
        <P><tag><b><u> NOMBRE: <br></p></tag><input name = "nombre" type = "text" ></fieldset></u></b><br><br>
        
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
        <P><tag><b><u> FECHA DE ACTUALIZACION: <br></p></tag><input name="fechaactualizacion" type="date"></u></b><br><br>
        <button name="fechaactualizacion" type = " submit "> ENVIAR EL FORMULARIO </button>
    </form>    
        
</boby>
</html>