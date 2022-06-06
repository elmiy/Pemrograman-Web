<?php

include 'config.php';
include 'navbar.php';

if (isset($_GET['id_artikel'])) {
    $id_artikel = $_GET['id_artikel'];
} else {
    die("Error, No ID Selected");
}

$query = mysqli_query($conn, "SELECT * FROM artikel where id_artikel='$id_artikel'");
$data = mysqli_fetch_array($query);
?>
<main>
    <article class="container-fluid">
        <section class="row align-items-center mx-3" style="padding-top: 35px;">
            <div class="col-12">
                <a class="btn" href="index.php">
                    <i class="fa fa-angle-left" style="font-size: 18px; margin-right: 8px;"></i>
                    <span class="text-secondary font-weight-normal" style="font-size: 19px;">
                        Kembali ke Artikel
                    </span>
                </a>
            </div>
        </section>
        <section class="mx-3">
            <div class="headlines">
                <img src="data:image/jpeg;base64,<?= base64_encode($data['foto']); ?>" alt="img-details-<?= $data['id_artikel']; ?>" style="max-height: 560px; border-radius: 60px;">
            </div>
        </section>
        <section class="my-5 mx-3">
            <h1 style="font-size: 50px; color: rgba(60, 69, 153, 0.73);">
                <?= $data['judul']; ?>
            </h1>
            <h2 class="h5 text-secondary font-weight-light">Oleh : <?= $data['penulis']; ?></h2>
            <div class="wrap-description mt-4">
                <p style="line-height: 40px;">
                    <?= $data['isi_artikel']; ?>
                </p>
            </div>
        </section>
        <section class="mx-3">
            <h2 class="h3 text-secondary font-weight-light">Artikel Lainnya</h2>
            <div class="row mb-4 ">
                <?php
                $item = mysqli_query($conn, "SELECT * from artikel LIMIT 3");

                if ($item->num_rows > 0) {
                    while ($i = mysqli_fetch_array($item)) {
                ?>
                        <div class="col-4 py-3">
                            <div class="card h-100 border-0 bg-light shadow-sm" style="padding: 20px;">
                                <a href="details.php?id_artikel=<?= $i['id_artikel']; ?>" class="stretched-link" style="text-decoration: none;">
                                    <img src="assets/images/card-2.jpg" alt="<?= $i['id_artikel']; ?>" style="width: 100%;">
                                    <h4 class="h5" style="margin-top: 18px; color: black;"><?= $i['judul']; ?></h4>
                                    <span class="text-black-50 font-weight-light">Oleh : <?= $i['penulis']; ?></span>
                                </a>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <section class="d-flex align-items-center" style="height: 400px; margin: auto;">
                        <div class="text-black-50 font-weight-light" style="font-size: 50px;">
                            Artikel Tidak di Temukan
                        </div>
                    </section>
                <?php } ?>
            </div>
        </section>
    </article>
</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>