<?= $this->include('layouts/Header') ?>





<section id="appointment" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Book Your Tattoo Appointment</h2>
    <p class="text-center mb-4">Fill out the form below to schedule your tattoo session.</p>


    <div class=" d-flex mx-auto justify-content-center">
      <div class="alert alert-primary col-md-7 " role="alert">
        Silahkan untuk melakukan <a href="<?= base_url('check_schedule') ?>" class="alert-link">Cek Jadwal</a>. terlebih dahulu.
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="<?= site_url('/book-appointment') ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Preferred Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>

          <div class="mb-3">
            <label for="design" class="form-label">Tattoo Design Description</label>
            <textarea class="form-control" id="design" name="design" rows="3" placeholder="Describe your tattoo idea"></textarea>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Upload Tattoo Reference Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
          </div>


          <div class="mb-3">
            <label for="size" class="form-label">Tattoo Size</label>
            <select class="form-select" id="size" name="size" required>
              <option value="" selected disabled>Select size</option>
              <option value="small">Small (5cm - 10cm)</option>
              <option value="medium">Medium (10cm - 20cm)</option>
              <option value="large">Large (20cm+)</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="placement" class="form-label">Tattoo Placement</label>
            <input type="text" class="form-control" id="placement" name="placement" placeholder="e.g., Forearm, Back, Chest" required>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-dark">Submit Appointment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?= $this->include('layouts/Footer') ?>


<script>
  document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah submit default untuk sementara

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let date = document.getElementById("date").value;
    let design = document.getElementById("design").value || "Tidak ada deskripsi";
    let size = document.getElementById("size").value;
    let placement = document.getElementById("placement").value;

    // Format pesan WhatsApp
    let message = `Halo, saya ingin membuat janji untuk tattoo:\n\n` +
      `📝 Nama: ${name}\n` +
      `📧 Email: ${email}\n` +
      `📞 Nomor HP: ${phone}\n` +
      `📅 Tanggal: ${date}\n` +
      `🎨 Desain: ${design}\n` +
      `📏 Ukuran: ${size}\n` +
      `📍 Penempatan: ${placement}`;

    let phoneNumber = "62895615113534"; // Ganti dengan nomor WhatsApp tujuan (format internasional tanpa +)
    let waLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

    // Redirect ke WhatsApp
    window.open(waLink, "_blank");

    // Setelah WhatsApp terbuka, submit form seperti biasa
    setTimeout(() => {
      event.target.submit();
    }, 1000);
  });
</script>