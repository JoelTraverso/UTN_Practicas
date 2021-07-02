<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABML Usuario</title>
</head>
<body>
    <h1>Administrador de usuarios</h1>
    <br>
    <br>
    <form action="/guardar" method="POST">
    @csrf
        <div>
            <b>Nombre: </b>
            <input type="text" name="TxtNombre" required>
            <br>
            <br>
            <b>Apellido: </b>
            <input type="text" name="TxtApellido" required>
            <br>
            <br>
            <b>Dni: </b>
            <input type="text" name="TxtDni" required>
            <br>
            <br>
            <b>Sexo: </b>
            <select name="Sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
            <br>
            <br>
            <b>Fecha nacimiento: </b>
            <input type="text" name="TxtFec" required>
            <br>
            <br>
            <b>Telefono: </b>
            <input type="text" name="TxtTel">
            <br>
            <br>
            <b>Email: </b>
            <input type="text" name="TxtEmail">
            <br>
            <br>
            <input type="submit" name="guardar" value="Guardar">
        <div>
    </form>
    <br>
    <form action="/index" method="POST">
    @csrf
        <div>
            <b>Dni: </b>
            <input type="text" name="TxtDni" required>
            <br>
            <br>
            <input type="submit" name="cargar" value="cargar" onclick="cargar();">
        <div>
    </form>
    <br>
    <form action="/cargar" method="POST">
    @csrf
        <div>
            <b>Nombre: </b>
            <?php
                if(isset($_SESSION["nombre"]))
                echo '<input type="text" name="TxtNombre" value="'.$_SESSION['nombre'].'" required>';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Apellido: </b>
            <?php
                if(isset($_SESSION["apellido"]))
                echo '<input type="text" name="TxtApellido" value="'.$_SESSION['apellido'].'" required>';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Sexo: </b>
            <select name="Sexo">
            <?php
                if(isset($_SESSION["sexo"]))
                    if($_SESSION["sexo"]=="Femenino")
                    {
                        echo  
                        '<option value="Femenino" selected>Femenino</option>  
                        <option value="Masculino">Masculino</option>
                        <option value="Otro">Otro</option>';
                    }
                    else
                    if($_SESSION["sexo"]=="Otro")
                    {    
                         echo 
                        '<option value="Femenino">Femenino</option>  
                        <option value="Masculino">Masculino</option>
                        <option value="Otro" selected>Otro</option>';
                    }
                    else
                    {
                        echo 
                        '<option value="Femenino">Femenino</option>  
                        <option value="Masculino" selected>Masculino</option>
                        <option value="Otro">Otro</option>';
                    }
            ?>
               
            </select>
            <br>
            <br>
            <b>Fecha nacimiento: </b>
            <?php
                if(isset($_SESSION["fec_nac"]))
                echo '<input type="text" name="TxtFec" value="'.$_SESSION['fec_nac'].'" required>';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Telefono: </b>
            <?php
                if(isset($_SESSION["tel"]))
                echo '<input type="text" name="TxtTel" value="'.$_SESSION['tel'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Email: </b>
            <?php
                if(isset($_SESSION["email"]))
                echo '<input type="text" name="TxtEmail" value="'.$_SESSION['email'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <input type="submit" name="guardar" value="Guardar">
        <div>
    </form>
</body>
</html>