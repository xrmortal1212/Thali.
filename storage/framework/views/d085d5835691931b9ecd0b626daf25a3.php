

<?php $__env->startSection('main-content'); ?>

<link rel="stylesheet" href="/assets/css/profile.css" />

<div class="profile-page">
  <div class="profile-card">

    <!-- LEFT PANEL -->
    <div class="left-panel2" data-aos="fade-right" data-aos-duration="900" data-aos-easing="ease-out-cubic">
      <div class="panel-inner">
        
        <!-- Profile Image -->
        <div class="profile-img-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
          <?php if(Auth::user()->profile_image): ?>
            <img src="<?php echo e(Auth::user()->profile_image
                        ? asset('uploads/profile_images/' . Auth::user()->profile_image)
                        : 'https://i.pinimg.com/736x/69/38/5f/69385f654f6fbfd44600c9ca7ba03ad0.jpg'); ?>" alt="Profile"
              class="profile-avatar">
          <?php else: ?>
            <img src="https://i.pinimg.com/736x/69/38/5f/69385f654f6fbfd44600c9ca7ba03ad0.jpg" alt="Default"
              class="profile-avatar">
          <?php endif; ?>
        </div>

        <div style="font-family: 'Surgena';" class="left-bottom" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
          <div class="author">            
            <div class="meta">
              <div class="name"><?php echo e(Auth::user()->name); ?></div>
              <div class="role">Thali Member</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-panel d-flex justify-content-center align-item-center"
      data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
      <div class="right-inner">
        <div class="top-row">
          <div class="brand" data-aos="fade-down" data-aos-duration="600">THAlI</div>
          <div class="lang" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">EN ▾</div>
        </div>

        <h1 class="greet mb-4 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">My Profile</h1>
        <p class="sub mb-4 text-center" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
          Update your personal details and password
        </p>

        <!-- Flash Messages -->
        <?php if(session('success')): ?>
          <div class="alert alert-success" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
            <?php echo e(session('success')); ?>

          </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
          <div class="errors" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($err); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Update Form -->
        <form method="POST" action="<?php echo e(route('profile.update')); ?>" enctype="multipart/form-data"
          class="profile-form" data-aos="fade-up" data-aos-duration="900" data-aos-delay="350">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="450">
            <input type="text" name="name" value="<?php echo e(old('name', Auth::user()->name)); ?>" placeholder="Full Name" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="500">
            <input type="email" name="email" value="<?php echo e(old('email', Auth::user()->email)); ?>" placeholder="Email Address" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="550">
            <input type="file" name="profile_image" class="file-input" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="600">
            <input type="password" name="password" placeholder="New Password" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="650">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
          </div>

          <button type="submit" class="btn profile-btn" data-aos="flip-up" data-aos-duration="800" data-aos-delay="700">
            Update Profile
          </button>
        </form>

        <!-- Logout -->
        <form method="POST" action="<?php echo e(route('logout')); ?>" class="mt-3">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn logout-btn w-100">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
  if(typeof AOS !== 'undefined'){
    AOS.init({
      once: true,
      duration: 800,
      easing: 'ease-out-quart',
      delay: 0
    });
  }
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mhf', ['title' => 'Profile'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rimsha\Downloads\Thali\resources\views\profile.blade.php ENDPATH**/ ?>