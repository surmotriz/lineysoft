<?php include "../layout/header.php"; ?>
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <!-- Sidebar izquierdo -->
            <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
                <?php include "./sidebar_soluciones.php"; ?>
            </div>

            <!-- Sidebar derecho -->
            <div class="d-none d-xl-block col-xl-2 bd-toc">
                <ul class="section-nav">
                    <li class="toc-entry toc-h2"><a href="#sistema-enlinea">Sistema en Linea</a>
                        <ul>
                            <li class="toc-entry toc-h3"><a href="#css">Integracion</a></li>
                            <li class="toc-entry toc-h3"><a href="#js">Forma de Trabajo</a></li>
                        </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#starter-template">Certificado Digital</a></li>
                    <li class="toc-entry toc-h2"><a href="#important-globals">Homologacion</a>
                        <ul>
                            <li class="toc-entry toc-h3"><a href="#html5-doctype">Comprobantes Permitidos</a></li>
                            <li class="toc-entry toc-h3"><a href="#responsive-meta-tag">Soporte Integracion</a></li>
                        </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#community">Tiempo Estimado</a></li>
                </ul>
            </div>

            <!-- Main -->
            <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content"  role="main">
                <h1 class="bd-title" id="sistema-enlinea">Facturacion Electronica Empresas</h1>
                <p class="bd-lead">
                    Si tienes actualmente un SOFTWARE DE VENTAS, un ERP PROPIO o de TERCERO, puedes seguir usando ese sistema, coordinamos con tu desarrollador para la integración con nosotros o lo hacemos solos.
                </p>
                <h2>Integracion y Trabajo</h2>
                <p>
                    Si NO tienes un SOFTWARE DE VENTAS o ERP puedes usar NUBEFACT ONLINE o contratar a alguno de nuestros SOCIOS ESTRATÉGICOS con soluciones mas complejas. También contamos con soluciones ONLINE y OFFLINE. Más detalles en la siguiente tabla.
                </p>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr class="table-secondary">
                        <td class="table-success"></td>
                        <th class="table-success text-center">ONLINE Empresas</th>
                        <th class="table-success text-center">OFFLINE Empresas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-light" >
                        <th scope="row">Sistema</th>
                        <td>Si no cuenta con un SOFTWARE o SISTEMA puedes usar NUBEFACT ONLINE ingresando desde cualquier lugar a www.nubefact.com.</td>
                        <td>Si no cuenta con un SOFTWARE o SISTEMA instalaremos en tu PC, LAPTOP o SERVIDOR NUBEFACT OFFLINE y podrás usarlo ingresando a nuestra aplicación aún si no tienes conección a internet.</td>
                    </tr>
                    <tr class="table-secondary" >
                        <th scope="row">Integracion</th>
                        <td>Puedes integrar tu aplicación usando nuestro WEB SERVICE (API REST). Consumes directamente nuestro WEB SERVICE publicado en www.nubefact.com. Es necesario contar con internet para generar el documento.</td>
                        <td>Puedes integrar tu aplicación usando nuestro WEB SERVICE (API REST). Instalamos nuestra aplicación en el servidor o PC de la empresa para que consumas nuestro WEB SERVICE vía LOCALHOST. NO es necesario contar con internet para generar el documento.</td>
                    </tr>
                    <tr class="table-light">
                        <th scope="row">Forma de trabajo</th>
                        <td colspan="2">
                            <p>
                                En caso de NUBEFACT ONLINE puede registrarte en este link y empezar a usar la aplicación ONLINE inmediatamente o solicitar una instalación en tu PC, LAPTOP o SERVIDOR de NUBEFACT OFFLINE.
                            </p>
                            <p>
                                En caso de las INTEGRACIONES coordinaremos con tu desarrollador para poder realizar la integración, nosotros proveemos documentación y soporte. Si no cuentas con un desarrollador nosotros ofrecemos hacer la integración sin problema alguno.
                            </p>
                        </td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">Soporte para la integración</th>
                        <td colspan="2">Proporcionamos documentación, asesoramiento tributario y de sistemas para una correcta y rápida integración.</td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">Lenguajes de Programacion</th>
                        <td colspan="2">Tendrás acceso GRATUITO a librerías para: PHP, JAVA, C#, VB.NET, VISUAL BASIC, VISUAL FOXPRO, RUBY (Si ninguno es tu lenguaje de programación no hay problema, es mucho mas fácil de lo que te imaginas).</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Certificado digital</th>
                        <td colspan="2">Está incluido, no será necesario que compres un CERTIFICADO DIGITAL, la SUNAT ha autorizado que podemos usar nuestro CERTIFICADO DIGITAL para disminuir costos y acelerar la emisión electrónica.</td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">Homologación</th>
                        <td colspan="2">Al contratar nuestros servicios deberás darnos de alta en la SUNAT con tu CLAVE SOL como tu PROVEEDOR (PSE) y quedarás exonerado de la homologación automáticamente, de no ser así la homologación tomaría semanas.</td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">Tiempo de integración</th>
                        <td colspan="2">Al contratar nuestros servicios deberás darnos de alta en la SUNAT con tu CLAVE SOL como tu PROVEEDOR (PSE) y quedarás exonerado de la homologación automáticamente, de no ser así la homologación tomaría semanas.</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Comprobantes que se pueden generar</th>
                        <td colspan="2">Al contratar nuestros servicios deberás darnos de alta en la SUNAT con tu CLAVE SOL como tu PROVEEDOR (PSE) y quedarás exonerado de la homologación automáticamente, de no ser así la homologación tomaría semanas.</td>
                    </tr>

                    </tbody>
                </table>

            </main>
        </div>
    </div>
<?php include "../layout/footer.php"; ?>