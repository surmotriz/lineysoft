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
                <h1 class="bd-title" id="sistema-enlinea">Facturacion E. Modo Online</h1>
                <p class="bd-lead">
                    Si no cuenta con un SOFTWARE o SISTEMA puedes usar LineySoft ONLINE ingresando desde
                    internet a lineysoft.com y tener tu sistema de facturacion funcionando al
                    100% por internet.
                </p>
                <h2>Integracion y Trabajo</h2>
                <p>
                    Puedes integrar tu aplicación usando nuestro <code>WEB SERVICE (API REST)</code>. Consumes directamente
                    nuestro <code>WEB SERVICE</code> publicado en www.lineysoft.com. Es necesario contar con internet para
                    generar el documento.
                </p>
                <table class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                        <td class="table-success"></td>
                        <th class="table-success text-center">ONLINE</th>
                        <th class="table-success text-center">OFFLINE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-info" >
                        <th scope="row">Integración</th>
                        <td>Puedes integrar tu aplicación usando nuestro WEB SERVICE (API REST). Consumes directamente nuestro WEB SERVICE publicado en www.nubefact.com. Es necesario contar con internet para generar el documento.</td>
                        <td>Puedes integrar tu aplicación usando nuestro WEB SERVICE (API REST). Instalamos nuestra aplicación en el servidor o PC de la empresa para que consumas nuestro WEB SERVICE vía LOCALHOST. NO es necesario contar con internet para generar el documento.</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Forma de trabajo</th>
                        <td colspan="2">
                            Nuestra forma de trabajo es bastante amigable para el desarrollador. Se espera que suceda lo siguiente:
                            <ol>
                                <li>Generar un archivo en formatos .JSON o .TXT con una estructura que te indicaremos.</li>
                                <li>Enviar el archivo generado a nuestro WEB SERVICE ONLINE u OFFLINE según corresponda.</li>
                                <li>A partir de ese archivo generamos el archivo XML y PDF (Según especificaciones de la SUNAT).</li>
                                <li>Te devolveremos inmediatamente en una respuesta el PDF y XML generado y otros datos para que imprimas el documento para tu cliente. La impresión del documento seguirá haciéndose desde tu sistema. Enviaremos el documento por email a tu cliente si así lo indicas.</li>
                                <li>Enviaremos el XML a la SUNAT y almacenaremos el CDR y custodiamos esos documentos en la NUBE para que tu cliente pueda consultarlo en cualquier momento.</li>
                            </ol>
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