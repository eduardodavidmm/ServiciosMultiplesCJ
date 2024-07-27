
<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
         <div class="page-wrapper">
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-university" aria-hidden="true"></i> Factura</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-university" aria-hidden="true"></i> Factura</li>
                    </ol>
                </div>
            </div>
            <style type="text/css">
                table.table.table-hover thead{
                    background-color: #e8e8e8;
                }
            </style>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
<!--                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#TypeModal" data-whatever="@getbootstrap" class="text-white TypeModal"><i class="" aria-hidden="true"></i> Add Payroll </a></button>-->
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>Payroll/Salary_List" class="text-white"><i class="" aria-hidden="true"></i>  Back</a></button>
                        <button type="button" class="btn btn-primary print_payslip_btn"><i class="fa fa-print"></i><i class="" aria-hidden="true" onclick="printDiv()"></i>  Print</button>
                    </div>
                </div> 

                <div class="row payslip_print" id="payslip_print">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    <img src="<?php echo base_url();?>assets/images/hrinv.png" style=" width:180px; margin-right: 10px;" />
                                </div>
                                <div class="col-md-8 col-xs-6 col-sm-6 text-left payslip_address">
                                    <p>
                                        <?php echo $settingsvalue->address; ?>
                                    </p>
                                    <p>
                                        <?php echo $settingsvalue->address2; ?>
                                    </p>
                                    <p>
                                        Teléfono: <?php echo $settingsvalue->contact; ?>, Correo: <?php echo $settingsvalue->system_email; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <h5 style="margin-top: 15px;">Factura de pago para el periodo de: <?php echo $salary_info->month.' '.$salary_info->year ?></h5>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-md-12"><!-- 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php $obj_merged = (object) array_merge((array) $employee_info, (array) $salaryvaluebyid, (array) $salarypaybyid, (array) $salaryvalue, (array) $loanvaluebyid); print_r($obj_merged); ?>
                                            <?php print_r($otherInfo[0]); ?>
                                        </div>
                                    </div> -->
                                    <table class="table table-condensed borderless payslip_info">
                                        <tr>
                                            <td>PIN de Empleado</td>
                                            <td>: <?php echo $obj_merged->em_code; ?></td>
                                            <td>Nombre</td>
                                            <td>: <?php echo $obj_merged->first_name; ?> <?php  echo $obj_merged->last_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Departamento</td>
                                            <td>: <?php echo $otherInfo[0]->dep_name; ?></td>
                                            <td>Asignación</td>
                                            <td>: <?php echo $otherInfo[0]->name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Fecha de Pago</td>
                                            <td>: <?php echo date('j F Y',strtotime($salary_info->paid_date)); ?></td>
                                            <td>Fecha de Contratación</td>
                                            <td>: <?php echo $obj_merged->em_joining_date; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Días Trabajados</td>
                                            <td>: 
                                                <?php
                                                   $days = ceil($salary_info->total_days / 8);
                                                   echo $days;
                                                ?>
                                            </td>
                                            <?php if(!empty($bankinfo->bank_name)){ ?>
                                            <td>Nombre del Banco</td>
                                            <td>: <?php echo $bankinfo->bank_name; ?></td>
                                            <?php } else { ?>
                                            <td>Tipo de Pago</td>
                                            <td>: <?php echo 'Hand Cash'; ?></td>
                                            <?php } ?>
                                        </tr>
                                        <?php if(!empty($bankinfo->bank_name)){ ?>
                                        <tr>
                                            <td>Cuenta</td>
                                            <td>: <?php echo $bankinfo->holder_name; ?></td>
                                            <td>Numero de Cuenta</td>
                                            <td>: <?php echo $bankinfo->account_number; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <style>
                                .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td { padding: 2px 5px; }
                            </style>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-condensed borderless" style="border-left: 1px solid #ececec;">
                                        <thead class="thead-light" style="border: 1px solid #ececec;">
                                            <tr>
                                                <th>Description</th>
                                                <th class="text-right">Pago</th>
                                                <th class="text-right">Deducciones</th>
                                            </tr>
                                        </thead>
                                        <tbody style="border: 1px solid #ececec;">
                                            <tr>
                                                <td>Salario Base</td>
                                                <td class="text-right"><?php echo $addition[0]->basic; ?> LPS</td>
                                                <td class="text-right">  </td>
                                            </tr>
                                            <tr>
                                                <td>Seguro Médico</td>
                                                <td class="text-right"> <?php echo $addition[0]->medical; ?>  LPS</td>
                                                <td class="text-right">  </td>
                                            </tr>
                                            <tr>
                                                <td>Renta</td>
                                                <td class="text-right"><?php echo $addition[0]->house_rent; ?>  LPS</td>
                                                <td class="text-right">  </td>
                                            </tr>
                                            <tr>
                                                <td>Otro Impuesto</td>
                                                <td class="text-right"><?php echo $addition[0]->conveyance; ?>  LPS</td>
                                                <td class="text-right">  </td>
                                            </tr>
                                            <tr>
                                                <td>Bono</td>
                                                <td class="text-right"><?php echo $salary_info->bonus; ?></td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Préstamo</td>
                                                <td class="text-right"> </td>
                                                <td class="text-right"><?php if(!empty($salary_info->loan)) {
                                                    echo $salary_info->loan . " LPS";
                                                } ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Horas Trabajadas (<?php echo $salary_info->total_days; ?> hrs)</td>
                                                <td class="text-right">
                                                    <?php
                                                        if($a > 0) { echo round($a,2).' LPS'; }
                                                    ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php
                                                        if($d > 0) { echo round($d,2).' LPS'; }
                                                    ?>        
                                                </td>
                                                <td class="text-right"> </td>
                                            </tr>
                                            <!--<tr>
                                                <td>Without Pay( <?php echo $work_h_diff ?> hrs)</td>
                                                <td class="text-right"> </td>
                                                <td class="text-right"> <?php
                                                        /*if($d > 0) { echo round($d,2).' LPS'; }*/
                                                        echo $salary_info->diduction .'LPS';
                                                    ?> </td>
                                                
                                            </tr>-->
                                            <tr>
                                                <td>Impuesto</td>
                                                <td class="text-right"> </td>
                                                <td class="text-right"> </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="tfoot-light">
                                            <tr>
                                                <th>Total</th>
                                                <th class="text-right"><?php $total_add = $salary_info->basic + $salary_info->medical + $salary_info->house_rent + $salary_info->bonus+$a; echo round($total_add,2); ?> LPS</th>
                                                <th class="text-right"><?php $total_did = $salary_info->loan+$salary_info->diduction; echo round($total_did,2); ?> LPS</th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th class="text-right">Pago Neto</th>
                                                <th class="text-right"><?php echo $salary_info->total_pay/*round($total_add - $total_did,2)*/; ?> LPS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div><!-- 
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-md-6">
                                    _____________________________________
                                    <br>
                                    Employer's Signature
                                </div>
                                <div class="col-md-6 text-right">
                                    _____________________________________
                                    <br>
                                    Employee's Signature
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="card card-body printableArea">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left " style="height:80px;margin-left:10px;">
                                        <img src="<?php echo base_url();?>assets/images/dri_Logo.png" style="position:absolute; top:0; left:0;width:250px;margin-left:15px;" />
                                    </div>
                                    <div class="pull-right">
                                        <h4 class="pull-right">Pay Slip for the period of <?php echo $salary_info->month;?> 2018</h4>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <p class="text-muted m-l-5">Employee PIN: <?php echo $employee_info->em_code;?>
                                                <br/> Department:  <?php echo $employee_info->dep_name;?>
                                                <br/> Payment Date: <?php echo $salary_info->paid_date;?></p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <p class="text-muted m-l-30">Employee Name:  <?php echo $employee_info->first_name .' '. $employee_info->last_name;?>
                                                <br/> Designation:   <?php echo $employee_info->des_name;?>
                                                <br/> Month:  <?php echo $salary_info->month;?></p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th class="text-right">Earning</th>
                                                    <th class="text-right">Deduction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Basic Salary</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->basic;?> LPS</td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>Madical</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->medical;?> LPS </td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>House Rent</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->house_rent;?> LPS </td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>Conveyance</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->conveyance;?> LPS </td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>Loan</td>
                                                    <td class="text-right"> </td>
                                                    <td class="text-right"><?php echo $salary_info->loan;?>  LPS</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th class="text-right"><?php echo $salaryvaluebyid->total;?> LPS</th>
                                                    <th class="text-right"><?php echo $salary_info->diduction;?>  LPS</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <h3><b>Total :</b>  <?php echo $salary_info->total_pay;?> LPS</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="modal fade" id="Salarymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">Formulario de Salario</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form method="post" action="Add_Salary" id="salaryform" enctype="multipart/form-data">
                            <div class="modal-body">
                                    <!--   <div class="form-group">
                                        <label>Salary Type</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="typeid" required>
                                            <?php #foreach($typevalue as $value): ?>
                                            <option value="<?php #echo $value->id ?>"><?php #echo $value->salary_type; ?></option>
                                            <?php #endforeach; ?>
                                        </select>
                                    </div> -->                                        
                                    <div class="form-group">
                                        <label class="control-label">ID de Empleado</label>
                                        <input type="text" name="emid" class="form-control" id="recipient-name1" value="" readonly>
                                    </div>                                         
                                    <div class="form-group">
                                        <label class="control-label">Base</label>
                                        <input type="text" name="basic" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <h4>Addition</h4>                                         
                                    <div class="form-group">
                                        <label class="control-label">Medico</label>
                                        <input type="text" name="medical" class="form-control" id="recipient-name1"  value="">
                                    </div>                                         
                                    <div class="form-group">
                                        <label class="control-label">Renta</label>
                                        <input type="text" name="houserent" class="form-control" id="recipient-name1" value="">
                                    </div>                                         
                                    <div class="form-group">
                                        <label class="control-label">Bonos</label>
                                        <input type="text" name="bonus" class="form-control" id="recipient-name1" value="">
                                    </div>
                                    <h4>Deduction</h4>                                         
                                    <div class="form-group">
                                        <label class="control-label">Otros Fondos Deducibles</label>
                                        <input type="text" name="provident" class="form-control" id="recipient-name1" value="">
                                    </div>                                         
                                    <div class="form-group">
                                        <label class="control-label">Otros</label>
                                        <input type="text" name="bima" class="form-control" id="recipient-name1" value="" >
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Impuestos</label>
                                        <input type="text" name="tax" class="form-control" id="recipient-name1"  value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Añadidos</label>
                                        <input type="text" name="others" class="form-control" id="recipient-name1"  value="">
                                    </div>                                          
                                
                            </div>
                            <div class="modal-footer">                                       
                            <input type="hidden" name="sid" value="" class="form-control" id="recipient-name1">                                       
                            <input type="hidden" name="aid" value="" class="form-control" id="recipient-name1">                                       
                            <input type="hidden" name="did" value="" class="form-control" id="recipient-name1">                                       
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success">Ingresar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".SalarylistModal").click(function (e) {
            e.preventDefault(e);
            // Get the record's ID via attribute  
            var iid = $(this).attr('data-id');
            $('#salaryform').trigger("reset");
            $('#Salarymodel').modal('show');
            $.ajax({
                url: 'GetSallaryById?id=' + iid,
                method: 'GET',
                data: '',
                dataType: 'json',
            }).done(function (response) {
                console.log(response);
                // Populate the form fields with the data returned from server
                $('#salaryform').find('[name="sid"]').val(response.salaryvalue.id).end();
                $('#salaryform').find('[name="aid"]').val(response.salaryvalue.addi_id).end();
                $('#salaryform').find('[name="did"]').val(response.salaryvalue.de_id).end();
               /* $('#salaryform').find('[name="typeid"]').val(response.salaryvalue.type_id).end();*/
                $('#salaryform').find('[name="emid"]').val(response.salaryvalue.emp_id).end();
                $('#salaryform').find('[name="basic"]').val(response.salaryvalue.basic).end();
                $('#salaryform').find('[name="medical"]').val(response.salaryvalue.medical).end();
                $('#salaryform').find('[name="houserent"]').val(response.salaryvalue.house_rent).end();
                $('#salaryform').find('[name="bonus"]').val(response.salaryvalue.bonus).end();
                $('#salaryform').find('[name="provident"]').val(response.salaryvalue.provident_fund).end();
                $('#salaryform').find('[name="bima"]').val(response.salaryvalue.bima).end();
                $('#salaryform').find('[name="tax"]').val(response.salaryvalue.tax).end();
                $('#salaryform').find('[name="others"]').val(response.salaryvalue.others).end();
            });
        });
    });
</script>    
    <script src="<?php echo base_url(); ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".print_payslip_btn").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.payslip_print").printArea(options);
        });
    });
    </script>                          
<?php $this->load->view('backend/footer'); ?>