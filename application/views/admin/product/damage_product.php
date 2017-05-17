
<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Producto dañado</h3>
                </div>


                <div class="box-body">
                    <a href="<?php echo base_url() ?>admin/product/add_damage_product" class=" btn bg-navy btn-flat  pull-right" >Añadir producto dañado</a>

                    <br/>
                    <br/>
                        <!-- Table -->
                    <table id="datatable" class="table table-striped table-bordered datatable-buttons">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active col-sm-1">Sl</th>
                                <th class="active">Código del producto</th>
                                <th class="active">Nombre del producto</th>
                                <th class="active">Categoría</th>
                                <th class="active">Cantidad dañada</th>
                                <th class="active">Nota</th>
                                <th class="active">Fecha</th>

                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($damage_product)): foreach ($damage_product as $v_damage_product) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td highlight"><?php echo $v_damage_product->product_code ?></td>
                                    <td class="vertical-td"><?php echo $v_damage_product->product_name ?></td>
                                    <td class="vertical-td"><?php echo $v_damage_product->category?></td>
                                    <td class="vertical-td currency"><?php echo $v_damage_product->qty ?></td>
                                    <td class="vertical-td"><?php echo $v_damage_product->note ?></td>
                                    <td class="vertical-td"><?php echo $this->localization->dateFormat($v_damage_product->date) ?></td>
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
