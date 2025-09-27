
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

<?php $__env->startSection('main-content'); ?>

<style>
/* =======================
   General Styles
======================= */
html, body {
    overflow-x: hidden !important;
}

/* =======================
   Rating Progress Bars
======================= */
.skill-row {
    display: flex;
    align-items: center;
    margin: 8px 0;
}

.skill-row .stars {
    width: 30px;
    text-align: center;
    color: gold;
    font-size: 18px;
}

.skill-row .progress {
    flex: 1;
    height: 8px;
    background: #fff;
    border-radius: 6px;
    overflow: hidden;
    margin-left: 10px;
}

.skill-row .progress-bar {
    width: 100% !important;
    height: 100%;
    background: linear-gradient(90deg, var(--Secondary, #f39c12), var(--Primary, #e74c3c));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 1.2s ease-in-out;
}

/* =======================
   Carousel Indicators
======================= */
.carousel {
    position: relative; /* Parent ko relative banana zaroori hai */
}
.sec-slider{
    height: 70px !important;
    width: 70px !important;
}
.carousel-indicators {
    position: absolute;
    bottom: 10px; /* Slider ke neeche */
    left: 50%;
    transform: translateX(-50%); /* Center align */
    width: auto !important; /* Bootstrap ka 100% override */
    margin: 0;
    justify-content: center;
    display: flex;
}

.carousel-indicators [data-bs-target] {
    background-color: #fff;
    width: 40px;
    height: 4px;
    border-radius: 20px;
    border: none;
    margin: 0 4px;
}

.carousel-indicators button {
    width: 60px;
    height: 5px;
    border: none;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.2);
    position: relative;
    overflow: hidden;
}

.carousel-indicators button::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: linear-gradient(90deg, #af984c, #cfb355);
    transform: scaleX(var(--fill, 0));
    transform-origin: left;
    transition: transform var(--interval, 4000ms) linear;
}
.slider-wrapper {
        position: relative;
        max-width: 100%;
        margin: auto;
      }

      /* Main Image */
      .carousel-item img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
        border-radius: 10px;
      }

      /* Thumbnails inside slider */
      .thumbnail-carousel {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
      }

      .thumbnail-carousel img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        opacity: 0.6;
        cursor: pointer;
        transition: 0.3s;
      }

      .thumbnail-carousel img.active {
        opacity: 1;
        border: 2px solid white;
      }

      /* Progress bars container */
      .progress-bars {
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60%;
        display: flex;
        gap: 6px;
        z-index: 10;
      }

      /* Each progress bar */
      .progress-bar-custom {
        flex: 1;
        height: 4px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 2px;
        overflow: hidden;
        position: relative;
      }

      .progress-bar-custom .fill {
        display: block;
        height: 100%;
        width: 0;
        background: white;
        transition: width linear;
      }
</style>
<div style="font-family: 'Surgena';">
 <!-- =======================
         hero Section
    ======================== -->
<div class="container hero-r text-light">
    <div class="row">
       <div class="col-12 col-md-6 col-lg-6">
            <div class="slider-wrapper position-relative">

             <div class="progress-bars">
                <span class="progress-bar-custom"><span class="fill"></span></span>
                <span class="progress-bar-custom"><span class="fill"></span></span>
                <span class="progress-bar-custom"><span class="fill"></span></span>
              </div>

              <!-- Main Carousel -->
              <div id="mainCarousel" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"><img class="d-block w-100 main-img-1" alt="Template Img 1"></div>
                  <div class="carousel-item"><img class="d-block w-100 main-img-2" alt="Template Img 2"></div>
                  <div class="carousel-item"><img class="d-block w-100 main-img-3" alt="Template Img 3"></div>
                </div>
              </div>

              <!-- Thumbnails -->
              <div class="thumbnail-carousel">
                <img class="active thumb-1" alt="Thumb 1">
                <img class="thumb-2" alt="Thumb 2">
                <img class="thumb-3" alt="Thumb 3">
              </div>
            </div>
          </div>
      
            <!-- Right Side Dynamic Details -->
            <div class="col-12 col-md-6 col-lg-6 mt-3 mt-lg-5">
                <button class="type-btn m-2">Template</button>
                <h2 class="p-2">Loading...</h2>
                <h5 class="ps-2 mb-4">$0 Free</h5>

                <h4 style="color:#af984c; padding:10px;margin-top:-20px">Select Color</h4>
           <div class="btns-content">
  <a id="darkDownload" style="text-decoration:none;" download>
    <button>Dark Theme</button>
  </a>

  <a id="lightDownload" style="text-decoration:none;" download>
    <button>Light Theme</button>
  </a>
</div>

     <!-- Main Download -->
<a id="mainDownload" style="text-decoration:none;" download>
  <div class="download d-flex m-2">
    <button>DOWNLOAD</button>
    <div class="icon-d"><i class="fa-solid fa-code"></i></div>
  </div>
</a>
                <!-- Description -->
                <div class="desc mt-3">
                    <h5>Description</h5>
                    <div class="description"><p>No description available.</p></div>
                </div>

                <!-- Preview Button -->
                <div class="pre d-flex">
                    <button class="content-preview mt-3">Preview</button>
                    <div class="icon-d mt-3"><i class="fa-regular fa-eye"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullscreen-sm-down" style="max-width:95%; height:95%;">
    <div class="modal-content" style="height:95vh; overflow:hidden;">
      <div class="modal-header">
        <h5 class="modal-title" id="previewTitle">Live Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-0" style="flex:1; overflow:hidden;">
        <iframe id="previewFrame" src="" frameborder="0" style="width:100%; height:100%; border:0; overflow:auto;"></iframe>
      </div>
    </div>
  </div>
</div>


    <!-- =======================
         Rating & Reviews Section
    ======================== -->
    <div class="container-fluid text-light">
        <div class="row">
            <h1 class="m-5">Rating & Reviews</h1>

            <!-- Left Side Ratings -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="row rating">

                    <div class="col-6 p-4 ps-lg-5">
                        <h1>4.5<span>/5</span></h1>
                        <p>(50 New Reviews)</p>
                    </div>

                    <!-- Progress bars -->
                    <div class="col-6 progess-sec">
                        <?php $__currentLoopData = [90, 50, 30, 10, 5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="skill-row <?php echo e($i == 4 ? 'd-none d-md-none d-lg-flex' : ''); ?>">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-value="<?php echo e($value); ?>"></div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Right Side Slider -->
            <div class="col-12 col-md-6 col-lg-6 mb-4 slider-content">
                <div id="animeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial p-3">
                                <h3>Moiz Tahir</h3>
                                <div class="stars-date d-flex justify-content-between">
                                    <div class="star-icon">
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="date">31 Oct 2024</div>
                                </div>
                                <p>Lorem, nisi ipsam alias quasi aliquid eaque natus doloribus, maxime nulla ullam illum! Ex quibusdam esse enim dignissimos blanditiis error sunt eos.</p>
                                <img src="<?php echo e(asset('assets/images/customer2.png')); ?>" class="sec-slider img-fluid" alt="Customer 2"><br><br>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="testimonial p-3">
                                <h3>Wajahat</h3>
                                <div class="stars-date d-flex justify-content-between">
                                    <div class="star-icon">
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="date">31 Oct 2024</div>
                                </div>
                                <p>Lorem, nisi ipsam alias quasi aliquid eaque natus doloribus, maxime nulla ullam illum! Ex quibusdam esse enim dignissimos blanditiis error sunt eos.</p>
                                <img src="<?php echo e(asset('assets/images/customer1.png')); ?>" class="sec-slider img-fluid" alt="Customer 1"><br><br>
                            </div>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="carousel-indicators mt-5">
                        <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =======================
         Related Content Section
    ======================== -->
    <div class="container-fluid content-cards">
        <h1 class="text-center p-5">You might also like</h1>
        <div class="row m-4 mb-5">
            <div class="col-12 col-md-6 col-lg-3 content-card-1">
                <img src="<?php echo e(asset('assets/images/restoran.PNG')); ?>" class="img-fluid" alt="Restoran Theme">
                <h4 class="p-1 mt-2">Restoran Theme</h4>
                <p>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i> &nbsp; 4.0/5
                </p>
                <p>$212 &nbsp;<span style="text-decoration: line-through;color:gray">$242</span></p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 content-card-1">
                <img src="<?php echo e(asset('assets/images/food.PNG')); ?>" class="img-fluid" alt="Food Mart Theme">
                <h4 class="p-1 mt-2">Food Mart Theme</h4>
                <p>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i> &nbsp; 3.0/5
                </p>
                <p>$0 &nbsp; Free</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 content-card-1">
                <img src="<?php echo e(asset('assets/images/lounge.PNG')); ?>" class="img-fluid" alt="Lounge Cafe Theme">
                <h4 class="p-1 mt-2">Lounge Cafe Theme</h4>
                <p>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i> &nbsp; 4.0/5
                </p>
                <p>$70</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 content-card-1">
                <img src="<?php echo e(asset('assets/images/Kelly.PNG')); ?>" class="img-fluid" alt="Kelly Portfolio Theme">
                <h4 class="p-1 mt-2">Kelly Portfolio Theme</h4>
                <p>
                    <?php for($i = 0; $i < 5; $i++): ?>
                        <i class="fa-solid fa-star"></i>
                    <?php endfor; ?>
                    &nbsp; 5.0/5
                </p>
                <p>$150 &nbsp;<span style="text-decoration: line-through;color:gray">$170</span></p>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- =======================
     Script Section
======================= -->


<script>
let allTemplates = [];
let currentTemplate = null;

// API se load
async function loadTemplates() {
  try {
    const res = await fetch("https://sheet2api.com/v1/okGRwK9GTaKi/c-templates");
    allTemplates = await res.json();

    // URL se id lo
    const parts = window.location.pathname.split("/");
    const templateId = parts[parts.length - 1];
    let found = allTemplates.find(t => t.id == templateId);

    if (found) renderTemplate(found);
    else if (allTemplates.length > 0) renderTemplate(allTemplates[0]);
  } catch (err) { console.error("API Error:", err); }
}

// Render function
function renderTemplate(t) {
  currentTemplate = t;

  document.querySelector(".type-btn").innerText = t.category || "Template";
  document.querySelector(".p-2").innerText = t.ctitle || "No Title";
  document.querySelector("h5.ps-2").innerText = t.price || "$0 Free";
  document.querySelector(".description p").innerText = t.cdesc || "No description available.";


  document.querySelector(".content-preview").onclick = () => {
    if (t.cpreview) openPreview(t.cpreview, t.ctitle);
  };

  // ✅ Images update
  document.querySelector(".main-img-1").src = t.cimg1 || "<?php echo e(asset('assets/images/std.PNG')); ?>";
  document.querySelector(".main-img-2").src = t.cimg2 || "<?php echo e(asset('assets/images/furni.PNG')); ?>";
  document.querySelector(".main-img-3").src = t.cimg3 || "<?php echo e(asset('assets/images/crypgo.PNG')); ?>";
  document.querySelector(".thumb-1").src = t.cimg1 || "<?php echo e(asset('assets/images/std.PNG')); ?>";
  document.querySelector(".thumb-2").src = t.cimg2 || "<?php echo e(asset('assets/images/furni.PNG')); ?>";
  document.querySelector(".thumb-3").src = t.cimg3 || "<?php echo e(asset('assets/images/crypgo.PNG')); ?>";


  document.getElementById("darkDownload").href = t.cdownloadDark || "#";
  document.getElementById("lightDownload").href = t.cdownload || "#";
  document.getElementById("mainDownload").href = t.cdownload || "#";

  // ✅  Dark Theme Button ke liye condition
if (t.cdownloadDark && t.cdownloadDark.trim() !== "") {
    document.getElementById("darkDownload").style.display = "inline-block";
    document.getElementById("darkDownload").href = t.cdownloadDark;
} else {
    document.getElementById("darkDownload").style.display = "none";
}

}


// Search filter
function setupSearch() {
  const searchField = document.querySelector(".content-search-field");
  searchField.addEventListener("input", function () {
    const query = this.value.toLowerCase();

    if (query === "") {
      renderTemplate(allTemplates[0]); // blank ho to pehla wapis
      return;
    }

    const found = allTemplates.find((t) =>
      t.title.toLowerCase().includes(query)
    );

    if (found) {
      renderTemplate(found);
    } else {
      document.querySelector(".p-2").innerText = "No match found!";
      document.querySelector("h5.ps-2").innerText = "";
    }
  });
}

// Init
document.addEventListener("DOMContentLoaded", () => {
  loadTemplates();
  setupSearch();
});

document.addEventListener("DOMContentLoaded", function () {

    /* ==============================
       Rating Section Progress Bars
    ============================== */
    document.querySelectorAll(".progress-bar").forEach((bar, i) => {
        const value = (parseFloat(bar.getAttribute("data-value")) || 0) / 100;
        bar.getBoundingClientRect();
        setTimeout(() => {
            bar.style.transform = "scaleX(" + value + ")";
        }, 200 * i);
    });

    /* ==============================
       Anime Carousel (Reviews Slider)
       Indicators Auto Fill
    ============================== */
    const animeCarousel = document.querySelector("#animeCarousel");
    if (animeCarousel) {
        const indicators = animeCarousel.querySelectorAll(".carousel-indicators button");
        const interval = parseInt(animeCarousel.getAttribute("data-bs-interval")) || 4000;

        indicators.forEach(btn => {
            btn.style.setProperty("--interval", interval + "ms");
        });

        function resetIndicators() {
            indicators.forEach(btn => btn.style.setProperty("--fill", "0"));
        }

        animeCarousel.addEventListener("slid.bs.carousel", function (e) {
            resetIndicators();
            let active = indicators[e.to];
            requestAnimationFrame(() => {
                active.style.setProperty("--fill", "1");
            });
        });

        if (indicators.length > 0) {
            requestAnimationFrame(() => {
                indicators[0].style.setProperty("--fill", "1");
            });
        }
    }

    /* ==============================
   Main Carousel (Hero Slider)
   Progress Bars + Thumbnails
============================== */
const mainCarousel = document.querySelector('#mainCarousel');
if (mainCarousel) {
    const slideInterval = parseInt(mainCarousel.getAttribute("data-bs-interval")) || 3000;

    const bsMainCarousel = new bootstrap.Carousel(mainCarousel, {
        interval: slideInterval,
        ride: 'carousel',
        wrap: true 
    });

    const bars = document.querySelectorAll('.progress-bar-custom .fill');
    const thumbnails = document.querySelectorAll('.thumbnail-carousel img');

    function startProgress(index) {
        // Reset all bars
        bars.forEach((bar, i) => {
            bar.style.transition = 'none';
            bar.style.width = i < index ? '100%' : '0';
        });

        // Animate active bar
        const activeBar = bars[index];
        if (activeBar) {
            activeBar.style.transition = 'none';
            activeBar.style.width = '0';

            // Force reflow
            void activeBar.offsetWidth;

            activeBar.style.transition = `width ${slideInterval}ms linear`;
            activeBar.style.width = '100%';
        }

        // Update thumbnails
        thumbnails.forEach((thumb, i) => {
            thumb.classList.toggle('active', i === index);
        });
    }

    mainCarousel.addEventListener('slide.bs.carousel', (e) => {
        startProgress(e.to);
    });

    mainCarousel.addEventListener('slid.bs.carousel', (e) => {
        if (e.to === 0) {
            startProgress(0);
        }
    });

    // Start first bar
    startProgress(0);

    thumbnails.forEach((thumb, i) => {
        thumb.addEventListener('click', () => {
            bsMainCarousel.to(i);
        });
    });
}

});
function openPreview(url, title) {
  document.getElementById("previewFrame").src = url;
  document.getElementById("previewTitle").innerText = title;

  let modal = new bootstrap.Modal(document.getElementById('previewModal'));
  modal.show();
}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.headerfooter', ['title' => 'Content'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rimsha\Downloads\Thali\resources\views\content.blade.php ENDPATH**/ ?>