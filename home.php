<?php
include 'navbar.php';
include 'config.php';
?>
<main>
    <article class="container-fluid">
        <section class="mx-3">
            <div class="headlines">
                <h1>ARTICLE</h1>
                <img src="assets/images/img-headlines.jpg" alt="img-headlines">
            </div>
        </section>
        <section class="row align-items-center mx-2 mt-5 mb-4">
            <div class="col-9">
                <h2 class="text-secondary">Artikel The Spaces</h2>
                <h4 class="text-secondary h5 font-weight-light">Dapatkan info terbaru terkait workspace disini!</h4>
            </div>
            <div class="col-3">
                <form action="index.php" method="GET" class="d-flex align-items-center">
                    <button class="btn" type="submit">
                        <img src="assets/images/search.jpg" alt="search-icon" width="25">
                    </button>
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control rounded-pill" placeholder="search you want">
                    </div>
                </form>
            </div>
        </section>
        <section class="row mx-2 mb-4 ">
            <?php

            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $data = mysqli_query($conn, "SELECT * from artikel where judul like '%" . $cari . "%'");
            } else {
                $data = mysqli_query($conn, "SELECT * from artikel");
            }

            if ($data->num_rows > 0) {
                while ($i = mysqli_fetch_array($data)) {
            ?>
                    <div class="col-4 py-3">
                        <div class="card h-100 border-0 bg-light shadow-sm" style="padding: 20px;">
                            <a href="details.php?id_artikel=<?= $i['id_artikel']; ?>" class="stretched-link" style="text-decoration: none;">
                                <img src="data:image/jpeg;base64,<?= base64_encode($i['foto']); ?>" alt="<?= $i['id_artikel']; ?>" style="width: 100%;">
                                <h4 class="h5" style="margin-top: 18px; color: black;"><?= $i['judul']; ?></h4>
                                <span class="text-black-50 font-weight-light">Oleh : <?= $i['penulis']; ?></span>
                            </a>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <section class="d-flex align-items-center" style="height: 400px; margin: auto;">
                    <div class="text-black-50 font-weight-light" style="font-size: 50px;">
                        Artikel Tidak Di Temukan
                    </div>
                </section>

            <?php } ?>
        </section>
    </article>
</main>
<footer>
    <span class="d-flex justify-content-center pb-4 text-black-50">Menampilkan 1 dari 1 Halaman</span>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>