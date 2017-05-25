<?php
$info = $this->session->userdata('business_info');
if(!empty($info->currency))
{
    $currency = $info->currency ;
}else
{
    $currency = '$';
}
?>
<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->


<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title "><?php echo $supplier->company_name ?></h3>
                </div>

                <div class="box-body">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                          <strong>Nombre de la empresa:</strong>  <?php echo $supplier->company_name ?>
                        </div>
                        <div class="col-md-6">
                            <strong>Nombre del proveedor:</strong>  <?php echo $supplier->supplier_name ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <strong>Email:</strong>  <?php echo $supplier->email ?>
                        </div>
                        <div class="col-md-6">
                            <strong>Teléfono:</strong>  <?php echo $supplier->phone ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <strong>Address:</strong>  <?php echo $supplier->address ?>
                        </div>

                    </div>

                </div>
                <div class="box-body">

                        <!-- Table -->
                        <table class="table table-bordered table-hover" id="dataTables-example">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active">Sl</th>
                                <th class="active">No. factura</th>
                                <th class="active">Nombre del proveedor</th>
                                <th class="active">Fecha de compra</th>
                                <th class="active">Total</th>
                                <th class="active">Comprar por</th>
                                <th class="active">Acción</th>

                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($purchase)): foreach ($purchase as $v_purchase) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td">INV-<?php echo $v_purchase->purchase_order_number ?></td>
                                    <td class="vertical-td"><?php echo $v_purchase->supplier_name ?></td>
                                    <td class="vertical-td"><?php echo date('Y-m-d', strtotime($v_purchase->datetime )) ?></td>
                                    <td class="vertical-td"><?php echo $currency .' '. number_format($v_purchase->grand_total,2) ?></td>
                                    <td class="vertical-td"><?php echo $v_purchase->purchase_by ?></td>

                                    <td class="vertical-td">
                                        <?php echo btn_view('admin/purchase/purchase_invoice/' . $v_purchase->purchase_id); ?>

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

                </div><!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col end -->
    </div>
    <!-- /.row -->
</section>




