<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
      <div class="page-wrapper">
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-cogs"></i> Configuración</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Configuración</li>
                    </ol>
                </div>
            </div>
           <?php echo validation_errors(); ?>
           <?php echo $this->upload->display_errors(); ?>
           <?php echo $this->session->flashdata('formdata'); ?>
           <?php echo $this->session->flashdata('feedback'); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Configuración  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table_body">
                                    <form action="Add_Settings" id="fileUploadForm"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                        <div class="form-group clearfix">
                                            <label for="" class="col-md-3">Logo del Sitio</label>
                                            <div class="col-md-9">
                                                <div class="file_prev inb">
                                                <?php if($settingsvalue->sitelogo){ ?>
                                                    <img src="<?php echo base_url(); ?>assets/images/<?php echo $settingsvalue->sitelogo; ?>" height="100" width="167">
                                                    <?php } else { ?>
                                                    <img src="<?php echo base_url(); ?>assets/img/ci-logo.png" height="100" width="167">
                                                <?php } ?>
                                                </div>
                                                <label for="img_url" class="custom-file-upload"><i class="fa fa-camera" aria-hidden="true"></i> Añadir Logo</label>
                                                <input type="file" value="" class="" id="img_url" name="img_url" aria-describedby="fileHelp">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="title" class="col-md-3">Titulo de la Página</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="title" value="<?php echo $settingsvalue->sitetitle; ?>" id="title" placeholder="Titulo..." required minlength="7" maxlength="120">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="description" class="col-md-3">Descripción</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="description" value="<?php echo $settingsvalue->description; ?>" name="description" rows="6" required minlength="20" maxlength="512"><?php echo $settingsvalue->description; ?></textarea>
                                            </div>                                        
                                        </div>                                                                
                                        <div class="form-group clearfix">
                                            <label for="copyright" class="col-md-3">Copyright</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="copyright" value="<?php echo $settingsvalue->copyright; ?>" id="copyright" placeholder="copyright...">
                                            </div>
                                        </div>                                
                                        <div class="form-group clearfix">
                                            <label for="contact" class="col-md-3">Contacto</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="contact" value="<?php echo $settingsvalue->contact; ?>" id="contacto" placeholder="contact...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="currency" class="col-md-3">Moneda</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="currency" value="<?php echo $settingsvalue->currency; ?>" id="currency" placeholder="moneda...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="currency" class="col-md-3">Simbolo</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="symbol" value="<?php echo $settingsvalue->symbol; ?>" id="symbol" placeholder="simbolo...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="email" class="col-md-3">Email del Sistema</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $settingsvalue->system_email; ?>" placeholder="email...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="address" class="col-md-3">Dirección</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="address" id="address" value="<?php echo $settingsvalue->address; ?>" placeholder="direccion...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="address" class="col-md-3">dirección 2</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="address2" id="address2" value="<?php echo $settingsvalue->address2; ?>" placeholder="direccion more...">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="hidden" name="id" value="<?php echo $settingsvalue->id; ?>"/>
                                                <button type="submit" name="submit" id="btnSubmit" class="btn btn-success">Ingresar</button>
                                                <span class="flashmessage"><?php echo $this->session->flashdata('feedback'); ?></span>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php $this->load->view('backend/footer'); ?>