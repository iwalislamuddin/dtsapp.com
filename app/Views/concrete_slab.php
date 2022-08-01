<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6><?= trans('concrete slab') ?></h6>
    </div>
    <!-- <img class="card-img-top" style="max-width: 450px; margin:auto;" src="<?= base_url() ?>/images/geo-rectangle.jpg" alt="Rectangle" id="imageGeometry"> -->

    <div class="card-body">

        <div class="mb-2 row pb-2 mx-auto" style="min-width:95%">
            <div class="text-center" style="width:100%">Coming Soon</div>
        </div>

        <!-------------------------------------- RESULT BLOCK -------------------------------------->
        <div class="table-responsive-sm" style="width:97%; margin:auto;">



            <hr>
            <button type="button" class="btn btn-block text-right" data-toggle="tooltip" data-placement="left" title="<?= trans('print this page') ?>" onclick="window.print()">
                <img src="<?= base_url() ?>/images/icon_print_blue.png" alt="print" style="max-width:36px">
            </button>

        </div>







        <?= $this->endSection() ?>