<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('h1', 'Registrar Investigadores'); ?>


	<div class="form-horizontal">
		<?php echo Form::open(['route' => 'investigadores.store', 'method' => 'POST']); ?>


		<div class="form-group">
			
			<?php echo Form::label('nombre', 'Nombre', ['class' => 'control-label col-xs-3']); ?>

			<?php echo Form::text('nombre', null, ['class' => 'col-sm-5', 'required']); ?>

		</div>

		<div class="form-group">
			
			<?php echo Form::label('apellido', 'Apellido', ['class' => 'control-label col-xs-3']); ?>

			<?php echo Form::text('apellido', null, ['class' => 'col-sm-5','required']); ?>

		</div>

		<div class="form-group">
			
			<?php echo Form::label('cedula', 'Cedula', ['class' => 'control-label col-xs-3']); ?>

			<?php echo Form::text('cedula', null, ['class' => 'col-sm-5','required']); ?>

		</div>

		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<label class="radio-inline">
					<b><?php echo e('Sexo'); ?></b><br>
					<input type="radio" name="sexo" value= "femenino" checked>Femenino<br>
					<input type="radio" name="sexo" value= "masculino" checked>Masculino<br>
				</label>
			</div>
		</div>

		<div class="form-group">
			
			<?php echo Form::label('correo', 'Correo', ['class' => 'control-label col-xs-3']); ?>

			<?php echo Form::email('correo', null, ['class' => 'col-sm-5','required']); ?>

		</div>

		<div class="form-group">
			
			<?php echo Form::label('telefono', 'Telefono', ['class' => 'control-label col-xs-3']); ?>

			<?php echo Form::text('telefono', null, ['class' => 'col-sm-5','required']); ?>

		</div>

		<div class="form-group">
			
				<select class="col-xs-offset-3" name="linea">
					<option>Seleccione la linea de investigacion</option>
					<?php $__currentLoopData = $lineas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($linea->id); ?>"><?php echo e($linea->denominacion); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			
		</div>

		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<label class="radio-inline">
					
					<b><?php echo e('Seleccione el tipo de investigador'); ?></b><br>
					<?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<input type="radio" name="tipo_id" value= <?php echo $tipo['tipo_id']; ?> checked><?php echo e($tipo['tipo_investigador']); ?><br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</label>
			</div>
		</div>

		<?php echo e(Form::hidden('fecha_registro_investigador', $fecha_registro_investigador = date("Y-m-d"))); ?>                       
		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<?php echo Form::submit('Registrar', ['class' => 'btn btn-success btn-flat']); ?>

			</div>
			
		</div>
	<?php echo Form::close(); ?>

	</div>

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.plantilla.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>