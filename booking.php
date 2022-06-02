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
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="booking.css" />
    <script>
        tailwind.config = {
          theme: {
            colors: {
                main: '#3C4599',
                sec: '#FAEFB1',
            },
            fontFamily: {
                'poppins': ['Poppins'] 
            },
          }
        }
      </script>
    <title>The Spaces | Co-workingspace</title>
</head>
<body class="sticky font-poppins">
    <div class="bg-main h-24">
        <div class="flex justify-end">
            <div class="flex text-xl py-8 mx-1 font-medium text-[color:white]">
                <a href="home.php" class="px-4">Home</a>
                <a href="#" class="px-4">Our Spaces</a>
                <a href="#" class="px-4">Customer Service</a>
                <a href="#" class="px-4">Articles</a>
            </div>
            <div class="flex text-xl py-5 mx-4 mr-8 text-main">
                <button class="bg-sec px-5 py-1 rounded-3xl">Login</button>
            </div>
        </div>
    </div>
    <div class="headline">
      <a href="home.php"><img src="../Pemrograman-Web-main/pic/booking-back-arrow.png" alt="Back"></a>
    </div>
    <div class="mx-auto">
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
