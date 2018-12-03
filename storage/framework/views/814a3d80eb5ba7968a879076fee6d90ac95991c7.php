<?php $__env->startSection('title', '| Edit Blog Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	

	<div class="row">
		<div class="col-md-8">	
			<?php echo Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']); ?>

				<div class="col-md-8">
					<?php echo e(Form::label('title', 'Title:')); ?>

					<?php echo e(Form::text('title', null, ["class" => 'form-control input-lg'])); ?>

					
					<?php echo e(Form::label('order', 'Order:')); ?>

					<?php echo e(Form::text('order', null, ["class" => 'form-control input-lg'])); ?>

					
					<?php echo e(Form::label('category', 'Category:')); ?>

					<?php echo e(Form::text('category_id', null, ["class" => 'form-control input-lg'])); ?>


					<?php echo e(Form::label('content', 'Content:')); ?>

					<?php echo e(Form::text('content', null, ["class" => 'form-control input-lg'])); ?>


					<?php echo e(Form::label('status', 'Status:')); ?>

					<?php echo e(Form::text('status', null, ["class" => 'form-control input-lg'])); ?>

					
					<br>

					<?php echo Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger')); ?>

					<!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
					<!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
					<?php echo e(Form::submit('Save Changes', ['class' => 'btn btn-success'])); ?>

					
				</div>
		</div>		
	</div>

	<br>
	<div class="row">
		<div class="col-md-5">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd><?php echo e(date('M j, Y h:ia', strtotime($post->created_at))); ?></dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd><?php echo e(date('M j, Y h:ia', strtotime($post->updated_at))); ?></dd>
				</dl>
				<hr>
				
			</div>
		</div>
	</div>	
		<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>