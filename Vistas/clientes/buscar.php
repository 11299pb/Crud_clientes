<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Buscar Clientes</h1>
        <div class="row justify-content-center">
            <form action="/CRUD_CLIENTES/controladores/clientes/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="clientes_nombre">Nombre del cliente</label>
                        <input type="text" name="clientes_nombre" id="clientes_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="clientes_nit">Nit del cliente</label>
                        <input type="number" step="0.01" min="0" name="clientes_nit" id="clientes_nit" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>