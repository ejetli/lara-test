<?php $__env->startSection('title', '| Ceate New Post'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			<form name="ceate" action="/posts"  method="post">
                <?php echo e(csrf_field()); ?>

				<div class="form-group">
					<label for="title">Titel</label>
					<input type="text" name="title" required id="title" class="form-control" placeholder="Titel">
				</div>

				<div class="form-group">
					<label for="order">Order</label>
					<input type="text" name="order" required id="order" class="form-control" placeholder="Order">
				</div>

				<label for="category_id">Category</label>
					<select class="custom-select" name="category_id" id="category_id" required>
					    <!-- <option selected>Category</option> -->
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					</select>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" required class="form-control" rows="5" placeholder="Content"></textarea>
				</div>

				<div class="form-group">
					<label for="status">Status</label>
						<select class="custom-select" name="status" id="status" required>
						  <!-- <option selected>Status</option> -->
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option value="3">Three</option>
						</select>
				</div>	
				
				<br>
				
				<input class="btn btn-success btn-lg btn-block" type="submit" value="Create post">
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>