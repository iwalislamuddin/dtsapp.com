<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- persiapan buat iklan -->
<!-- div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h3>Steel Structure Design</h3>
        <h4>Section Capacity</h4>
        <p>
            <strong>
                As per AISC 360-16 / SNI 1726-2020
            </strong>
        </p>
    </div>
-->

<?php
if (isset($menu)) :
    foreach ($menu as $val) :
?>
        <h5><?= $val["title"] ?></h5>
        <div class="row">
            <?php foreach ($val["submenu"] as $submenu) : ?>
                <div class="col-4 col-lg-2 mb-4">
                    <div class="card bg-light h-100">
                        <img src="<?= base_url() ?>/images/<?= $submenu["link"] ?>.png" class="card-img-top" alt="<?= $submenu["title"] ?>">
                        <div class="card-body p-1 text-center">
                            <a class="text-dark stretched-link" href="<?= $submenu["link"] ?>"><?= $submenu["title"] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
<?php
    endforeach;
endif;
?>


<?= $this->endSection() ?>