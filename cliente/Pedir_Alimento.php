<!DOCTYPE html>
<?php
session_start();
include_once '../../../Aplicaciones/pjt_eatEasy/modelAdmin/ModelAdmin.php';
require_once '../../../Aplicaciones/pjt_eatEasy/modelAdmin/ModelAdmin.php';

if (!isset($_SESSION['sesionDTO'])) {
    header('Location: ../view/web/index.html');
    die();
}
$sesionDTO = unserialize($_SESSION['sesionDTO']);
if ($sesionDTO->getRol() != "2") {
    header('Location: ../view/web/index.html');
    die();
}
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>OFERTAS</title>

        <!-- Normalize V8.0.1 -->
        <link rel="stylesheet" href="./css1/normalize.css">

        <!-- Bootstrap V4.3 -->
        <link rel="stylesheet" href="./css1/bootstrap.min.css">

        <!-- Bootstrap Material Design V4.0 -->
        <link rel="stylesheet" href="./css1/bootstrap-material-design.min.css">

        <!-- Font Awesome V5.9.0 -->
        <link rel="stylesheet" href="./css1/all.css">

        <!-- Sweet Alerts V8.13.0 CSS file -->
        <link rel="stylesheet" href="./css1/sweetalert2.min.css">

        <!-- Sweet Alert V8.13.0 JS file-->
        <script src="./js1/sweetalert2.min.js" ></script>

        <!-- jQuery Custom Content Scroller V3.1.5 -->
        <link rel="stylesheet" href="./css1/jquery.mCustomScrollbar.css">

        <!-- General Styles -->
        <link rel="stylesheet" href="./css1/style.css">


    </head>
    <body>

        <!-- Main container -->
        <main class="full-box main-container">
            <!-- Nav lateral -->
            <section class="full-box nav-lateral">
                <div class="full-box nav-lateral-bg show-nav-lateral"></div>
                <div class="full-box nav-lateral-content">
                    <figure class="full-box nav-lateral-avatar">
                        <i class="far fa-times-circle show-nav-lateral"></i>
                        <img src="assets1/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                        <figcaption class="roboto-medium text-center">
                            <?php echo $sesionDTO->getCorreo() ?> <br><small class="roboto-condensed-light">Cliente</small>
                        </figcaption>
                    </figure>
                    <div class="full-box nav-lateral-bar"></div>
                    <nav class="full-box nav-lateral-menu">
                        <ul>
                            <li>
                                <a href="alim_ver.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Tablero de Opciones</a>
                            </li>

                            <li>
                                <a href="#" class="nav-btn-submenu"><i class="fas fa-shopping-cart fa-fw"></i> &nbsp; Ofertas <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Nuevo Pedido</a>
                                    </li>
                                    <li>
                                        <a href="../controller/controllerAdmin.php?opcion=ver_aplimentop"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Ver Ofertas</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Ofertas</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="nav-btn-submenu"><i class="fas fa-dollar-sign fa-fw"></i> &nbsp; Vender <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li>
                                        <a href="alim_agregar.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Nueva Oferta</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="nav-btn-submenu"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Mis Ofertas <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li>
                                        <a href="../controller/controllerAdmin.php?opcion=ver_aplimentop_per&correo=<?php echo $sesionDTO->getCorreo() ?>"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Ver Mis Ofertas</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </section>

            <!-- Page content -->
            <section class="full-box page-content">
                <nav class="full-box navbar-info">
                    <a href="#" class="float-left show-nav-lateral">
                        <i class="fas fa-exchange-alt"></i>
                    </a>
                    <a href="user-update.html">
                        <i class="fas fa-user-cog"></i>
                    </a>
                    <a href="#" class="btn-exit-system">
                        <i class="fas fa-power-off"></i>
                    </a>
                </nav>

                <!-- Page header -->
                <div class="full-box page-header">
                    <h3 class="text-left">
                        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; OFERTAS
                    </h3>
                    <p class="text-justify">

                    </p>
                </div>

                <div class="container-fluid">
                    <ul class="full-box list-unstyled page-nav-tabs">
                        <li>
                            <a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR NUEVO PEDIDO</a>
                        </li>
                        <li>
                            <a class="active" href="Pedir_Alimento.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE OFERTAS</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR OFERTAS</a>
                        </li>
                    </ul>	
                </div>

                <!-- Content here-->
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-dark table-sm">
                            <thead class=" text-primary">
                                <tr class="roboto-medium">
                                    <th>IMAGEN</th>
                                    <th>NOMBRE</th>
                                    <th>CATEGORÍA</th>
                                    <th>DESCRIPCIÓN</th>
                                    <th>PRECIO</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $model = new ModelAdmin();
                                $listar = $model->obtenerCategorias();
                                if (isset($_SESSION['listado_alimentop'])) {
                                    $listado_alimentop = unserialize($_SESSION['listado_alimentop']);
                                    foreach ($listado_alimentop as $alim) {
                                        echo "<tr>";
                                        echo "<td> <img src='../clientes/imagenAP/" . $alim->getNombre_img() . "'  width=10% height=10%/></td>";
                                        echo "<td>" . $alim->getNombre_alimprep() . "</td>";
                                        foreach ($listar as $prov) {
                                            if ($alim->getId_cat() == $prov->getId_cat()) {
                                                echo "<td>" . $prov->getDescripcion_cat() . "</td>";
                                            }
                                        }
                                        echo "<td>" . $alim->getDescripción_alimprep() . "</td>";
                                        echo "<td>" . $alim->getPrecio_alimprep() . "</td>";

                                        echo "</tr>";
                                    }
                                } else {
                                    echo "No se han cargado datos.";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </main>


        <!--=============================================
        =            Include JavaScript files           =
        ==============================================-->
        <!-- jQuery V3.4.1 -->
        <script src="./js1/jquery-3.4.1.min.js" ></script>

        <!-- popper -->
        <script src="./js1/popper.min.js" ></script>

        <!-- Bootstrap V4.3 -->
        <script src="./js1/bootstrap.min.js" ></script>

        <!-- jQuery Custom Content Scroller V3.1.5 -->
        <script src="./js1/jquery.mCustomScrollbar.concat.min.js" ></script>

        <!-- Bootstrap Material Design V4.0 -->
        <script src="./js1/bootstrap-material-design.min.js" ></script>
        <script>$(document).ready(function () {
                $('body').bootstrapMaterialDesign();
            });</script>

        <script src="./js1/main.js" ></script>
    </body>
</html>
