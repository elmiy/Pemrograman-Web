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
                    <img src="assets/card-1.jpg" alt="img-card" style="max-height: 560px; border-radius: 60px;">
                </div>
            </section>
            <section class="my-5 mx-3">
                <h1 style="font-size: 50px; color: rgba(60, 69, 153, 0.73);">
                    Tips Memilih Virtual Office
                </h1>
                <h2 class="h5 text-secondary font-weight-light">Oleh : Debby Rahmi</h2>
                <div class="wrap-description mt-4">
                    <p>
                        Sedang mencari Virtual Office? atau butuh lokasi strategis di zona komersial untuk legalitas
                        perusahaan kamu?
                    </p>
                    <p>
                        Sudah cari di internet dan makin bingung karena banyaknya penyedia virtual office?
                    </p>
                    <p>
                        Tenang aja, kami punya enam tips nih untuk kamu yang sedang mencari Virtual Office. Yuk simak
                        mengenai pemilihan Virtual Office ini!
                    </p>
                    <ol>
                        <li>Lokasi Strategis</li>
                        <li>Fasilitas Sesuai Kebutuhanmu</li>
                        <li>Harga Sesuai Budget dan Fasilitas yang Ditawarkan</li>
                        <li>Review Penyewa Virtual Office</li>
                        <li>Virtual Office Berstatus PKP</li>
                    </ol>
                    <p>
                        Semoga tips yang kami berikan dapat membantu kamu mencari Virtual Office yang sesuai dengan
                        kebutuhan kamu/perusahaanmu, dari segi lokasi, fasilitas, harga, dan pelayanan lainnya.
                    </p>
                    <p>
                        The Spaces juga menyediakan layanan Virtual Office dengan harga terjangkau, fasilitas lengkap,
                        yang dapat mendukung operasional bisnis kamu! Untuk lebih lengkapnya, jangan lupa pantau terus
                        laman kami!
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