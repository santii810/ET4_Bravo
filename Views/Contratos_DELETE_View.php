<?php
include_once '../Functions/Authentication.php';

class Contratos_DELETE_View {

    function __construct($tupla) {    //Constructor de la clase
        $this->render($tupla);
    }

    function render($tupla) {
        if (!isset($_SESSION['idioma'])) {   //Si no hay idioma seleccionado
            $_SESSION['idioma'] = 'ESPAÑOL'; //por defecto ponemos español
        }

        include '../Views/Header.php';
        ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col"><?php echo $strings['Centro']; ?></th>
                    <th scope="col"><?php echo $strings['Tipo']; ?></th>
                    <th scope="col"><?php echo $strings['Empresa encargada']; ?></th>
                    <th scope="col"><?php echo $strings['Documento']; ?></th>
                    <th scope="col"><?php echo $strings['Periodo inicio']; ?></th>
                    <th scope="col"><?php echo $strings['Periodo fin']; ?></th>
                    <th scope="col"><?php echo $strings['Importe']; ?></th>
                    <th scope="col"><?php echo $strings['Estado']; ?></th>
                    <th scope="col"><?php echo $strings['Confirmar borrado']; ?></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $tupla['centro']; ?></td>
                    <td><?php echo $tupla['tipo']; ?></td>
                    <td><?php echo $tupla['cifEmpresa']; ?></td>
                    <td width="25%"><IMG src="<?php echo $tupla['documento']; ?>" height="10%" width="70%" alt="No se ha encontrado el resguardo"/></td>
                    <td><?php echo $tupla['periodoinicio']; ?></td>
                    <td><?php echo $tupla['periodofin']; ?></td>
                    <td><?php echo $tupla['importe']; ?></td>
                    <td><?php echo $tupla['estado']; ?></td>
                    <td>
                        <!--Botones para realizar acciones en cada tupla-->
                        <form class="form-inline my-2 my-lg-0" name='formulario' action="../Controllers/Contratos_Controller.php" method="post">
                            <input type="hidden" name=cod value=<?php echo $tupla['cod'] ?>>
                            <button name="action" value="DELETE" type="submit" class="btn btn-outline-primary">
                                <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
    }

}
?>


