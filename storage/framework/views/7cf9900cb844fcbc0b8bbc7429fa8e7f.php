
<?php $__env->startSection('main-content'); ?>
<div style="padding:40px; max-width:540px; margin:40px auto; background:#fff; border-radius:8px;">
  <h4>Reset Password</h4>
  <?php if(session('status')): ?> <div class="alert alert-success"><?php echo e(session('status')); ?></div> <?php endif; ?>
  <form method="POST" action="<?php echo e(route('password.email')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <input type="email" name="email" placeholder="Your email" value="<?php echo e(old('email')); ?>" required class="form-control" />
    </div>
    <button class="btn btn-primary">Send Reset Link</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.headerfooter', ['title' => 'Reset Password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rimsha\Downloads\Thali\resources\views\passwords\email.blade.php ENDPATH**/ ?>