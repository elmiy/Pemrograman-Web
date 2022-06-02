<?php

$conn = mysqli_connect("localhost","root","011002","the_spaces");
if( isset($_POST["submit"])) {
  //ambil data
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $no_telp = $_POST["no_telp"];
  $durasi = $_POST["durasi"];
  $tanggal = $_POST["tanggal"];
  $jum_orang = $_POST["jum_orang"];
  $jenis_kegiatan = $_POST["jenis_kegiatan"];
  
  //memasukkan data
  $query = "INSERT INTO booking
            VALUES
            ('$nama','$email','$no_telp','$durasi','$tanggal','$jum_orang','$jenis_kegiatan')
            ";
  mysqli_query($conn, $query);

  //cek keberhasilan
  if( mysqli_affected_rows($conn)>0) {
   echo "
   <script>
    alert('Data berhasil ditambahkan!');
    </script>
    ";
  }
  }
  include('navbar.php');
?>

<link rel="stylesheet" href="booking.css" />
<body class="sticky font-poppins">
    <div class="headline">
      <a href="home.php"><img src="../Pemrograman-Web-main/pic/booking-back-arrow.png" alt="Back"></a>
    </div>
    <div class="mx-auto pt-24">
      <form action="" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="name" class="form-control" name="nama" id="nama" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" name="no_telp" id="no_telp" required>
        </div>
        <div class="mb-3">
          <label for="id" class="form-label">Tipe Space</label><br>
          <input type="radio" id="personal" name="id_space" value=1>
          <label for="personal">Personal</label><br>
          <input type="radio" id="tim" name="id_space" value=2>
          <label for="tim">Bersama Tim</label><br>
          <input type="radio" id="rame" name="id_space" value=3>
          <label for="rame">Rame-rame</label>
        </div>
        <div class="mb-3">
          <label for="id" class="form-label">Tipe Durasi</label><br>
          <input type="radio" id="jam" name="tipe_durasi" value="Jam">
          <label for="jam">Jam</label><br>
          <input type="radio" id="hari" name="tipe_durasi" value="Hari">
          <label for="hari">Hari</label><br>
          <input type="radio" id="minggu" name="tipe_durasi" value="Minggu">
          <label for="minggu">Minggu</label>
        </div>
        <div class="mb-3">
          <label for="durasi" class="form-label">Durasi (Beserta Jam Booking)</label>
          <input type="text" class="form-control" name="durasi" id="durasi" required>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal" required>
        </div>
        <div class="mb-3">
          <label for="jum_orang" class="form-label">Jumlah Orang</label>
          <input type="number" class="form-control" name="jum_orang" id="jum_orang" required>
        </div>
        <div class="mb-3">
          <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
          <input type="text" class="form-control" name="jenis_kegiatan" id="jenis_kegiatan" required>
        </div>
        <a href="pembayaran.php"><button class="submit-btn" name="submit" style="margin-top:20px">Submit</button></a>
      </form>
    </div>
</body>
</html>
