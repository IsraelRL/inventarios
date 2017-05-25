
<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->


<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Administrar pedido</h3>
                </div>



                <div class="box-body">

                    <div id="printableArea">

                        <!-- Table -->
                        <table id="datatable" class="table table-striped table-bordered datatable-buttons">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active">Sl</th>
                                <th class="active">No de Orden</th>
                                <th class="active">Fecha de orden</th>
                                <th class="active">Estatus de la orden</th>
                                <th class="active">Total de orden</th>
                                <th class="active">Ventas por</th>
                                <th class="active">Acción</th>

                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($order)): foreach ($order as $v_order) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td highlight">
                                        <a href="<?php echo base_url()?>admin/order/view_order/<?php echo $v_order->order_no ?>">ORD-<?php echo $v_order->order_no ?></a>
                                    </td>
                                    <td class="vertical-td"><?php echo $this->localization->dateFormat($v_order->order_date)?></td>
                                    <td class="vertical-td">
                                        <?php
                                          if($v_order->order_status == 0){
                                              echo '<span class="label label-warning">Orden pendiente</span>';
                                          }elseif($v_order->order_status == 1){
                                              echo '<span class="label label-danger">Cancel Order</span>';
                                        }else{
                                              echo '<span class="label label-info">Confirm Order</span>';
                                        }
                                        ?>
                                    </td>
                                    <td class="vertical-td currency"><?php echo $this->localization->currencyFormat($v_order->grand_total)  ?></td>
                                    <td class="vertical-td"><?php echo $v_order->sales_person ?></td>

                                    <td class="vertical-td">

                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                Más <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu">

                                                <li>
                                                    <a href="<?php echo base_url()?>admin/order/view_order/<?php echo $v_order->order_no ?>"><i class="glyphicon glyphicon-search text-success"></i><span>Ver orden</span></a>
                                                </li>

                                                <?php if($v_order->order_status == 0){?>
                                                    <li>
                                                        <a href="<?php echo base_url()?>admin/order/change_status/<?php echo $v_order->order_no ?>" data-target="#modalSmall" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i><span>Cambiar estatus</span></a>
                                                    </li>
                                                <?php }?>

                                                <?php if($v_order->order_status == 1 || $v_order->order_status == 0 ){?>
                                                    <li>
                                                        <a onclick="return confirm('Are you sure want to delete this order');" href="<?php echo base_url()?>admin/order/delete_order/<?php echo $v_order->order_no ?>"><i class="fa fa-trash-o text-danger"></i><span class="text-danger">Borrar</span></a>
                                                    </li>
                                                <?php }?>

                                            </ul>
                                        </div>
                                    </td>

                                </tr>
                            <?php
                                $counter++;
                            endforeach;
                            ?><!--get all sub category if not this empty-->
                            <?php else : ?> <!--get error message if this empty-->
                                <td colspan="6">
                                    <strong>No hay registro para la visualización</strong>
                                </td><!--/ get error message if this empty-->
                            <?php endif; ?>
                            </tbody><!-- / Table body -->
                        </table> <!-- / Table -->
                        </div>

                </div><!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col end -->
    </div>
    <!-- /.row -->
</section>




