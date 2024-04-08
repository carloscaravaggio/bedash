<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedash | Admin</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" href="css/chartist.min.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5.5rem;
                padding: 0;
            }
        }
            
        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
        main{
           margin-top:1.4rem;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                El MALETIN DEL SABER
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="col-12 col-md-5 col-lg-8 d-flex d-none d-md-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="mr-3 mt-1">
                <div class="dropdown" style="margin-left: -0.8em;">
                    <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                         <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item">Notificacion</a></li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Messages</a></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="ml-2">Inicio</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <i class="fa-solid fa-book      "></i>
                            <span class="ml-2">Títulos</span>
                          </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-handshake"></i> Asociados
                            </a>
                          <ul class="dropdown-menu bg-light">
                            <li><a class="dropdown-item" href="#">Promotores</a></li>
                            <li><a class="dropdown-item" href="#">Colegios</a></li>
                            <li><a class="dropdown-item" href="#">Librerias</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-boxes-packing"></i> Movimientos
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Consignaciones</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Inventario</a></li>
                            
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            <span class="ml-2">Ventas</span>
                          </a>
                        </li><!--
                        <li class="nav-item">
                            <a class="btn btn-sm btn-secondary ml-3 mt-2" href="https://themesberg.com/blog/bootstrap/simple-bootstrap-5-dashboard-tutorial">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                </svg>
                                <span class="ml-2">Documentación</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-warning ml-3 mt-2" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">
                                ⚡︎ Volt Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-primary ml-3 mt-2" href="https://themesberg.com">
                                By Themesberg ❤️
                            </a>
                        </li>-->
                      </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4 offset-md-2 ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <p>Visión General</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <h5 class="card-header">Títulos Disponibles</h5>
                            <div class="card-body">
                                <?php include_once 'apidb.php';?>
                              <!--<h5 class="card-title">22.000 Unidades </h5>-->
                              <?php $api = new apiDB(); 
                                $api->inv_tit();
                              ?>
                              <p class="card-text">Consulta de Inventario</p>
                              <p class="card-text text-success">18.2% Incrementado ult. 7 Dias</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card h-100">
                            <h5 class="card-header">Ventas</h5>
                            <div class="card-body">
                                <?php
                                include_once 'apitit.php';
                                $api = new apiTits();
                                $res = $api->c();
                                 ?>
                              <h5 class="card-title">Bs 48.000 | $ 1370</h5>
                              <p class="card-text">Abr 2024</p>
                              <p class="card-text text-success">Incremento de 4.6% en el ultimo mes.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card h-100">
                            <h5 class="card-header">Inventario</h5>
                            <div class="card-body">
                              <h5 class="card-title">700 Inventario</h5>
                              <h6 class="card-title">2500 Consignado</h6>
                              <p class="card-text">3200 Unidades</p>
                              <p class="card-text text-danger">-2.6% Este mes</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3 mb-lg-0 col-lg-3">
                        <div class="card h-100">
                            <h5 class="card-header">Traffic</h5>
                            <div class="card-body">
                              <h5 class="card-title">64k</h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">2.5% increase since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                      <div class="card shadow  h-100">
                          <div class="card-header">Títulos</div>
                          <div class="card-body">
                            <h5 class="card-title">Elemento Principal</h5>
                            <p class="card-text">Los títulos son el elemento principal de la aplicación, creados, consignados y almacenados en base de datos.</p>
                          </div>
                        </div>
                    </div>

        <div class="col-md-3 mb-3">
          <div class="card  h-100" >
              <div class="card-header">Control</div>
              <div class="card-body">
                <h5 class="card-title">Tab_control </h5>
                
                <?php 
                
                $api = new apiDB();
                $api->mostrar_data();

                ?>
              </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card text-bg-primary h-100 shadow" >
              <div class="card-header">Movimientos</div>
              <div class="card-body">
                <h5 class="card-title">Consignar - Almacen</h5>
                <p class="card-text">Gestiona tus Títulos en inventario.</p>
              </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card text-bg-success shadow h-100">
              <div class="card-header">Ventas</div>
              <div class="card-body">
                <h5 class="card-title">Registra y Consulta</h5>
                <p class="card-text">Control de ventas
                </p>
              </div>
            </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Latest transactions</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Order</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Date</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">17371705</th>
                                            <td>Volt Premium Bootstrap 5 Dashboard</td>
                                            <td>johndoe@gmail.com</td>
                                            <td>€61.11</td>
                                            <td>Aug 31 2020</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">17370540</th>
                                            <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                            <td>jacob.monroe@company.com</td>
                                            <td>$153.11</td>
                                            <td>Aug 28 2020</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">17371705</th>
                                            <td>Volt Premium Bootstrap 5 Dashboard</td>
                                            <td>johndoe@gmail.com</td>
                                            <td>€61.11</td>
                                            <td>Aug 31 2020</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">17370540</th>
                                            <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                            <td>jacob.monroe@company.com</td>
                                            <td>$153.11</td>
                                            <td>Aug 28 2020</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">17371705</th>
                                            <td>Volt Premium Bootstrap 5 Dashboard</td>
                                            <td>johndoe@gmail.com</td>
                                            <td>€61.11</td>
                                            <td>Aug 31 2020</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">17370540</th>
                                            <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                            <td>jacob.monroe@company.com</td>
                                            <td>$153.11</td>
                                            <td>Aug 28 2020</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <a href="#" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="pt-5 d-flex justify-content-between">
                    <span>© 2024 Desarrollador <a href="https://themesberg.com">ByCR</a></span>
                    <ul class="nav m-0">
                        <li class="nav-item">
                          <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Contacto</a>
                        </li>
                      </ul>
                </footer>
            </main>
        </div>
    </div>
    
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/all.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        new Chartist.Line('#traffic-chart', {
            labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
            series: [
                [23000, 25000, 19000, 34000, 56000, 64000]
            ]
            }, {
            low: 0,
            showArea: true
        });
    </script>
</body>
</html>