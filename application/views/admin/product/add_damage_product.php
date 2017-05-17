<link href="<?php echo base_url(); ?>asset/css/select2.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>asset/js/select2.js"></script>

<!-- View massage -->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header box-header-background with-border">
                    <h3 class="box-title ">Añadir producto dañado</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form role="form" enctype="multipart/form-data" id="damageProductForm"
                      action="<?php echo base_url(); ?>admin/product/save_damage_product"
                      method="post">

                    <div class="row">

                        <div class="col-md-6 col-sm-12">

                            <div class="box-body">

                                <!-- /.product -->
                                <div class="form-group">
                                    <label>Seleccione Producto<span class="required">*</span></label>
                                    <select id="e2" style="width: 100%;" name="product_id" required>
                                        <option value="">Seleccione Producto</option>
                                        <?php if (!empty($product)): ?>
                                            <?php foreach ($product as $v_product) : ?>
                                                <option value="<?php echo $v_product->product_id; ?>">
                                                    <?php echo $v_product->product_code . '-' . $v_product->product_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </select>
                                </div>

                                <!-- /.damage qty -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cantidad dañada <span class="required">*</span></label>
                                    <input type="text" name="qty" placeholder="Cantidad dañada" class="form-control">
                                </div>

                                <!-- /.note -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Notas</label>
                                    <textarea name="note" class="form-control autogrow"
                                              placeholder="Notas"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Disminución de stock</label>
                                    <select name="decrease" class="form-control">
                                        <option value="">Disminución de stock?</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>



                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn bg-navy btn-flat" type="submit">Añadir producto dañado
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

<script>
    $(document).ready(function() {
        $("#e2").select2({
            placeholder: "Select a State",
            allowClear: true
        });
    });
</script>