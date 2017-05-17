
<!-- View massage -->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Crear nueva campaña de correo electrónico</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form role="form" enctype="multipart/form-data" id="addCustomerForm"
                      action="<?php echo base_url(); ?>admin/campaign/save_campaign/<?php if(!empty($campaign)){
                          echo $campaign->campaign_id;
                      }?>"
                      method="post">

                    <div class="row">

                        <div class="col-md-10 col-sm-12 col-xs-12">

                            <div class="box-body">



                                <!-- /.Nombre de la campaña -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre de la campaña <span class="required">*</span></label>
                                    <input type="text" name="campaign_name" placeholder="Nombre de la campaña" required
                                            value="<?php if(!empty($campaign)) echo $campaign->campaign_name ?>"
                                           class="form-control">
                                </div>

                                <!-- /.Email de la empresa -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Asunto del Email <span
                                            class="required">*</span></label>
                                    <input type="text" placeholder="Asunto del email" name="subject" required
                                           value="<?php if(!empty($campaign)) echo $campaign->subject ?>"
                                           class="form-control">
                                </div>



                                <!-- /.Address -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cuerpo del email<span class="required">*</span></label>
                                    <textarea name="email_body" class="form-control autogrow" required>
                                        <?php if(!empty($campaign)) echo $campaign->email_body ?>
                                    </textarea>

                                </div>


                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>



                    <div class="box-footer">
                        <button type="submit" id="customer_btn" class="btn bg-navy btn-flat" type="submit">Crear Campaña
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



<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        width: 890,
        height: 500,
        relative_urls: false,
        remove_script_host: false,

        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
        ],

        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        external_filemanager_path:"<?php echo base_url() ?>filemanager/",
        filemanager_title:"File Manager " ,
        external_plugins: { "filemanager" : "<?php echo base_url() ?>filemanager/plugin.min.js"}



    });
</script>
