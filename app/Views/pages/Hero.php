<section class="pb-5">


  <!-- Swiper -->
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide position-relative">
        <img src="https://images.unsplash.com/photo-1605647533135-51b5906087d0?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dGF0dG9vJTIwYXJ0aXN0fGVufDB8fDB8fHww" alt="" class="w-100">
        <!-- caption content -->
        <div class="position-absolute top-50 start-50 translate-middle fs-4 text-white">
          <h2 class="font-weight-bold mb-0 ">We do <span class="text-golden">Tattoo</span> &</h2>
          <h2 class="font-weight-bold mb-0">Piercing</h2>
          <p class="col-10 mt-3 mt-md-5">Fast and easy booking – choose a date and get a free consultation!</p>
          <div class="d-flex justify-content-start justify-content-md-start">

            <a href="<?= base_url('/make_appointment') ?>" class="btn text-white bg-golden">Make Appointment</a>
          </div>
        </div>
      </div>

      <div class=" swiper-slide position-relative">
        <img src="<?= base_url('/assets/img/hero1.jpg') ?>" alt="" class="w-100">
        <div class="position-absolute top-50 start-50 translate-middle fs-4 text-white">
          <h2 class="font-weight-bold">Ink Your Story, Make It Timeless!</h2>
          <p>Every tattoo has a meaning – let’s create yours with our expert artists.</p>
          <button class="btn btn-primary">Get Inked Now</button>
        </div>
      </div>

      <div class="swiper-slide position-relative">
        <img src="https://i.pinimg.com/736x/0a/f2/cb/0af2cba6afe91a6dbf679e9da004bb5a.jpg" alt="" class="w-100">
        <div class="position-absolute top-50 start-50 translate-middle fs-4 text-white">
          <h2 class="font-weight-bold">Ink Your Story, Make It Timeless!</h2>
          <p>Every tattoo has a meaning – let’s create yours with our expert artists.</p>
          <button class="btn btn-primary">Get Inked Now</button>
        </div>

      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <!-- <div class="swiper-scrollbar"></div> -->
  </div>


</section>