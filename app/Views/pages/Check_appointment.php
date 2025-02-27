<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cek Jadwal Appointment Tattoo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 90%;
      width: 100%;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      border: none;
    }

    .btn-primary:hover {
      opacity: 0.9;
    }

    .table th {
      background: #6a11cb !important;
      color: white;
    }

    @media (max-width: 768px) {
      .container {
        padding: 15px;
      }

      h2 {
        font-size: 1.5rem;
      }

      .input-group {
        flex-direction: column;
      }

      .input-group input {
        margin-bottom: 10px;
      }

      .table-responsive {
        overflow-x: auto;
      }
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Cek Jadwal Appointment Tattoo</h2>

    <!-- Form pencarian -->
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Masukkan nama atau ID pemesanan">
      <button class="btn btn-primary" type="button">Cek Jadwal</button>
    </div>
    <div class="input-group mb-4">
      <input type="date" class="form-control" id="tanggalPencarian">
      <button class="btn btn-primary" type="button" onclick="filterByDate()">Cari Berdasarkan Tanggal</button>
    </div>

    <!-- Tabel daftar jadwal -->
    <div class="table-responsive">
      <table class="table table-hover" id="jadwalTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Rizal Liyan</td>
            <td>2025-03-15</td>
            <td>14:00</td>
            <td class="text-success">Dikonfirmasi</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Budi Santoso</td>
            <td>2025-03-16</td>
            <td>10:00</td>
            <td class="text-warning">Menunggu Konfirmasi</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function filterByDate() {
      let inputDate = document.getElementById("tanggalPencarian").value;
      let table = document.getElementById("jadwalTable");
      let rows = table.getElementsByTagName("tr");

      for (let i = 1; i < rows.length; i++) {
        let row = rows[i];
        let cell = row.getElementsByTagName("td")[2];
        if (cell) {
          let rowDate = cell.textContent || cell.innerText;
          if (rowDate === inputDate) {
            row.style.display = "";
          } else {
            row.style.display = "none";
          }
        }
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>