
<div align="center">
	<h1>Registro de Usuario</h1><br>
<div class="registro" align="center">


<div class="border border-3 border-primary">
<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
   <?=csrf_field();?>
   <?=csrf_field();?>
   <?php if (!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
   <?php endif?>
   <?php if(!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
   <?php endif?>
 <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text"  class="form-control" name="nombre">
    <!-- Error -->
    <?php if($validation->getError('nombre')) {?>
      <div class='alert alert-danger mt-2'>
         <?= $error = $validation->getError('nombre'); ?>
      </div>
   <?php }?>

 </div>

 <div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text"  class="form-control" name="apellido">
    <?php if($validation->getError('apellido')) {?>
      <div class='alert alert-danger mt-2'>
         <?= $error = $validation->getError('apellido'); ?>
      </div>
   <?php }?>
 </div>

 <div class="mb-3">
    <label for="correo" class="form-label">Correo electrónico</label>
    <input type="email" class="form-control" name="email">
    <?php if($validation->getError('email')) {?>
      <div class='alert alert-danger mt-2'>
         <?= $error = $validation->getError('email'); ?>
      </div>
   <?php }?>
  </div>

<div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text"  class="form-control" name="usuario">
    <?php if($validation->getError('usuario')) {?>
      <div class='alert alert-danger mt-2'>
         <?= $error = $validation->getError('usuario'); ?>
      </div>
   <?php }?>
 </div>


   <div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="pass">
    <?php if($validation->getError('pass')) {?>
      <div class='alert alert-danger mt-2'>
         <?= $error = $validation->getError('pass'); ?>
      </div>
   <?php }?>
  </div>
  
  <input type="submit" value="Guardar" class="btn btn-success">
  <input type="reset"  value="Cancelar" class="btn btn-danger">
</form>

	
</div>

</div>

</div>
<br>