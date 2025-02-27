<!-- <a href="https://wa.me/6281234567890" class="" target="_blank">

</a> -->


<footer class="bg-dark text-white py-4">
  <div class="container text-center p-5">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>We provide high-quality tattoos with skilled artists and the best materials. Your safety and satisfaction are our top priorities.</p>
      </div>
      <div class="col-md-4">
        <h5>Contact</h5>
        <p>Email: info@yourtattoostudio.com</p>
        <p>Phone: +123 456 7890</p>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <a href="#" class="text-white me-2">Facebook</a>
        <a href="#" class="text-white me-2">Instagram</a>
        <a href="#" class="text-white">Twitter</a>
      </div>
    </div>
    <hr class="my-3">
    <p>&copy; 2025 Your Tattoo Studio. All rights reserved.</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
  // Mendaftarkan ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // Animasi GSAP dengan ScrollTrigger
  gsap.from("#sliderContent", {
    opacity: 0, // Awalnya transparan
    y: 100, // Mulai dari bawah
    duration: 1.5, // Durasi animasi
    ease: "power3.out", // Efek easing yang halus
    scrollTrigger: {
      trigger: "#sliderContent", // Trigger saat elemen ini muncul
      start: "top 80%", // Dimulai saat bagian atas elemen mencapai 80% dari viewport
      end: "top 20%", // Selesai saat bagian atas elemen mencapai 20% dari viewport

    }


  });
  // Animasi dengan Stagger untuk elemen dengan kelas "fade-up"
  gsap.from(".about-animate", {
    opacity: 0, // Awalnya transparan
    y: 100, // Mulai dari bawah
    duration: 1, // Durasi animasi
    ease: "power3.out", // Efek easing yang halus
    scrollTrigger: {
      trigger: ".about-animate", // Trigger saat elemen ini muncul
      start: "top 80%", // Dimulai saat bagian atas elemen mencapai 80% dari viewport
      end: "top 20%", // Selesai saat bagian atas elemen mencapai 20% dari viewport
    }

  });

  gsap.from(".quality-animate", {
    opacity: 0, // Awalnya transparan
    x: -200, // Mulai dari samping kiri
    duration: 1, // Durasi animasi
    ease: "power3.out", // Efek easing yang halus
    scrollTrigger: {
      trigger: ".quality-animate", // Trigger saat elemen ini muncul
      start: "top 80%", // Dimulai saat bagian atas elemen mencapai 80% dari viewport
      end: "top 20%", // Selesai saat bagian atas elemen mencapai 20% dari viewport
    }
  });
</script>

<script>
  // HERO SWIPER SLIDER
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>


<!-- <script>
  (function() {
    var options = {
      whatsapp: "+62895615113534", // Ganti dengan nomor WA kamu
      call_to_action: "Chat dengan kami!", // Teks di tombol
      position: "right", // Posisi: 'right' atau 'left'
    };
    var proto = document.location.protocol,
      host = "getbutton.io",
      url = proto + "//static." + host;
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = url + "/widget-send-button/js/init.js";
    s.onload = function() {
      WhWidgetSendButton.init(host, proto, options);
    };
    document.getElementsByTagName("head")[0].appendChild(s);
  })();
</script> -->