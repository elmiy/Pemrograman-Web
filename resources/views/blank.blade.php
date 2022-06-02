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
            <section class="mx-3">
                <div class="headlines">
                    <h1>ARTICLE</h1>
                    <img src="assets/img-headlines.jpg" alt="img-headlines">
                </div>
            </section>
            <section class="row align-items-center mx-2 mt-5 mb-4">
                <div class="col-9">
                    <h2 class="text-secondary">Artikel The Spaces</h2>
                    <h4 class="text-secondary h5 font-weight-light">Dapatkan info terbaru terkait workspace disini!</h4>
                </div>
                <div class="col-3">
                    <div class="d-flex align-items-center">
                        <button class="btn">
                            <img src="assets/search.jpg" alt="search-icon" width="25">
                        </button>
                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill" placeholder="Workspace Jakarta"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
            </section>
            <section class="d-flex justify-content-center align-items-center mb-4" style="height: 400px;">
                <div class="text-black-50 font-weight-light" style="font-size: 50px;">
                    Artikel Tidak di Temukan
                </div>
            </section>
        </article>
    </main>
    <footer>
        <span class="d-flex justify-content-center pb-4 text-black-50">Menampilkan 1 dari 1 Halaman</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>

</html>