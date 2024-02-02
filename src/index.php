<?php
require "../conexion.php";
/*--------------------------------------------------------------------------------------------*/  /* Total de usuarios */
$usuarios = mysqli_query($conexion, "SELECT * FROM usuario");
$total['usuarios'] = mysqli_num_rows($usuarios);
/*--------------------------------------------------------------------------------------------*/  /* Total de Clientes */
$clientes = mysqli_query($conexion, "SELECT * FROM cliente");
$total['clientes'] = mysqli_num_rows($clientes);
/*--------------------------------------------------------------------------------------------*/  /* Total de Carne en el almacen */
$productos = mysqli_query($conexion, "SELECT * FROM producto");
$total['productos'] = mysqli_num_rows($productos);
/*--------------------------------------------------------------------------------------------*/  /* Total de ventas realizadas en el dia */
$ventas = mysqli_query($conexion, "SELECT * FROM ventas WHERE fecha > CURDATE()");
$total['ventas'] = mysqli_num_rows($ventas);
/*--------------------------------------------------------------------------------------------*/  /* Total de Compras realizadas en el dia */
$proveedores = mysqli_query($conexion, "SELECT * FROM proveedores");
$total['proveedores'] = mysqli_num_rows($proveedores);
/*--------------------------------------------------------------------------------------------*/  /* Total de Proveedores */
$compras = mysqli_query($conexion, "SELECT * FROM compras");
$total['compras'] = mysqli_num_rows($compras);
/*--------------------------------------------------------------------------------------------*/  /* Total de Frutas y verduras en el Almacen */
//$fyv = mysqli_query($conexion, "SELECT * FROM fyv");
//$total['fyv'] = mysqli_num_rows($fyv);
/*--------------------------------------------------------------------------------------------*/  /* Total de Bebidas en el Almacen */
//$bebidas = mysqli_query($conexion, "SELECT * FROM bebidas");
//$total['bebida'] = mysqli_num_rows($bebidas);
/*--------------------------------------------------------------------------------------------*/  /* Dinero adquirido en ventas en el dia */
$ventadia = mysqli_query($conexion, "SELECT SUM(total) FROM ventas WHERE fecha > CURDATE()");
$venta['ventas'] = mysqli_fetch_assoc($ventadia);
/*--------------------------------------------------------------------------------------------*/
session_start();
include_once "includes/header.php";
?>
<!-- Content Row -->
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="fab fa-free-code-camp fa-2x"></i>
                </div>
                <a href="productos.php"class="card-category text-danger font-weight-bold">
                    Carnes
                </a>
                <h3 class="card-title"><?php echo $total['productos']; ?></h3>
            </div>
            <div class="card-footer bg-primary">
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-truck  mr-2 fa-2x"></i>
                </div>
                <a href="fyv.php" class="card-category text-info font-weight-bold">
                    Frutas y Verduras
                </a>
                <h3 class="card-title"><?php echo $total['fyv']; ?></h3>
            </div>
            <div class="card-footer bg-success text-white">
            </div>
        </div>
    </div>
<!-- ----------------------------------------------------------------------------------------------- -->
<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="fas fa-tint mr-2 fa-2x"></i>
                </div>
                <a href="bebidas.php" class="card-category text-info font-weight-bold">
                    Bebidas
                </a>
                <h3 class="card-title"><?php echo $total['bebida']; ?></h3>
            </div>
            <div class="card-footer bg-primary text-white">
            </div>
        </div>
    </div>
<!-- ----------------------------------------------------------------------------------------------- -->

<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fas fa-cash-register fa-2x"></i>
                </div>
                <a href="ventas.php" class="card-category text-info font-weight-bold">
                    Ventas
                </a>
                <h3 class="card-title"><?php echo $total['ventas']; ?></h3>
            </div>
            <div class="card-footer bg-danger text-white">
            </div>
        </div>
    </div>

<!-- ----------------------------------------------------------------------------------------------- -->



<!-- ----------------------------------------------------------------------------------------------- -->


<!-- ----------------------------------------------------------------------------------------------- -->



<!-- ----------------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------------- -->


    <div class="col-lg-6">
		<div class="card">
            <div class="card-header card-header-primary">
                <h3 class="title-2 m-b-40">Carne con stock mínimo</h3>
            </div>
            <div class="card-body">
			<canvas id="stockMinimo"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
	<div class="card">
            <div class="card-header card-header-primary">
                <h3 class="title-2 m-b-40">Productos más vendidos</h3>
            </div>
            <div class="card-body">
			<canvas id="ProductosVendidos"></canvas>
            </div>
        </div>
    </div>


    <!-- ----------------------------------------------------------------------------------------------- -->


    <div class="col-lg-6">
		<div class="card">
            <div class="card-header card-header-primary">
                <h3 class="title-2 m-b-40">Bebidas con stock mínimo</h3>
            </div>
            <div class="card-body">
			<canvas id="stockMinimo"></canvas>
            </div>
        </div>
    </div>



    <div class="col-lg-6">
	<div class="card">
            <div class="card-header card-header-primary">
                <h3 class="title-2 m-b-40">Bebidas más vendidos</h3>
            </div>
            <div class="card-body">
			<canvas id="ProductosVendidos"></canvas>
            </div>
        </div>
    </div>


    <!-- ----------------------------------------------------------------------------------------------- -->


    <div class="col-lg-6">
		<div class="card">
            <div class="card-header card-header-primary">
                <h3 class="title-2 m-b-40">Frutas y verduras con stock mínimo</h3>
            </div>
            <div class="card-body">
			<canvas id="stockMinimo"></canvas>
            </div>
        </div>
    </div>



    <div class="col-lg-6">
	<div class="card">
            <div class="card-header card-header-primary">
                <h3 class="title-2 m-b-40">Frutas y verduras más vendidos</h3>
            </div>
            <div class="card-body">
			<canvas id="ProductosVendidos"></canvas>
            </div>
        </div>
    </div>



</div>

<?php 
include_once "includes/footer.php";
include_once "includes/footer2.php"
?>