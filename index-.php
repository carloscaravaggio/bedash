<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bedash | Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-light  fixed-top shadow">
  <div class="container-fluid">
    <!--offcanvas trigger-->
    <button class="btn btn-outline-light " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <i class="fa-solid fa-caret-down"></i>
</button>    
    <!--offcanvas trigger-->
     <a class="navbar-brand fw-bold" href="#">
      <img src="./logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      BeDash | CR
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-book"></i> Títulos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fa-solid fa-handshake"></i> Asociados
          </a>
          <ul class="dropdown-menu">
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
          <a class="nav-link" href="#"><i class="fa-solid fa-cash-register "></i> Ventas</a>
        </li>
        
         
      </ul>
 
    </div>

    <div class="d-flex align-items-center">
    	<div class="dropdown" style="margin-left: -0.8em;">
    		<a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    			<i class="fas fa-bell"></i>
    			 <span class="badge rounded-pill badge-notification bg-danger">1</span>
    		</a>
    		<ul class="dropdown-menu dropdown-menu-end">
    			<li><a class="dropdown-item">Notificacion</a></li>
    		</ul>
    	</div>

    	<div class="dropdown" style="margin-left: -0.8em;">
    		<a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    			<img
            src="./logo.png"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
    		</a>
    		<ul class="dropdown-menu dropdown-menu-end">
    			<li><a class="dropdown-item">Notificacion</a></li>
    		</ul>
    	</div>
    </div>
    

  </div>
</nav>
<!--navbar-->
<!--offcanvas-->
<div class="offcanvas offcanvas-start sidebar-nav bg-dark  show" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="top:56px;">
  <div class="offcanvas-body p-0">
      <div class=""> 
        <ul class="navbar-nav">
          <li> 
            <div class="text-muted small fw-bold text-uppercase px-3 pt-2">MENU </div>
          </li>
          <li> 
            <a href="#" class="nav-link px-3 active text-light">
              <span class="me-2"> 
                <i class="fa-solid fa-gauge-high"></i>
              </span>
              <span> Herramientas</span>
            </a>
          </li>
        </ul>
      </div>
  </div>
</div>
<!--offcanvas-->
<div class="main mt-5 pt-3">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-md-12 fw-bold fs-3">
            Dashboard
        </div>
      </div>
        <div class="row">

          <div class="col-md-3 mb-3">
            <div class="card shadow  h-100" style="max-width: 18rem;">
                <div class="card-header">Títulos</div>
                <div class="card-body">
                  <h5 class="card-title">Elemento Principal</h5>
                  <p class="card-text">Los títulos son el elemento principal de la aplicación, creados, consignados y almacenados en base de datos.</p>
                </div>
              </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card  h-100" style="max-width: 18rem;">
                <div class="card-header">Asociados</div>
                <div class="card-body">
                  <h5 class="card-title">Terceros </h5>
                  
                  <ul>
                    <li>Promotores</li>
                    <li>Colegios</li>
                    <li>Librerias</li>
                  </ul>
                </div>
              </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card text-bg-primary h-100 shadow" style="max-width: 18rem;">
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
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Inventario
                </div>
                <div class="card-body">
                    <h4>Consignado 30%</h4>
                    <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progress-bar-striped" style="width: 30%"></div>
                    </div>
                    <h4>Almacen 70%</h4>
                    <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progress-bar-striped" style="width: 70%"></div>
                  </div>
               
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Títulos
              </div>
              <div class="card-body">
                  <h4 class="mb-2 mt-2">Título 1 35%</h4>
                  <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 35%"></div>
                  </div>
                  <h4 class="mb-2 mt-2">Título 2 45%</h4>
                  <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 45%"></div>
                  </div>
                  <h4 class="mb-2 mt-2">Título 3 20%</h4>
                  <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 20%"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div> 



    </div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/dataTables.bootstrap5.js"></script>
<script src="./js/dataTables.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/all.js"></script>
<script src="./js/funciones.js"></script>


</body>
</html>