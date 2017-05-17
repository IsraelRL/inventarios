<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->

<?php $info = $this->session->userdata('business_info'); ?>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header box-header-background with-border">
                    <div class="col-md-offset-3">
                        <h3 class="box-title ">Administrar reglas de impuestos</h3>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-background">
                <!-- form start -->
                <form role="form" enctype="multipart/form-data"

                      action="<?php echo base_url(); ?>admin/settings/save_tax/<?php
                      if (!empty($tax->tax_id)) {
                          echo $tax->tax_id;
                      }
                      ?>" method="post">

                    <div class="row">

                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">

                                <!-- /.tax title -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Titulo <span class="required">*</span></label>
                                    <input type="text" required name="tax_title" placeholder="Titulo"
                                           value="<?php
                                           if (!empty($tax->tax_title)) {
                                               echo $tax->tax_title;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.tax title -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tarifa <span class="required">*</span></label>
                                    <input type="text" required name="tax_rate" placeholder="Tarifa"
                                           value="<?php
                                           if (!empty($tax->tax_rate)) {
                                               echo $tax->tax_rate;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Tax type -->
                                <div class="form-group">
                                    <label>Tipo de impuesto  <span class="required">*</span></label>
                                    <select name="tax_type" class="form-control col-sm-5">
                                        <option value="">Selecciona el tipo de impuesto </option>
                                        <option value="1" <?php
                                        if(!empty($tax->tax_type)){
                                            echo $tax->tax_type==1 ?'selected':'';
                                        } ?>>Percentage (%)</option>

                                        <option value="2" <?php

                                        if(!empty($tax->tax_type)){
                                            echo $tax->tax_type==1 ?'selected':'';
                                        }

                                        ?>>Fixed (
                                            <?php  if(!empty($info->currency))
                                            {
                                                echo $info->currency ;
                                            }else
                                            {
                                                echo '$';
                                            } ?>
                                            )
                                        </option>
                                    </select>
                                </div><br/><br/>

                                <button type="submit" class="btn bg-navy btn-flat" type="submit">Guardar regla de impuestos
                                </button>
                            <!-- /.box-body -->
</br>
</br>
                        </div>
                    </div>

                </form>
                    </div>
                <div class="box-footer">

                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                <table class="table table-bordered table-striped" id="dataTables-example">
                    <thead>
                    <tr>
                        <th class="active">SL</th>
                        <th class="active">Nombre del impuestoe</th>
                        <th class="active">Tarifa del impuesto</th>
                        <th class="active">Tipo del impuesto</th>
                        <th class="col-sm-2 active">Acción</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $key = 1 ?>
                    <?php if (!empty($tax_info)): foreach ($tax_info as $v_tax_info) : ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $v_tax_info->tax_title ?></td>
                            <td><?php echo $v_tax_info->tax_rate ?></td>
                            <td>
                                <?php if($v_tax_info->tax_type == 1) { ?>
                                % (Parentage)
                                <?php }else{ ?>
                                Flat Rate (Fixed)
                                <?php } ?>
                            </td>
                            <td>
                                <?php echo btn_edit('admin/settings/tax/' . $v_tax_info->tax_id); ?>
                                <?php echo btn_delete('admin/settings/delete_tax/' . $v_tax_info->tax_id); ?>
                            </td>

                        </tr>
                    <?php
                    $key++;
                    endforeach;
                    ?><!--get all category if not this empty-->
                    <?php else : ?> <!--get error message if this empty-->
                        <td colspan="5">
                            <strong>No hay registro para la visualización</strong>
                        </td><!--/ get error message if this empty-->
                    <?php
                    endif; ?>
                    </tbody>
                </table>

                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col end -->
    </div>
    <!-- /.row -->
</section>



