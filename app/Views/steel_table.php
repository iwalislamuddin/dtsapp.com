<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6><?= trans('steel table') ?></h6>
    </div>
    <!-- <img class="card-img-top" style="max-width: 450px; margin:auto;" src="<?= base_url() ?>/images/geo-rectangle.jpg" alt="Rectangle" id="imageGeometry"> -->
    <div class="card-body">

        <div class="mb-2 row pb-2 mx-auto" style="min-width:95%">
            <label for="inputSteelCode" class="col-5 col-form-label"><?= trans('standard') ?></label>
            <select id="inputSteelCode" class="col-7">
            </select>
        </div>
        <div class="mb-2 row pb-2 mx-auto" style="min-width:95%">
            <label for="inputSteelShape" class="col-5 col-form-label"><?= trans('shape') ?></label>
            <select id="inputSteelShape" class="col-7">
            </select>
        </div>


    </div>
</div>



<!-------------------------------------- RESULT BLOCK -------------------------------------->
<div class="card mb-3" style="max-width:600px; margin:auto;">
    <!-- <div class="card-header"><?php // strtoupper(trans('result')) 
                                    ?></div> -->

    <div class="table-responsive" style="width:100%; margin:auto; max-height:600px;">
        <table class="table table-sm table-striped" style="table-layout:auto; min-width:65px;" id="tableSteelProfile">
        </table>
    </div>

    <div class="card-body" id="result">

        <hr>
        <button type="button" class="btn float-right" data-toggle="tooltip" data-placement="left" title="<?= trans('print this page') ?>" onclick="window.print()">
            <img src="<?= base_url() ?>/images/icon_print_blue.png" alt="print" style="max-width:36px">
        </button>

    </div>
</div>

</div>

<?= $this->endSection() ?>