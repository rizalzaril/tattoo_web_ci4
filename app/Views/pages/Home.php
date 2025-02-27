 <?= $this->include('layouts/Header') ?>



 <!-- Navbar Elements -->
 <?= $this->include('layouts/Navbar') ?>



 <!-- Hero Section -->

 <?= $this->include('pages/Hero') ?>



 <div class="container">


   <!-- opened and artist -->


   <div class="opened-container">

     <div class="d-flex flex-column flex-md-row gap-md-5 gap-5 ">
       <!-- studio open -->

       <div class="col-md-5 d-flex justify-content-center text-center">
         <div class="flex-column">
           <h2 class="font-rye text-golden">Studio Open</h2>
           <hr class="bg-golden" style="height: 2px;">

           <h5 class="text-golden">Mon : <span class="text-white">closed</span> </h5>
           <h5 class="text-golden">Tue-sun : <span class="text-white">10am-6pm</span> </h5>

           <a class="btn bg-golden text-white col-10 mt-4" target="_blank" href="https://maps.app.goo.gl/GVmhvG63PiFhofYc8">Direction</a>
         </div>
       </div>

       <!-- artist -->
       <div class="col-md-6 d-flex justify-content-center">
         <div class="d-flex flex-column  w-100">
           <h2 class="font-rye text-golden text-center text-md-start">Our Artist</h2>

           <div class="d-flex flex-column flex-md-row align-items-center gap-3 mt-3">
             <img src="https://livedemo00.template-help.com/wt_45004/images/page1_img2.png"
               class="img-thumbnail border-0"
               alt="Jhon Doe"
               style="max-width: 150px;">

             <div class="w-50 text-center text-md-start">
               <h5 class="text-golden">Jhon Doe</h5>
               <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis esse quis qui suscipit rem quo, ducimus iure.</p>
             </div>
           </div>
         </div>
       </div>


     </div>


     <img class=" bg-body-opened" src="<?= base_url('/assets/img/bg-2.jpg') ?>" alt="">
   </div>
 </div>



 <!-- New Works -->
 <section id="portfolio" class="mb-5">
   <div class="container text-center">
     <h2 class="mb-4 text-heading-content text-white">Our Works</h2>

     <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-2 d-flex justify-content-center">
       <div class="col-md-2">
         <div class="card-body p-0">
           <img src="https://i.pinimg.com/736x/37/ff/c0/37ffc034f44e41932f8ece0454e51407.jpg"
             class="portfolio-img rounded"
             style="width: 100%;  object-fit: cover; transition: transform 0.3s ease;"
             onmouseover="this.style.transform='scale(1.05)'"
             onmouseout="this.style.transform='scale(1)'">
         </div>
       </div>

       <div class="col-md-2">
         <div class="card-body p-0">
           <img src="https://i.pinimg.com/736x/e1/48/69/e14869f9d09eaf9940185f9a5c1e70ff.jpg"
             class="portfolio-img rounded"
             style="width: 100%; object-fit: cover; transition: transform 0.3s ease;"
             onmouseover="this.style.transform='scale(1.05)'"
             onmouseout="this.style.transform='scale(1)'">
         </div>
       </div>

       <div class="col-md-2">
         <div class="card-body p-0">
           <img src="https://i.pinimg.com/736x/37/ff/c0/37ffc034f44e41932f8ece0454e51407.jpg"
             class="portfolio-img rounded"
             style="width: 100%; object-fit: cover; transition: transform 0.3s ease;"
             onmouseover="this.style.transform='scale(1.05)'"
             onmouseout="this.style.transform='scale(1)'">
         </div>
       </div>

       <div class="col-md-2">
         <div class="card-body p-0">
           <img src="https://i.pinimg.com/736x/37/ff/c0/37ffc034f44e41932f8ece0454e51407.jpg"
             class="portfolio-img rounded"
             style="width: 100%;  object-fit: cover; transition: transform 0.3s ease;"
             onmouseover="this.style.transform='scale(1.05)'"
             onmouseout="this.style.transform='scale(1)'">
         </div>
       </div>
     </div>

     <a class="btn bg-golden text-white mt-5" href="<?= base_url('/') ?>">SHOW MORE</a>
   </div>
 </section>



 <!-- About -->

 <section id="" class=" mb-5 mt-5 about-animate">
   <h2 class="text-center text-white text-heading-content ">Why Choose Us? </h2>


   <div class="d-flex flex-column flex-md-row mt-2 mt-md-5">
     <div class="col-md-6 d-flex justify-content-center">
       <img class="about-img " src="https://i.pinimg.com/736x/d6/df/bc/d6dfbcdfd6474ecf18ea4ef64ecfa239.jpg" alt="">
     </div>
     <div class="col-md-6 about-caption p-4 align-self-center">
       <h4 class="text-white font-rye text-md-start text-center">About</h4>
       <p class="text-secondary text-md-start text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo consectetur rerum excepturi. Numquam temporibus fugiat quo, praesentium ab laudantium id reprehenderit voluptate neque est. Facere enim voluptatem explicabo quos cumque doloribus sunt harum esse eaque veniam vel id iure quidem perspiciatis sed provident excepturi, numquam ducimus tempore nisi nemo in inventore. Eveniet asperiores ?</p>
     </div>


     <img class="bg-1" src="<?= base_url('/assets/img/bg1.jpg') ?>" alt="">
   </div>


 </section>


 <!-- Quality -->

 <section class="mb-5 quality-animate">
   <h2 class="text-center text-white text-heading-content ">Our Quality </h2>

   <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
     slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
     coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
     <swiper-slide>
       <img src=" https://i.pinimg.com/736x/db/16/dc/db16dcb8dbf625e8ad551d97b8b75824.jpg" />
       <div class="text-overlay position-absolute bottom-0 start-50 w-100 translate-middle-x p-3 bg-dark bg-opacity-25 text-white text-center">
         <h4>High-Quality Ink</h4>
         <p class="text-secondary">We use premium, safe, and long-lasting tattoo ink for sharp, vibrant, and durable results.</p>
       </div>
     </swiper-slide>
     <swiper-slide>
       <img src=" https://i.pinimg.com/736x/65/e2/e1/65e2e1fc0205fc39f32c23e5e7b09dc6.jpg" />
       <div class="text-overlay position-absolute bottom-0 start-50 w-100 translate-middle-x p-3 bg-dark bg-opacity-25 text-white text-center">
         <h4>Modern Equipment</h4>
         <p class="text-secondary">We use advanced tattoo technology for quicker, more precise, and comfortable experiences.</p>
       </div>
     </swiper-slide>
     <swiper-slide>
       <img src=" https://i.pinimg.com/736x/0a/f2/cb/0af2cba6afe91a6dbf679e9da004bb5a.jpg" />
       <div class="text-overlay position-absolute bottom-0 start-50 w-100 translate-middle-x p-3 bg-dark bg-opacity-25 text-white text-center">
         <h4>Proven Professionalism</h4>
         <p class="text-secondary">We use premium, safe, and long-lasting tattoo ink for sharp, vibrant, and durable results.</p>
       </div>
     </swiper-slide>
     <swiper-slide>
       <img src=" https://i.pinimg.com/736x/7b/70/60/7b70606a36975a592601bd7461049343.jpg" />
       <div class="text-overlay position-absolute bottom-0 start-50 w-100 translate-middle-x p-3 bg-dark bg-opacity-25 text-white text-center">
         <h4>Strict Hygiene Standards</h4>
         <p class="text-secondary">We maintain a clean studio, with all equipment sterilized to the highest standards.</p>
       </div>
     </swiper-slide>

   </swiper-container>

 </section>



 <!-- tattoo artist section -->
 <section class="fade-up">
   <h2 class="text-center text-white text-heading-content ">Getto Know Us </h2>
   <img class="bg-2" src="<?= base_url('/assets/img/bg-2.jpg') ?>" alt="">
 </section>








 <!-- Booking Section -->
 <section id="booking" class="bg-dark py-5">
   <div class="container text-center">
     <h2 class="text-white">Book Your Appointment</h2>
     <p class="text-white">Secure your spot with our expert tattoo artists.</p>
     <a href="#" class="btn bg-golden text-white">BOOK NOW</a>
   </div>
 </section>

 <!-- Contact & Map Section -->
 <section id="contact" class="py-5">
   <div class="container text-center">
     <h2>Find Us</h2>
     <p>Visit our studio and get inked by professionals.</p>
     <div class="ratio ratio-16x9">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093667!2d144.9630576153186!3d-37.81362797975186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce6e0!2sTattoo%20Studio!5e0!3m2!1sen!2sus!4v1615442473821!5m2!1sen!2sus" allowfullscreen=""></iframe>
     </div>
   </div>
 </section>




 <?= $this->include('layouts/Footer') ?>