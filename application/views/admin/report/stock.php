<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->


<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Informe de resumen de existencias</h3>
                </div>


                <div class="box-body">

                        <!-- Table -->
                    <table id="datatable" class="table table-striped table-bordered datatable-buttons">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active col-sm-1">Sl</th>
                                <th class="active">Sku</th>
                                <th class="active">Producto</th>
                                <th class="active">Costo</th>
                                <th class="active">Cantidad en mano</th>
                                <th class="active">Valor en stock</th>


                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($stock)): foreach ($stock as $item) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td"><?php echo $item->product_code ?></td>
                                    <td class="vertical-td"><?php echo $item->product_name ?></td>
                                    <td class="vertical-td"><?php echo $this->localization->currency($item->buying_price) ?></td>
                                    <td class="vertical-td"><?php echo $item->product_quantity ?></td>
                                    <td class="vertical-td"><?php echo $this->localization->currency($item->buying_price * $item->product_quantity) ?></td>
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




