@extends('layout.headerfooter', ['title' => 'Sign In'])

@section('main-content')
<link rel="stylesheet" href="assets/css/signin.css">
<div class="signin-page">
  <div class="signin-card">
    <!-- LEFT: Form panel -->
    <div class="left-panel2" data-aos="fade-right" data-aos-duration="900" data-aos-easing="ease-out-cubic">
      <div class="panel-inner">
        <div class="right-inner">
          <div class="top-row">
            <div class="brand" data-aos="fade-down" data-aos-duration="600">THAlI</div>
            <div class="lang" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">EN ▾</div>
          </div>
          
          <h1 class="greet mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Welcome back.</h1>
          <p class="sub mb-4" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Sign in to continue</p>

          <form method="POST" action="{{ route('login') }}" class="signup-form" data-aos="fade-up" data-aos-duration="900" data-aos-delay="350">
            @csrf

            @if(session('status'))
              <div class="errors" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
                <ul><li>{{ session('status') }}</li></ul>
              </div>
            @endif

            @if($errors->any())
              <div class="errors" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="450">
                <ul>
                  @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="500">
              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="600">
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="small-row gap-2" data-aos="fade-up" data-aos-duration="700" data-aos-delay="700">
              <label class="terms">
                <input type="checkbox" name="remember"> Remember me
              </label>
              <!-- <a href="{{ route('password.request') }}" class="link">Forgot password?</a> -->
              <a href="{{ route('signup') }}" class="link">Create an account</a>
            </div>

            <button type="submit" class="btn signup-btn" data-aos="flip-up" data-aos-duration="800" data-aos-delay="800">Sign in</button>
          </form>
        </div>
      </div>
    </div>

    <!-- RIGHT: Carousel panel -->
    <div class="right-panel" data-aos="fade-down" data-aos-duration="900" data-aos-delay="200">
      <div class="panel-inner">
        <div class="carousel" aria-hidden="false">
          <div class="slide" style="background-image:url('assets/images/thali.png');border: radius 20px;" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
          <div class="slide" style="background-image:url('assets/images/thali.png');border: radius 20px;" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500"></div>
          <div class="slide" style="background-image:url('assets/images/thali.png');border: radius 20px;" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700"></div>
        </div>

        <!-- <div class="left-bottom">
          <div class="author">
            <img src="/assets/images/raman.png" alt="avatar">
            <div class="meta">
              <div class="name">Raman.ui</div>
              <div class="role">UI & Illustration</div>
            </div>
          </div>

          <div class="controls">
            <button class="ctrl prev" type="button">&lt;</button>
            <button class="ctrl next" type="button">&gt;</button>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
(function(){
  const slides = document.querySelectorAll('.signin-page .slide');
  let idx = 0;
  function show(i){
    slides.forEach((s,si)=> s.style.opacity = si===i ? '1' : '0');
  }
  const prev = document.querySelector('.signin-page .prev');
  const next = document.querySelector('.signin-page .next');
  if(prev) prev.addEventListener('click', ()=> { idx = (idx-1+slides.length)%slides.length; show(idx); });
  if(next) next.addEventListener('click', ()=> { idx = (idx+1)%slides.length; show(idx); });
  setInterval(()=> { idx = (idx+1)%slides.length; show(idx); }, 5000);
  show(0);
})();

// Initialize AOS (override global defaults for this page)
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
@endsection