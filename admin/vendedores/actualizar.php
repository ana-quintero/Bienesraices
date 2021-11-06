<?php

    require '../../includes/app.php';
    use App\Vendedor;
    estaAutenticado();

    //Validar que sea un Id Válido

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }

    //Obtener el arreglo del vendedor desde la base de datos
    $vendedor = Vendedor::find($id);

    //Arreglo con mensajes de errores
    $errores = Vendedor::getErrores();

    //Ejecutar el codigo despues de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //Asignar los valores
        $args = $_POST['vendedor'];

        //SWincronizar objeto en memoria con lo que el usuario escribio
        $vendedor->sincronizar($args);

        //Validación
        $errores = $vendedor->validar();

        //Si no hay errores
        if(empty($errores)) {
            $vendedor->guardar();
        }

    }
    
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Actualizar Vendedor(a)</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>

        <?php endforeach; ?>

        <form class="formulario" method="POST">
            <?php include '../../includes/templates/formulario_vendedores.php'; ?>

            <input type="submit" value="Guardar Cambios" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>
