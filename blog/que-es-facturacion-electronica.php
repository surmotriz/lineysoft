<?php include "../layout/header.php"; ?>
<div class="container-fluid">
    <div class="row flex-xl-nowrap">
        <!-- Sidebar -->
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
            <?php include "./sidebar/sidebar.php"; ?>
        </div>

        <!-- Main -->
        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
            <h1 class="bd-title">Factura Electrónica SUNAT</h1>
            <p class="bd-lead">Es el tipo de comprobante de pago denominado FACTURA, emitido a través del sistema de emisión electrónica desarrollado desde los sistemas del contribuyente.</p>
            <img src="assets/factura-electronica-2.png" height="400">
            <p style="padding-top: 30px;">Mediante el Sistema de Emisión Electrónica desde los sistemas desarrollados por el contribuyente, se emiten también las Notas de Débito y Crédito vinculadas a la Factura Electrónica desde el Contribuyente.</p>
        </main>
    </div>
</div>
<?php include "../layout/footer.php"; ?>