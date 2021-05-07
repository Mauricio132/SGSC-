<?php

require '../config/config.php';
require '../data/DataConection.php';
require '../modelo/Ciudad.php';
require '../modelo/Cliente.php';
require '../modelo/Venta_detalle.php';
require '../modelo/Venta.php';
require '../modelo/Top.php';
require '../modelo/Compra_detalle.php';
require '../modelo/Compra.php';
require '../interfaz/IVenta.php';
require '../interfaz/ICompra.php';
require '../modelo/Provincia.php';
require '../modelo/Categoria_articulo.php';
require '../modelo/Proveedor_contacto.php';
require '../modelo/Proveedor.php';
require '../modelo/Articulo.php';
require '../dao/CompraDao.php';
require '../dao/VentaDao.php';


if ($_POST['opcion'] == 'true') {
    $daoVenta = new VentaDao();
    echo json_encode($daoVenta->listarComboVenta($_POST['fechaInicio'], $_POST['fechaFin']));
} 
else if ($_POST['opcion'] == 'false') {
    $daoCompra = new CompraDao();
    echo json_encode($daoCompra->listarComboCompra($_POST['fechaInicio'], $_POST['fechaFin']));
} 
else if ($_POST['opcion'] == 'top') {
    if ($_POST['opc'] == 'true') {
         $daoVenta = new VentaDao();
        echo json_encode($daoVenta->listarTopVenta($_POST['fechaInicio'], $_POST['fechaFin'],$_POST['limit'],$_POST['ordenMax'])); 
        die();
    } else {
        $daoCompra = new CompraDao();
        echo json_encode($daoCompra->listarTopCompra($_POST['fechaInicio'], $_POST['fechaFin'],$_POST['limit'],$_POST['ordenMax'])); 
        die();
    }
}


