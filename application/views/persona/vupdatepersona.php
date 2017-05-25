<div class="row">
 <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo "Usuario :".$this->session->userdata('s_usuario');?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtNombre" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido Paterno</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtApPaterno" id="inputPassword3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido Materno</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtAPMaterno" id="inputPassword3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Correo</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtEmail" id="inputPassword3" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Actualizar</button>
              </div>
          </form>
              <br>
              <br>
             <form action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST" class="form-horizontal">
             <div class="box-header with-border">
              <h3 class="box-title">Eliminar Registros</h3>
            </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtIdPersona" id="inputPassword3" placeholder="">
                  </div>
                </div>
                <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Eliminar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>

</div>
