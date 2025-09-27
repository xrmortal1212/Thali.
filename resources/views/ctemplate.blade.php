@extends('layout.headerfooter', ['title' => 'Customizable Templates'])

@section('main-content')

  <link rel="stylesheet" href="/assets/css/template.css" />

  <div>
    <!-- Bootstrap Carousel -->
   <!-- Carousel -->
<div class="container-fluid d-flex justify-content-center align-items-center">
  <div id="animeCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-duration="1000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row g-0 align-items-center">
          <div class="col-12 col-md-5 p-4 text-light">
            <h6 class="mb-2">#1 Spotlight</h6>
            <h2>Jessica Theme</h2>
            <p>Jessica Theme is a free one page WordPress theme for business and portfolio websites.</p>
            <a href="https://github.com/themewagon/Jessica/archive/refs/tags/v1.0.0.zip" class="btn btn-pink me-2 mb-2">Download</a>
            <!-- Preview Button -->
            <button class="btn btn-dark me-2 mb-2 preview-btn"
              data-bs-toggle="modal"
              data-bs-target="#previewModal"
              data-url="https://themewagon.github.io/Jessica/">
              Preview
            </button>
          </div>
          <div class="col-12 col-md-7">
            <div class="carousel-img-container C-img">
              <img src="assets/images/jessica-slider.PNG"
                class="img-fluid w-100 h-100" alt="Pixova">
              <div class="carousel-img-overlay"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row g-0 align-items-center">
          <div class="col-12 col-md-5 p-4 text-light">
            <h6 class="mb-2">#2 Spotlight</h6>
            <h2>Furni</h2>
            <p>Furni is a modern and stylish furniture template for showcasing products online.</p>
            <a href="https://github.com/themewagon/furni/archive/refs/tags/v1.0.0.zip" class="btn btn-pink me-2 mb-2">Download</a>
            <!-- Preview Button -->
            <button class="btn btn-dark me-2 mb-2 preview-btn"
              data-bs-toggle="modal"
              data-bs-target="#previewModal"
              data-url="https://themewagon.github.io/furni/">
              Preview
            </button>
          </div>
          <div class="col-12 col-md-7">
            <div class="carousel-img-container">
              <img src="assets/images/furni.PNG"
                class="img-fluid w-100" alt="Furni">
              <div class="carousel-img-overlay"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#animeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#animeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>





    <!-- End Bootstrap Carousel -->

    <!-- ======================= MARQUEE ======================= -->

    <!-- <div class="highlight-row container mt-5 mb-5">
              <div class="highlight-track d-flex justify-content-center flex-wrap gap-4">        
                  <div class="highlight-card">
                    <div class="type-block">
                      <div class="type-top">BEST OF THE</div>
                      <div class="type-middle">FOUR</div>
                      <div class="type-bottom">BEST TEMPLATES</div>              
                    </div>
                  </div>

              </div>
            </div> -->
    <div class="container d-flex justify-content-center align-item-center mt-2 mb-2" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-12">
          <div class="fr">FOUR</div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="bt">BEST</div>
        </div>
      </div>
    </div>


    <!-- ======================= MARQUEE Cards (4 distinct cards; will be duplicated by JS) ======================= -->
    <div class="marquee-cards-container container mt-5 mb-5" data-aos="zoom-in" data-aos-delay="100">
      <div class="marquee-cards-track">
        <!-- FIRST SET: exactly 4 different cards -->
        <div class="marquee-card">
          <article class="card-modern">
            <div class="card-media">
              <img src="assets/images/marque-1.PNG" alt="Iceland Cabin">
              <span class="price-pill">$0</span>
              <div class="media-overlay"></div>
            </div>
            <div class="card-body">
              <h3 class="card-title">Crypgo Website</h3>
              <p class="card-desc">Crypgo is a free template for crypto business websites. The business is designed for startups and digital coin services like BitcoinCrypgo. 
    </p>
              <div class="card-meta">
                <span class="meta-pill">Top Rated</span>
                <span class="meta-pill">5 Day stay</span>
              </div>
              <button class="card-cta">Preview</button>
            </div>
          </article>
        </div>

        <div class="marquee-card">
          <article class="card-modern">
            <div class="card-media">
              <img src="assets/images/marque-2.PNG" alt="Fjord Retreat">
              <span class="price-pill">$0</span>
              <div class="media-overlay"></div>
            </div>
            <div class="card-body">
              <h3 class="card-title">Kaira Website</h3>
              <p class="card-desc">Kaira is a online fashion store services.
                 This beautiful eCommerce website template showcases your products in a very organized way.</p>
              <div class="card-meta">
                <span class="meta-pill">Popular</span>
                <span class="meta-pill">3 Day stay</span>
              </div>
              <button class="card-cta">Preview</button>
            </div>
          </article>
        </div>

        <div class="marquee-card">
          <article class="card-modern">
            <div class="card-media">
              <img src="assets/images/marque-3.PNG" alt="Mountain Lodge">
              <span class="price-pill">$0</span>
              <div class="media-overlay"></div>
            </div>
            <div class="card-body">
              <h3 class="card-title"> Lounge Website</h3>
              <p class="card-desc">Lounge is a modern restaurant template for cafeteria or other food businesses. 
                lightweight and minimalist design with a dark background.</p>
              <div class="card-meta">
                <span class="meta-pill">Top Rated</span>
                <span class="meta-pill">7 Day stay</span>
              </div>
              <button class="card-cta">Preview</button>
            </div>
          </article>
        </div>

        <div class="marquee-card">
          <article class="card-modern">
            <div class="card-media">
              <img src="assets/images/marque-4.PNG" alt="Lakeside Villa">
              <span class="price-pill">$0</span>
              <div class="media-overlay"></div>
            </div>
            <div class="card-body">
              <h3 class="card-title">Corona Admin Dashboard</h3>
              <p class="card-desc">Admin template is highly responsive and easy
                 to use. Design is colorful while remaining attentive to
                  basic and beauty.</p>
              <div class="card-meta">
                <span class="meta-pill">Luxury</span>
                <span class="meta-pill">2 Day stay</span>
              </div>
              <button class="card-cta">Preview</button>
            </div>
          </article>
        </div>
      </div>
    </div>

    <!-- page 3  -->
    <div class="container-fluid page-3-temp p-4">
      <h1 class="text-light text-center">Templates</h1>
      <div class="row ">
        <div class="col-4 col-md-3 col-lg-3 side-menu">
          <div class="heading-menu ">
            <h3 class="all s-menu">Categories</h3>
          <h3 class="s-menu" data-category="all">All</h3>
  <h3 class="s-menu" data-category="Blogs">Blogs</h3>
  <h3 class="s-menu" data-category="E-commerce">E-commerce</h3>
  <h3 class="s-menu" data-category="Portfolio">Portfolio</h3>
  <h3 class="s-menu" data-category="LandingPages">Landing Pages</h3>
  <h3 class="s-menu" data-category="Mentor">Mentor</h3>
  <h3 class="s-menu" data-category="Restaurant">Restaurant</h3>
          </div>
        </div>
        <div class="col-8 col-md-9 col-lg-9">

          <div class="row">
            <!-- From Uiverse.io by DipeshPun91 -->
            <div class="navbar-container">
              <div class="search-bar">
                <div class="InputContainer">
                  <svg class="searchIcon" width="20px" viewBox="0 0 24 24" height="20px"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                      d="M15.5 14h-.79l-.28-.27A6.518 6.518 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                    </path>
                  </svg>
                  <input class="input" id="search-input" placeholder="Search Docs..." type="text" />
                </div>
                <!-- <div class="border"></div> -->
              </div>
            </div>
            <div class="row g-2 " id="templates">
              <!-- Card 1 -->
              <!-- <div class="col-12 article-loop  col-md-4 col-lg-4">
                                          <div class="temp-card position-relative overflow-hidden">
                                            <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo" class="img-fluid logo" />
                                            <h4 class="pt-4">Thali <span>30 days ago</span></h4>
                                            <h3>Medical Website</h3>

                                            <div class="d-flex">
                                              <button class="btn-shine btn-shine-main"><span>Popular</span></button>
                                              <button class="btn-shine btn-shine-main ms-2"><span>Top Rated</span></button>
                                            </div>

                                            <button class="save-btn">Saved <i class="fa-solid fa-bookmark"></i></button>

                                            <hr class="mt-5 video-trigger">
                                            <div class="card-foo-temp">
                                              <div class="c-f-h">
                                                <h5>$0 - Free</h5>
                                                <p style="font-size:large;">&nbsp;&nbsp;<i class="fa-solid fa-code"></i></p>
                                              </div>
                                              <div class="c-f-btn">
                                                <button class="btn-discover"><span>Discover</span></button>
                                              </div>
                                            </div>


                                            <video class="card-video w-100 mt-2" muted loop preload="none" >
                                          <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                            </video>
                                              </div>

                                        </div> -->
                                        <!-- raman required*  -->

                                             <!-- <div class="marquee-card col-12 article-loop  col-md-6 col-lg-4">
          <article class="card-modern temp-card position-relative overflow-hidden">
            
            <div class="card-media">
              <img src="${t['bg-img']}" alt="Lakeside Villa">
              <span class="price-pill">$0</span>
              <div class="media-overlay"></div>
              
            </div>
            <div class="card-body">
              <h3 class="card-title">Corona Admin Dashboard</h3>
              <p class="card-desc">Admin template is highly responsive and easy
                 to use. Design is colorful while remaining attentive to
                  basic and beauty.</p>
              <div class="card-meta">
                 <button class="btn-shine btn-shine-main"><span>Popular</span></button>
                  <button class="btn-shine btn-shine-main ms-2"><a href="${t.download}" style="text-decoration:none"><span>Get Code</span></a></button>
              </div>
From Uiverse.io by reglobby 
<div
  aria-label="User Login Button"
  tabindex="0"
  role="button"
  class="preview"
>
  <div class="user-profile-inner" onclick="openPreview('${t.preview}', '${t.title}')">
      <p class="mt-3" >Preview</p>
  </div>
</div>
            </div>
               <video class="card-video w-100 mt-2" muted loop preload="none" >
                                          <source src="${.videos}" type="video/mp4">
                                            </video>
                                              </div>
          </article>
        </div> -->

              <!-- Modal -->
            </div>
            <div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="previewTitle">Template Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <iframe id="previewFrame"></iframe>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  </div></a>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

  <!-- GSAP ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <!-- GSAP ScrollSmoother (Premium/Club Plugin) -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script src="{{ asset('assets/js/template.js') }}"></script>

  <script>

  let allTemplates = []; // global variable

  async function loadTemplates() {
    try {
      const res = await fetch("https://sheet2api.com/v1/okGRwK9GTaKi/c-templates");
      allTemplates = await res.json(); // save all templates

      renderTemplates(allTemplates); // show initially all
    } catch (err) {
      console.error("Error loading templates:", err);
      document.getElementById("templates").innerHTML =
        "<p class='text-danger'>Failed to load templates!</p>";
    }
  }

function renderTemplates(list) {
  let container = document.getElementById("templates");
  if (!list.length) {
    container.innerHTML = "<p class='text-warning'>No templates found!</p>";
    return;
  }
container.innerHTML = list
  .map(
    (t, i) => 
    `<div class="marquee-card col-12 article-loop col-md-6 col-lg-4">
        <a href="/template/${t.id}" style="text-decoration:none; color:inherit">
          <article class="card-modern  position-relative overflow-hidden">
            <div class="card-media">
              <img style="object-fit: cover; object-position: top; " src="${t['cimg1']}" alt="${t.ctitle}">
              <span class="price-pill">$0</span>
              <div class="media-overlay"></div>
            </div>
            <div class="card-body">
              <h3 class="card-title">${t.ctitle}</h3>
              <p class="card-desc">${t.cdesc}</p>
              <div class="card-meta">
                 <button class="btn-shine btn-shine-main ms-2">
                   <span>Documentation</span>
                 </button>
              </div>

              <!-- Preview Button -->
              <div aria-label="User Login Button" tabindex="0" role="button" class="preview">
                <div class="user-profile-inner" >
                  <p class="mt-3">Content</p>
                </div>
              </div>
            </div>

            <video class="card-video w-100 mt-2" muted loop preload="none">
              <source src="${t.videos}" type="video/mp4">
            </video>
          </article>
        </a>
    </div>`
  )
  .join("");


  $('.article-loop').paginate(6); // pagination apply again
}


  // 🔍 live search
  document.getElementById("search-input").addEventListener("input", function () {
    let query = this.value.toLowerCase();
    let filtered = allTemplates.filter(t =>
      t.ctitle.toLowerCase().includes(query)
    );
    renderTemplates(filtered);
  });

  function openPreview(url, title) {
    document.getElementById("previewFrame").src = url;
    document.getElementById("previewTitle").innerText = title;
    let modal = new bootstrap.Modal(document.getElementById('previewModal'));
    modal.show();
  }

  loadTemplates();



    // Ensure marquee is seamless and endless by duplicating first set and setting animation distance/duration
    document.addEventListener('DOMContentLoaded', function () {
      const track = document.querySelector('.marquee-cards-track');
      if (!track) return;

      // if already duplicated, skip
      if (track.dataset.duplicated === 'true') return;

      // duplicate children (first group) to allow seamless loop
      const children = Array.from(track.children);
      if (children.length === 0) return;

      // append a clone of all children
      const cloneHtml = children.map(c => c.outerHTML).join('');
      track.insertAdjacentHTML('beforeend', cloneHtml);

      // compute width of first group (including gaps)
      // need to wait for layout
      requestAnimationFrame(() => {
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        let total = 0;
        for (let i = 0; i < children.length; i++) {
          const r = children[i].getBoundingClientRect();
          total += r.width;
        }
        // include gaps between first-group items
        total += gap * Math.max(0, children.length - 1);

        // set CSS var so keyframes translate exact amount
        track.style.setProperty('--marquee-width', `${total}px`);

        // adjust animation duration based on width for natural speed (tweak divisor)
        const pxPerSec = 120; // pixels per second (tweak to change speed)
        const duration = Math.max(10, Math.round(total / pxPerSec));
        track.style.animation = `marquee-cards ${duration}s linear infinite`;

        track.dataset.duplicated = 'true';
      });
    });


   // Sidebar Filter
  document.querySelectorAll(".s-menu").forEach(menuItem => {
    menuItem.addEventListener("click", function () {
      let category = this.getAttribute("data-category");

      // Active class change
      document.querySelectorAll(".s-menu").forEach(el => el.classList.remove("active"));
      this.classList.add("active");

      // Filter by category
      if (category === "all") {
        renderTemplates(allTemplates);
      } else {
        let filtered = allTemplates.filter(t => t.category === category);
        renderTemplates(filtered);
      }    });

});

  </script>


@endsection