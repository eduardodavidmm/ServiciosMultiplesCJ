                        <!-- sample modal content -->
                        <div class="modal fade" id="EduModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Aviso Disciplinario</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form method="post" action="Add_Education" id="educationmodal" enctype="multipart/form-data">
                                    <div class="modal-body">
			                                    <div class="form-group">
			                                        <label>Titulo</label>
			                                        <input type="text" name="name" class="form-control form-control-line" placeholder=" Titulo o Grado" minlength="2" required> 
			                                    </div>
			                                    <div class="form-group">
			                                        <label>Institución</label>
			                                        <input type="text" name="institute" class="form-control form-control-line" placeholder=" Institución" minlength="7" required> 
			                                    </div>
			                                    <div class="form-group">
			                                        <label>Resultado</label>
			                                        <input type="text" name="result" class="form-control form-control-line" placeholder=" Resultado" minlength="2" required> 
			                                    </div>
			                                    <div class="form-group">
			                                        <label>Año de Aprobación</label>
			                                        <input type="text" name="year" class="form-control form-control-line" placeholder="Año de Aprobación"> 
			                                    </div>                                        
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="emid" value=""> 
                                        <input type="hidden" name="id" value=""> 
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-success">Ingresar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>                        
                        <!-- sample modal content -->
                        <div class="modal fade" id="ExpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Modal de Experiencia</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form method="post" action="Add_Experience" id="experiencemodal" enctype="multipart/form-data">
                                    <div class="modal-body">
			                                    	<div class="form-group">
			                                    	    <label>Nombre de Empresa</label>
			                                    	    <input type="text" name="company_name" class="form-control form-control-line company_name" placeholder="Nombre de Empresa" minlength="2" required> 
			                                    	</div>
			                                    	<div class="form-group">
			                                    	    <label>Posición</label>
			                                    	    <input type="text" name="position_name" class="form-control form-control-line position_name" placeholder="Posición" minlength="3" required> 
			                                    	</div>
			                                    	<div class="form-group">
			                                    	    <label>Dirección</label>
			                                    	    <input type="text" name="address" class="form-control form-control-line duty" placeholder=" Dirección" minlength="7" required> 
			                                    	</div>
			                                    	<div class="form-group">
			                                    	    <label>Años de Servicio</label>
			                                    	    <input type="text" name="work_duration" class="form-control form-control-line working_period" placeholder="Años de Servicio" required> 
			                                    	</div>                                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="emid" value=""> 
                                        <input type="hidden" name="id" value=""> 
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-success">Ingresar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>