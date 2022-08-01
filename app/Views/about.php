<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6>About Us</h6>
    </div>
    <div class="card-body">

        <p>
            <a href="<?= base_url() ?>">DTS App</a> is a web application which provides tools to perform calculations for various simple civil engineering problems.
            It covers most of the disciplines within civil engineering, such as Statics (Structural Mechanics), Steel & Concrete Structure Design, Foundation Engineering,
            Geotechnical Engineering, Construction Engineering, Hydraulics, etc.
        </p>

        <div class="text-center mb-4">
            <img src="<?= base_url() ?>/images/dtsapplogotext_grayscale.png" class="border-0" style="width:40%; max-width:160px;" alt="DTS App">
        </div>

        <p>
            DTS App is developed by DTS Engineering - a civil & structure engineering design consultant firm - which is located in Tangerang Selatan,
            Banten, Indonesia.

        </p>

    </div>
</div>

<?= $this->endSection() ?>