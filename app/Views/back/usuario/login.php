<br>
<br>
<?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                  <?= session()->getFlashdata('msg')?>
            </div>
<?php endif;?>

<div align="center">
	<h1>Login de Usuario</h1><br>
<div class="registro" align="center">
<div class="border border-3 border-primary">

<form method="post" action="<?php echo base_url('/enviarlogin') ?>">

  <div class="mb-3">
    <label for="correo" class="form-label">Correo electrónico</label>
    <input type="email" class="form-control" name="email">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
  </div>

 
  <div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="pass">
  </div>
  
  <input type="submit" value="Ingresar" class="btn btn-success">
  <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
  <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>"> Registrarse aquí </a></span>
  
</form>

	
</div>

</div>

</div>
<br>
<br>