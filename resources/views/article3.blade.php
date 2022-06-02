@include ('navbar')
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="container-fluid bg-blue">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Spaces</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="article.html">Article</a>
                    </li>
                    <li class="nav-item btn-login">
                        <a class="btn" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <article class="container-fluid">
            <section class="row align-items-center mx-3" style="padding-top: 35px;">
                <div class="col-9">
                    <a class="btn" href="article.html">
                        <i class="fa fa-angle-left" style="font-size: 18px; margin-right: 8px;"></i>
                        <span class="text-secondary font-weight-normal" style="font-size: 19px;">
                            Kembali ke Artikel
                        </span>
                    </a>
                </div>
                <div class="col-3">
                    <div class="d-flex align-items-center">
                        <button class="btn">
                            <img src="assets/search.jpg" alt="search-icon" width="25">
                        </button>
                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill" placeholder="search you want"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
            </section>
            <section class="mx-3">
                <div class="headlines">
                    <img src="assets/card-3.jpg" alt="img-card" style="max-height: 560px; border-radius: 60px;">
                </div>
            </section>
            <section class="my-5 mx-3">
                <h1 style="font-size: 50px; color: rgba(60, 69, 153, 0.73);">
                    Ini Perbedaan Coworking Space dan Virtual Office yang Harus Kamu Ketahui!
                </h1>
                <h2 class="h5 text-secondary font-weight-light">Oleh : Reyhan Apriathama</h2>
                <div class="wrap-description mt-4">
                    <p>
                        Kamu bisa melihat beberapa perbandingan coworking space dan virtual office secara lengkap
                        melalui berbagai pendekatan sebagai berikut:
                    </p>
                    <p>
                        <strong>Coworking Space</strong><br>
                        Sebagian besar pebisnis sudah familier dengan istilah yang satu ini.
                        Pasalnya, coworking space adalah sebuah tempat di mana sekelompok pekerja, biasanya bukan
                        berasal dari perusahaan yang sama, berkumpul untuk menyewa fasilitas kantor dalam kurun waktu
                        tertentu.
                        Fasilitas yang tersedia setidaknya berupa meja dan kursi, koneksi internet, ruang pribadi untuk
                        meeting dan fasilitas multimedia.
                    </p>
                    <p>
                        Coworking space juga dapat menyediakan jasa resepsionis yang membantu menerima dan meneruskan
                        telepon atau surat kepada penyewa coworking space. Dalam hal ini, perbedaan coworking space dan
                        virtual office juga biasanya digunakan oleh pekerja lepas atau sekelompok calon pendiri bisnis
                        yang mengutarakan ide dan rencana sampai matang.
                        Kamu juga dapat berkolaborasi dalam suasana yang lebih nyaman dan kondusi
                    </p>
                    <p>
                        <strong>Virtual Office</strong><br>
                        Pilihan kedua selain coworking space adalah virtual office, yang serupa tapi tak sama.
                        Meski virtual office mempunyai fungsi yang mirip dengan coworking space dengan menyediakan
                        fasilitas kantor sangat lengkap, namun ada perbedaan yang jelas pada fungsi dasar.
                    </p>
                    <p>
                        Perbedaan coworking space dan virtual office dalam hal ini ada kaitannya dengan alamat resmi
                        perusahaan.
                        Pasalnya, alamat dan izin perlu dicatat dalam akta pendirian dan perizinan perusahaan. Penentuan
                        alamat merupakan syarat Surat Keterangan Domisili Perusahaan.
                    </p>
                    <p>
                        Hal tersebut diperlukan untuk mengurus perizinan seperti Surat Izin Usaha Perdagangan (SIUP) dan
                        pengurusan Nomor Pokok Wajib Pajak (NPWP).
                        Selain itu, perbedaan coworking space dan virtual office juga berkaitan pada penyewaan ruang
                        fisik yang tidak dilakukan seperti coworking space.
                    </p>
                </div>
            </section>
        </article>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>

</html>