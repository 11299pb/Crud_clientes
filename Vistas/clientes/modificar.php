<?php
require '../../modelos/clientes.php';
    try {
        $clientes = new clientes($_GET);

        $clientes = $clientes->buscar();
        // echo "<pre>";
        // var_dump($clientess[0]['clientes_ID']);
        // echo "</pre>";
        // exit;
        // $error = "NO se guardó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar clientess</h1>
        <div class="row justify-content-center">
            <form action="/CRUD_CLIENTES/controladores/clientes/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="clientes_id" value="<?= $clientess[0]['clientes_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nombre">Nombre del clientes</label>
                        <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control" value="<?= $clientess[0]['clientes_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nit">Nit del cliente</label>
                        <input type="number" step="0.01" min="0" name="cliente_nit" id="cliente_nit" class="form-control" value="<?= $clientess[0]['clientes_NIT'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>