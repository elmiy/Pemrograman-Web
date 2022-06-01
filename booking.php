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
            <input type="name" class="form-control" id="nama" require>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" require>
          </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" id="no_telp" require>
        </div>
        <div class="mb-3">
          <label for="durasi" class="form-label">Durasi</label>
          <input type="text" class="form-control" id="durasi" require>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" require>
        </div>
        <div class="mb-3">
          <label for="jum_orang" class="form-label">Jumlah Orang</label>
          <input type="number" class="form-control" id="jum_orang" require>
        </div>
        <div class="mb-3">
          <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
          <input type="text" class="form-control" id="jenis_kegiatan" require>
        </div>
        <a href="home.php"><button class="submit-btn" name="submit" style="margin-top:20px">Submit</button></a>
      </form>
    </div>
</body>
</html>
