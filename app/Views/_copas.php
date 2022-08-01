<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6>About Us</h6>
    </div>
    <div class="card-body">

        <p>
            <a href="<?= base_url() ?>">DTS App</a> is a web application which provides simple calculation tools for civil engineering problems.
            It contains
        </p>

        <p>
            DTS App is developed by DTS Engineering - a civil & structure engineering design consultant firm - which is located in Tangerang Selatan,
            Banten, Indonesia.

        </p>

    </div>
</div>

<?= $this->endSection() ?>