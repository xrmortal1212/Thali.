

<?php $__env->startSection('main-content'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <div class="chat-btn" ><a class="text-white" href=" https://wa.me/03103371549"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
  <div class="container-fluid contactUs">
    <div class="row gx-4 gy-4">

    <!-- LEFT PANEL -->
    <div class="col-12 col-lg-7 left-panel d-flex flex-column justify-content-between p-4" data-aos="fade-right">
      <div>
      
      <div class="d-flex align-items-center mb-4">
        <img src="assets/images/raman-bg.png" class="guide-avatar me-3" alt="Raman">
        <div class="me-Raman">
        <div class="fw-bold">
          <h4>Raman Mukesh -</h4>
        </div>
        <h5 class="text-muted">Project Coordinator,<br> can guide your project's initial steps.</h5>
        </div>
      </div>

      <div class="d-flex gap-2 mb-4">        
        <button type="submit" class="btn btn-outline-dark px-3 w-20">Send Message</button>
      </div>

      <div class="e-p">
        <h1 class="mb-3">Every project<br><span class="text-dark">starts with a plan.</span></h1>
        <p>Tell us about your idea<br> and team size — we'll recommend the best<br> next steps and
        resources.
        </p>
      </div>
      </div>


    </div>

    <!-- RIGHT PANEL -->
    <aside class="col-12 col-lg-5 right-panel text-light p-4" data-aos="fade-left">
      <h2><span class="gradient-text">What services</span><br>we can support you with?</h2>
      <p class="mt-3">I'm interested in</p>

      <div class="btns mb-4">
      <button type="button">UI/UX Design</button>
      <button type="button">Website</button>
      <button type="button">Brand Identity</button>
      <button type="button">Illustration</button>
      <button type="button">Other</button>
      </div>

      <form action="https://api.web3forms.com/submit" method="POST" class="contact-form" novalidate>
      <input type="hidden" name="access_key" value="a48d47ed-b77f-42e5-ba09-d3e9930c368a">

      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" value="raman2409e@aptechgdn.net" placeholder="E-mail" required>
      <input type="text" name="phone" placeholder="Phone">
      <textarea name="message" rows="4" placeholder="Message" required></textarea>

      <button type="submit" class="signup-btn">Submit</button>
      </form>
    </aside>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>AOS.init({ duration: 700, easing: 'ease-in-out', once: true });</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mhf', ['title' => 'Contact Us'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rimsha\Downloads\Thali\resources\views\m-contact.blade.php ENDPATH**/ ?>