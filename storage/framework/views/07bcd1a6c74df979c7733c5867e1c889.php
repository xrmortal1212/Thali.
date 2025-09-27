

<?php $__env->startSection('main-content'); ?>
<div style="padding:40px; max-width:540px; margin:40px auto; background:#fff; border-radius:8px;">
  <h4>Set New Password</h4>
  <form method="POST" action="<?php echo e(route('password.update')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="token" value="<?php echo e($token); ?>">
    <div class="mb-3"><input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required class="form-control" /></div>
    <div class="mb-3"><input type="password" name="password" placeholder="New password" required class="form-control" /></div>
    <div class="mb-3"><input type="password" name="password_confirmation" placeholder="Confirm password" required class="form-control" /></div>
    <button class="btn btn-primary">Reset Password</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.headerfooter', ['title' => 'Set New Password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rimsha\Downloads\Thali\resources\views\passwords\reset.blade.php ENDPATH**/ ?>