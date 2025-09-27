@extends('layout.headerfooter', ['title' => 'Sign Up'])

@section('main-content')

<link rel="stylesheet" href="/assets/css/signup.css" />
<div class="signup-page">
  <div class="signup-card">
    <div class="left-panel2" data-aos="fade-right" data-aos-duration="900" data-aos-easing="ease-out-cubic">
      <div class="panel-inner">
        

        <div class="carousel" aria-hidden="false">
          <div class="slide" style="background-image:url('assets/images/thali.png')" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
          <div class="slide" style="background-image:url('assets/images/thali.png')" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500"></div>
          <div class="slide" style="background-image:url('assets/images/thali.png')" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700"></div>
        </div>

        <div class="left-bottom" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
          <div class="author">
            <img src="/assets/images/raman.png" alt="avatar">
            <div class="meta">
              <div class="name">Raman.ui</div>
              <div class="role">UI & Illustration</div>
            </div>
          </div>

          <div class="controls">
            <button class="ctrl prev" data-aos="fade-right" data-aos-duration="600" type="button">&lt;</button>
            <button class="ctrl next" data-aos="fade-left" data-aos-duration="600" type="button">&gt;</button>
          </div>
        </div>
      </div>
    </div>

    <div class="right-panel d-flex justify-content-center align-item-center" data-aos="fade-left" data-aos-duration="900" data-aos-easing="ease-out-cubic" data-aos-delay="200">
      <div class="right-inner">
        <div class="top-row">
          <div class="brand" data-aos="fade-down" data-aos-duration="600">THAlI</div>
          <div class="lang" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">EN ▾</div>
        </div>

        <h1 class="greet mb-5 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Hi DESIGNER.</h1>
        <p class="sub" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Create your account to get started</p>

        <form method="POST" action="{{ route('register.post') }}" class="signup-form " data-aos="fade-up" data-aos-duration="900" data-aos-delay="350">
          @csrf

          @if($errors->any())
            <div class="errors" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
              <ul>
                @foreach($errors->all() as $err)
                  <li>{{ $err }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="450">
            <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="500">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="550">
            <input type="password" name="password" placeholder="Password" required>
          </div>

          <div class="field" data-aos="zoom-in" data-aos-duration="650" data-aos-delay="600">
            <input type="password" name="password_confirmation" placeholder="Confirm password" required>
          </div>

          <div class="small-row gap-2" data-aos="fade-up" data-aos-duration="700" data-aos-delay="700">
            <label class="terms">
              <input type="checkbox" name="terms" required> I agree to the terms
            </label>
            <a href="signin" class="link" data-aos="fade-up" data-aos-duration="600" data-aos-delay="750"> Already have account? Login</a>
          </div>

          <button type="submit" class="btn signup-btn" data-aos="flip-up" data-aos-duration="800" data-aos-delay="800">Sign up</button>

          
        </form>
      </div>
    </div>
  </div>
</div>

<script>
(function(){
  const slides = document.querySelectorAll('.signup-page .slide');
  let idx = 0;
  function show(i){
    slides.forEach((s,si)=> s.style.opacity = si===i ? '1' : '0');
  }
  const prev = document.querySelector('.signup-page .prev');
  const next = document.querySelector('.signup-page .next');
  if(prev) prev.addEventListener('click', ()=> { idx = (idx-1+slides.length)%slides.length; show(idx); });
  if(next) next.addEventListener('click', ()=> { idx = (idx+1)%slides.length; show(idx); });
  setInterval(()=> { idx = (idx+1)%slides.length; show(idx); }, 5000);
  show(0);
})();

// Initialize AOS for this page
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