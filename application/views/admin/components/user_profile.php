
        <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo"><b>GIT</b>Inventarios</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>


          <div class="hidden-sm hidden-xs ">
              <ul class="nav navbar-nav">
                  <li class="dropdown mega-dropdown">

                      <a href="#" class="dropdown-toggle " data-toggle="dropdown" style="font-size: 18px">Opciones <i class="fa fa-cog" aria-hidden="true"></i></a>


                      <ul class="dropdown-menu mega-dropdown-menu row  ">


                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Ventas (PDV)</li>
                                  <li><a href="<?php echo site_url('admin/order/new_order')?>"><spna style="color: #00a7d0"><i class="fa fa-shopping-cart" aria-hidden="true"></i></spna> Nuevas ventas</a></li>
                                  <li><a href="<?php echo site_url('admin/order/manage_invoice') ?>"><spna style="color: #00a7d0"><i class="fa fa-file-text-o" aria-hidden="true"></i></spna> Administrar factura</a></li>
                                  <li><a href="<?php echo site_url('admin/order/manage_order') ?>"><spna style="color: #00a7d0"><i class="fa fa-file-text-o" aria-hidden="true"></i></spna> Administrar pedido</a></li>

                              </ul>
                          </li>

                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Reporte de ventas</li>
                                  <li><a href="<?php echo site_url('admin/report/sales_report') ?>"><spna style="color: #00a7d0"><i class="fa fa-file-text-o" aria-hidden="true"></i></spna> Reporte de ventas</a></li>
                                  <li><a href="<?php echo site_url('admin/report/sales_summery_report') ?>"><spna style="color: #00a7d0"><i class="fa fa-file-text-o" aria-hidden="true"></i></spna> Res. de Ventas</a></li>
                                  <li><a href="<?php echo site_url('admin/report/purchase_report') ?>"><spna style="color: #00a7d0"><i class="fa fa-file-text-o" aria-hidden="true"></i></spna> Inf. de compras</a></li>
                                  <li><a href="<?php echo site_url('admin/report/stock_report') ?>"><spna style="color: #00a7d0"><i class="fa fa-file-text-o" aria-hidden="true"></i></spna> Resumen de existencias</a></li>

                              </ul>
                          </li>

                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Productos y servicios</li>
                                  <li><a href="<?php echo site_url('admin/product/add_product') ?>"><spna style="color: #00a7d0"><i class="fa fa-plus" aria-hidden="true"></i></spna> Agregar producto </a></li>
                                  <li><a href="<?php echo site_url('admin/product/manage_product') ?>"><spna style="color: #00a7d0"><i class="glyphicon glyphicon-th-large" aria-hidden="true"></i></spna> Admin. producto</a></li>
                                  <li><a href="<?php echo site_url('admin/product/damage_product') ?>"><spna style="color: #00a7d0"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></spna> Producto Dañado</a></li>
                                  <li><a href="<?php echo site_url('admin/product/print_barcode') ?>"><spna style="color: #00a7d0"><i class="glyphicon glyphicon-barcode" aria-hidden="true"></i></spna> Impresión del código de barras</a></li>
                              </ul>
                          </li>

                          <li class="col-sm-3">
                              <ul>
                                  <li class="dropdown-header">Manejar compras</li>
                                  <li><a href="<?php echo site_url('admin/purchase/add_supplier') ?>"><spna style="color: #00a7d0"><i class="fa fa-plus" aria-hidden="true"></i></spna> Agregar proveedor</a></li>
                                  <li><a href="<?php echo site_url('admin/purchase/manage_supplier') ?>"><spna style="color: #00a7d0"><i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i></spna> Admin. proveedores</a></li>
                                  <li><a href="<?php echo site_url('admin/purchase/new_purchase') ?>"><spna style="color: #00a7d0"><i class="fa fa-shopping-cart" aria-hidden="true"></i></spna> Nueva compra</a></li>
                                  <li><a href="<?php echo site_url('admin/purchase/purchase_list') ?>"><spna style="color: #00a7d0"><i class="glyphicon glyphicon-th-list" aria-hidden="true"></i></spna> Historial de compras</a></li>
                              </ul>
                          </li>


                      </ul>

                  </li>
              </ul>
          </div>









            <div class="navbar-custom-menu pull-right">




                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <?php
                    if(!empty($_SESSION["notify_product"]))
                    {
                        $notify_product = $_SESSION["notify_product"];
                        $notify_product_count = count($notify_product);
                    }
                    ?>



                    <!-- Notifications: style can be found in dropdown.less -->

                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger"><?php if(!empty($notify_product_count)){
                                    echo $notify_product_count;
                                }else{
                                    echo '0';
                                }
                                ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <?php if(!empty($notify_product_count)){
                                    echo $notify_product_count;
                                }else{
                                    echo '0';
                                }
                                ?>
                                El producto se está agotando</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">

                                    <?php
                                    if(!empty($notify_product)){
                                    foreach($notify_product as $v_notify_product){
                                        ?>

                                        <li><!-- start message -->
                                            <a href="<?php echo base_url()?>admin/product/add_product/<?php echo $v_notify_product->product_id ?>">
                                                <div class="pull-left">
                                                    <?php if(!empty($v_notify_product->filename)){?>
                                                        <img src="<?php echo base_url() . $v_notify_product->filename; ?>" class="img-circle" alt="Product Image"/>
                                                    <?php }else{?>
                                                        <img src="<?php echo base_url(); ?>img/product.png" class="img-circle" alt="Product Image"/>
                                                    <?php } ?>
                                                </div>
                                                <h4 style="padding-bottom:6px">
                                                    <?php echo 'Barcode:'.$v_notify_product->product_code  ?>
                                                    <span class="label label-danger">Qty:<?php echo $v_notify_product->product_quantity  ?></span>
                                                </h4>
                                                <p><?php echo $v_notify_product->product_name  ?></p>
                                            </a>
                                        </li><!-- end message -->

                                    <?php }; } ?>


                                </ul>
                            </li>
                            <li class="footer"><a href="<?php echo base_url() ?>admin/product/notification_product">Ver todas las notificaciones</a></li>
                        </ul>
                    </li>

                    <?php
                    $pending_order = $_SESSION["pending_order"];
                    $pending_order_count = count($pending_order);
                    ?>

                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"><?php echo $pending_order_count ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><?php echo $pending_order_count ?> Orden pendiente</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">

                                    <?php
                                    foreach($pending_order as $v_pending_order){
                                        ?>

                                        <li><!-- start message -->
                                            <a href="<?php echo base_url()?>admin/order/view_order/<?php echo $v_pending_order->order_no ?>">
                                                <h4 style="padding-bottom:6px">
                                                    <?php echo 'INV'.$v_pending_order->order_no ?> <small>Order Date:  <?php echo $this->localization->dateFormat($v_pending_order->order_date )?></small>
                                                </h4>
                                                <p><?php echo $this->localization->currencyFormat($v_pending_order->grand_total,2)  ?></p>
                                            </a>
                                        </li><!-- end message -->

                                    <?php } ?>


                                </ul>
                            </li>
                            <li class="footer"><a href="<?php echo base_url() ?>admin/order/pending_order">Ver todas las Ordenes pendientes</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>login/logout" >
                            <span class="glyphicon glyphicon-off"></span> Cerrar sesión
                        </a>

                    </li>


                </ul>
            </div>


        </nav>
      </header>