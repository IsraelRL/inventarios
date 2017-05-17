<!-- View massage -->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header box-header-background with-border">
                    <h3 class="box-title ">Agregar nuevo proveedor </h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form role="form" enctype="multipart/form-data" id="addSupplierForm"
                      action="<?php echo base_url(); ?>admin/purchase/save_supplier/<?php if (!empty($supplier->supplier_id)) {
                          echo $supplier->supplier_id;
                      } ?>"
                      method="post">

                    <div class="row">

                        <div class="col-md-8 col-sm-12 col-xs-12">

                            <div class="box-body">

                                <!-- /.Nombre de la empresa -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre de la empresa <span class="required">*</span></label>
                                    <input type="text" name="company_name" placeholder="Nombre de la empresa"
                                           value="<?php
                                           if (!empty($supplier->company_name)) {
                                               echo $supplier->company_name;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Nombre de la empresa -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre del proveedor <span class="required">*</span></label>
                                    <input type="text" name="supplier_name" placeholder="Nombre del proveedor"
                                           value="<?php
                                           if (!empty($supplier->supplier_name)) {
                                               echo $supplier->supplier_name;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Email de la empresa -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email <span
                                            class="required">*</span></label>
                                    <input type="text" placeholder="Email" name="email"
                                           value="<?php
                                           if (!empty($supplier->email)) {
                                               echo $supplier->email;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Phone -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Teléfono<span class="required"> *</span></label>
                                    <input type="text" placeholder="Teléfono" name="phone"
                                           value="<?php
                                           if (!empty($supplier->phone)) {
                                               echo $supplier->phone;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Address -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dirección <span class="required">*</span></label>
                                    <textarea name="address" class="form-control autogrow" rows="10" id="ck_editor"
                                              placeholder="Business Address" required><?php
                                        if (!empty($supplier->address)) {
                                            echo $supplier->address;
                                        }
                                        ?></textarea>
                                    <?php echo display_ckeditor($editor['ckeditor']); ?>
                                </div>



                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn bg-navy btn-flat" type="submit">Agregar proveedor
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col end -->
    </div>
    <!-- /.row -->
</section>
