@include ('navbar')
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
<!DOCTYPE html>
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
                            <input type="text" class="form-control rounded-pill" placeholder="search you want"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
            </section>
            <section class="row mx-2 mb-4 ">
                <div class="col-4 py-3">
                    <div class="card h-100 border-0 bg-light shadow-sm" style="padding: 20px;">
                        <a href="article1.html" class="stretched-link" style="text-decoration: none;">
                            <img src="assets/card-1.jpg" alt="article-1" style="width: 100%;">
                            <h4 class="h5" style="margin-top: 18px; color: black;">Tips Memilih Virtual office</h4>
                            <span class="text-black-50 font-weight-light">Oleh : Debby Rahmi</span>
                        </a>
                    </div>
                </div>
                <div class="col-4 py-3">
                    <div class="card h-100 border-0 bg-light shadow-sm" style="padding: 20px;">
                        <a href="article2.html" class="stretched-link" style="text-decoration: none;">
                            <img src="assets/card-2.jpg" alt="article-1" style="width: 100%;">
                            <h4 class="h5" style="margin-top: 18px; color: black;">4 Tips Membangun Networking....</h4>
                            <span class="text-black-50 font-weight-light">Oleh : confieid</span>
                        </a>
                    </div>
                </div>
                <div class="col-4 py-3">
                    <div class="card h-100 border-0 bg-light shadow-sm" style="padding: 20px;">
                        <a href="article3.html" class="stretched-link" style="text-decoration: none;">
                            <img src="assets/card-3.jpg" alt="article-1" style="width: 100%;">
                            <h4 class="h5" style="margin-top: 18px; color: black;">Ini Perbedaan Coworking Space...</h4>
                            <span class="text-black-50 font-weight-light">Oleh : Reyhan Apriathama</span>
                        </a>
                    </div>
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