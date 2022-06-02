@include('navbar')
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/booking.css') !!}">
<body class="sticky font-poppins">
    <div class="headline">
      <a href="booking.php"> <button class="pt-1">    
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
      </button></a>
    </div>
    <div class="mx-auto pt-7">
      <form action="/trans" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
          <label for="spaces" class="form-label">Tipe Spaces</label>
          1:Personal 2:Bersama Tim 3:Rame-rame
          <input type="number" class="form-control" name="id_spaces" require="required"
        </div>
          <div class="mb-3 pt-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="name" class="form-control" name="nama" require="required">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" require="required">
          </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" name="no_telp" require="required">
        </div>
        <div class="mb-3">
        <label for="spaces" class="form-label">Tipe Durasi</label>
          Jam Hari Minggu
          <input type="text" class="form-control" name="tipe_durasi" require="required"
        </div>
        <div class="mb-3 pt-2">
          <label for="durasi" class="form-label">Durasi</label>
          <input type="text" class="form-control" name="durasi" require>
        </div>
        <div class="mb-3">
          <label for="jum_orang" class="form-label">Tanggal</label>
          <input type="text" class="form-control" name="tanggal" require>
        </div>
        <div class="mb-3">
          <label for="jum_orang" class="form-label">Jumlah Orang</label>
          <input type="number" class="form-control" name="jumlah_orang" require>
        </div>
        <div class="mb-3">
          <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
          <input type="text" class="form-control" name="jenis_kegiatan" require>
        </div>
        <a href="payment"><button class="submit-btn" name="submit" style="margin-top:20px">Submit</button></a>
      </form>
    </div>
</body>
</html>
