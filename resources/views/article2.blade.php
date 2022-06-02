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
                    <img src="assets/card-2.jpg" alt="img-card" style="max-height: 560px; border-radius: 60px;">
                </div>
            </section>
            <section class="my-5 mx-3">
                <h1 style="font-size: 50px; color: rgba(60, 69, 153, 0.73);">
                    4 Tips Membangun Networking di Coworking Space
                </h1>
                <h2 class="h5 text-secondary font-weight-light">Oleh : confieid</h2>
                <div class="wrap-description mt-4">
                    <p>
                        Salah satu manfaat penting dari coworking space adalah networking. Bayangkan Anda berada di
                        tengah-tengah orang dengan passion yang sama, pengalaman yang berbeda-beda, dan tentunya mereka
                        semua mempunyai peluang kerja sama yang sangat besar. Tetapi sebelum Anda melakukan networking
                        di coworking space, 4 Tips penting ini yang harus Kalian perhatikan!
                    </p>
                    <ol>
                        <li>Berbicara Mengenai Bisnis dan Pengalaman</li>
                        <li>Menawarkan sesuai kebutuhan</li>
                        <li>Share Pengalaman</li>
                        <li>Tunjukkan Passion</li>
                    </ol>
                    <p>
                        Lalu, apa efeknya? Anda akan menjadi lawan bicara yang sangat menarik dan mudah diingat. Mungkin
                        lawan bicara Anda tersebut tidak membutuhkan kerja sama untuk sekarang, tetapi untuk masa depan
                        siapa yang tahu?
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