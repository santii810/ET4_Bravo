<?php

class Contrato_SEARCH {

    function __construct() {
        $this->render();
    }

    function render() {
        if (!isset($_SESSION['idioma'])) {
            $_SESSION['idioma'] = 'SPANISH';
        }

        include '../Views/Header.php';
        ?>
        <h2><?php echo $strings['Buscar contratos']; ?></h2>        

        <section>
            <form class="form_edit" method="post" action="../Controllers/Contratos_Controller.php" enctype="multipart/form-data">
                <fieldset id="fieldset_edit">

                    <label for="cod"><?php echo $strings['Código'] ?>  *</label> 
                    <input name="cod" type="text" size="25" id="cod" onblur="comprobarTexto(this, 30);"/> 

                    <label for="centro"><?php echo $strings['Centro'] ?>  *</label> 
                    <input name="centro" type="text" size="25" id="centro" onblur="comprobarTexto(this, 30);"/> 

                    <label for="tipo"><?php echo $strings['Tipo'] ?>  *</label>  
                    <select name="tipo" id="tipo">
                        <option value="certificador"><?php echo $strings['Certificador'] ?></option>
                        <option value="mantenimiento"><?php echo $strings['Mantenimiento'] ?></option>
                        <option value="reparacion"><?php echo $strings['Reparacion'] ?></option>
                    </select>

                    <label for="cifEmpresa"><?php echo $strings['cifEmpresa'] ?>  *</label> 
                    <input name="cifEmpresa" type="text" id="cifEmpresa" /> <!--No se valida el resguardo en edit porque si no se introduce un fichero nuevo nos quedamos con el que ya esta almacenado-->

                    <label for="documento"><?php echo $strings['Documento']; ?>  *</label> 
                    <input name="documento" type="file" id="documento" /> <!--No se valida el resguardo en edit porque si no se introduce un fichero nuevo nos quedamos con el que ya esta almacenado-->

                    <label for="periodoinicio"><?php echo $strings['Periodo inicio']; ?>  *</label> 
                    <input type="date" name="periodoinicio" id="periodoinicio"> 

                    <label for="periodofin"><?php echo $strings['Periodo fin']; ?>  *</label> 
                    <input type="date" name="periodofin" id="periodofin"> 

                    <label for="importe"><?php echo $strings['Importe']; ?>  *</label> 
                    <input type="number" name="importe" id="importe" onblur="comprobarEntero(this, 1, 999);"> 

                    <label for="estado"><?php echo $strings['Estado']; ?>  *</label> 
                    <select id="estado" name="estado">
                        <option selected value="norealizado"><?php echo $strings['No realizado'] ?></option>
                    </select>

                </fieldset>
                <span>* <?php echo $strings['Campos obligatorios']; ?> </span>
                <!-- Boton submit -->
                <button name="action" type="submit" value="SEARCH"><i class="fas fa-check"></i></button>

            </form>
        </section>
        <?php
        include '../Views/Footer.php';
    }

}
?>

