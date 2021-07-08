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
    <br>
    <form action="/index" method="POST">
    @csrf
        <div>
            <b>ID Alumno: </b>
            <input type="text" name="TxtID" required>
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
            <b>Tipo Documento: </b>
            <?php
                if(isset($_SESSION["tip_doc"]))
                echo '<input type="text" name="TxtTDoc" value="'.$_SESSION['tip_doc'].'" required>';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>N° Documento: </b>
            <?php
                if(isset($_SESSION["n_doc"]))
                echo '<input type="text" name="TxtDoc" value="'.$_SESSION['n_doc'].'" required>';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Domicilio: </b>
            <?php
                if(isset($_SESSION["domicilio"]))
                echo '<input type="text" name="TxtDom" value="'.$_SESSION['domicilio'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>ID Localidad: </b>
            <?php
                if(isset($_SESSION["id_loc"]))
                echo '<input type="text" name="TxtIdLoc" value="'.$_SESSION['id_loc'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>ID Provincia: </b>
            <?php
                if(isset($_SESSION["id_prov"]))
                echo '<input type="text" name="TxtIdProv" value="'.$_SESSION['id_prov'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Fecha nacimiento: </b>
            <?php
                if(isset($_SESSION["fec_nac"]))
                echo '<input type="text" name="TxtFec" value="'.$_SESSION['fec_nac'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Nacionalidad: </b>
            <?php
                if(isset($_SESSION["nacionalidad"]))
                echo '<input type="text" name="TxtNac" value="'.$_SESSION['nacionalidad'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Estado Civil: </b>
            <?php
                if(isset($_SESSION["est_civ"]))
                echo '<input type="text" name="TxtECiv" value="'.$_SESSION['est_civ'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Telefono Particular: </b>
            <?php
                if(isset($_SESSION["tel_par"]))
                echo '<input type="text" name="TxtTelP" value="'.$_SESSION['tel_par'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Telefono Trabajo: </b>
            <?php
                if(isset($_SESSION["tel_tra"]))
                echo '<input type="text" name="TxtTelT" value="'.$_SESSION['tel_tra'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>Telefono Movil: </b>
            <?php
                if(isset($_SESSION["tel_mov"]))
                echo '<input type="text" name="TxtTelM" value="'.$_SESSION['tel_mov'].'">';
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
            <b>Ocupacion: </b>
            <?php
                if(isset($_SESSION["ocupacion"]))
                echo '<input type="text" name="TxtOcu" value="'.$_SESSION['ocupacion'].'">';
                else
                echo '<input type="text" value="">';
            ?>
            <br>
            <br>
            <b>ID Empresa: </b>
            <?php
                if(isset($_SESSION["id_emp"]))
                echo '<input type="text" name="TxtIdEmp" value="'.$_SESSION['id_emp'].'">';
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