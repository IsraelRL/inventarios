<!-- View massage -->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Agregar cliente</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form role="form" enctype="multipart/form-data" id="addCustomerForm"
                      action="<?php echo base_url(); ?>admin/customer/save_customer/<?php if (!empty($customer->customer_id)) {
                          echo $customer->customer_id;
                      } ?>"
                      method="post">

                    <div class="row">

                        <div class="col-md-8 col-sm-12 col-xs-12">

                            <div class="box-body">

                                <!-- /.customer Code -->
                                <?php if (!empty($customer->customer_code)) {?>
                                    <div class="form-group">
                                        <label>Id del cliente</label>
                                        <input type="text"
                                               value="<?php echo $customer->customer_code ?>"
                                               class="form-control" disabled>
                                    </div>
                                <?php }else { ?>

                                    <div class="form-group">
                                        <label>Id del cliente<span class="required">*</span></label>
                                        <input type="text"
                                               value="<?php echo $code ?>"
                                               class="form-control" disabled>
                                    </div>

                                <?php } ?>

                                <!-- /.Nombre del cliente -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre del cliente <span class="required">*</span></label>
                                    <input type="text" name="customer_name" placeholder="Nombre del cliente"
                                           value="<?php
                                           if (!empty($customer->customer_name)) {
                                               echo $customer->customer_name;
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
                                           if (!empty($customer->email)) {
                                               echo $customer->email;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Phone -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Teléfono</label>
                                    <input type="text" placeholder="Teléfono" name="phone" onchange="check_phone(this.value)"
                                           value="<?php
                                           if (!empty($customer->phone)) {
                                               echo $customer->phone;
                                           }
                                           ?>"
                                           class="form-control">
                                    <div style=" color: #E13300" id="phone_result"></div>
                                </div>

                                <!-- /.Discount -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descuento %</label>
                                    <input type="text" placeholder="Descuento" name="discount"
                                           value="<?php
                                           if (!empty($customer->discount)) {
                                               echo $customer->discount;
                                           }
                                           ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Address -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dirección <span class="required">*</span></label>
                                    <textarea name="address" class="form-control autogrow"
                                              placeholder="Dirección" rows="5"><?php
                                        if (!empty($customer->address)) {
                                            echo $customer->address;
                                        }
                                        ?></textarea>

                                </div>


                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>

                    <!-- customer code -->
                    <?php if (empty($customer->customer_code)) {?>
                        <input type="hidden" name="customer_code"
                               value="<?php echo $code ?>">
                    <?php }  ?>

                    <!-- Id del cliente -->
                    <input type="hidden" name="customer_id" value="<?php if (!empty($customer->customer_id)) {
                        echo $customer->customer_id;
                    } ?>" id="customer_id">

                    <div class="box-footer">
                        <button type="submit" id="customer_btn" class="btn bg-navy btn-flat" type="submit">Agregar cliente
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

<script src="<?php echo base_url() ?>asset/js/ajax.js" ></script>