<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->


<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Administrar Cliente</h3>
                </div>


                <div class="box-body">

                        <!-- Table -->
                    <table id="datatable" class="table table-striped table-bordered datatable-buttons">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active col-sm-1">Sl</th>
                                <th class="active">Código Cliente</th>
                                <th class="active">Nombre del cliente</th>
                                <th class="active">Email</th>
                                <th class="active">Teléfono</th>
                                <th class="active">Descuento</th>
                                <th class="active">Acción</th>

                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($customer)): foreach ($customer as $v_customer) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td"><?php echo $v_customer->customer_code ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->customer_name ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->email ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->phone ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->discount ?> %</td>

                                    <td class="vertical-td">

                                        <div class="btn-group">
                                            <a href="<?php echo base_url().'admin/customer/add_customer/'. $v_customer->customer_id ?>" class="btn btn-xs btn-default" ><i class="fa fa-pencil"></i></a>
                                            <a href="<?php echo base_url().'admin/customer/delete_customer/'. $v_customer->customer_id ?>" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-trash"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            <?php
                                $counter++;
                            endforeach;
                            ?><!--get all sub category if not this empty-->
                            <?php else : ?> <!--get error message if this empty-->
                                <td colspan="7">
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




