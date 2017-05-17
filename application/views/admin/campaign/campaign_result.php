<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->


<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Enviar lista de campaña</h3>
                </div>


                <div class="box-body">

                        <!-- Table -->
                        <table class="table table-bordered table-striped datatable-buttons" id="dataTables">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active">Sl</th>
                                <th class="active">Nombre de la campaña</th>
                                <th class="active">Asunto del email</th>
                                <th class="active">Fecha de envio</th>
                                <th class="active ">Enviado por</th>

                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($campaign_result)): foreach ($campaign_result as $v_result) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td"><?php echo $v_result->campaign_name ?></td>
                                    <td class="vertical-td"><?php echo $v_result->subject ?></td>
                                    <td class="vertical-td"><?php echo $this->localization->dateFormat($v_result->date ) ?></td>
                                    <td class="vertical-td"><?php echo $v_result->send_by ?></td>


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

<!--<script src="--><?php //echo base_url(); ?><!--asset/js/ajax.js" type="text/javascript" charset="utf-8"></script>-->


