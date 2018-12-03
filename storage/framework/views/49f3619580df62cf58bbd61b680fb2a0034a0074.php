<?php $__env->startSection('title', '| Home'); ?>

<?php $__env->startSection('content'); ?>
    

    <div class="row">
        <div class="col-md-12">
            <p><h4 class="well">This is a test page. </h4>
                Click this link an see your 
                <a href="/posts">post</a>
            </p>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>