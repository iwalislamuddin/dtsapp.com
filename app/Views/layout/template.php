<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $desc ?>">
    <meta name="keywords" content="civil engineering calculator, beam formula, beam calculator, structural design, static mechanics, civil engineering online software, civil engineering online, civil engineering online application, web application for civil engineering, structural engineering software, structural engineering application, structural engineering online, geotechnical engineering">
    <meta name="theme-color" content="#000000">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="base_url()/style/bootstrap/bootstrap.min.css"> -->

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/style/custom.css">

    <!-- favico -->
    <link rel="icon" href="<?= base_url() ?>/images/dtsicon64.png">

    <!-- PWA -->
    <link rel="manifest" href="<?= base_url() ?>/js/manifest.webmanifest">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M4NVXBMCHR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-M4NVXBMCHR');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KNHBJDS');
    </script>
    <!-- End Google Tag Manager -->

    <title><?= $title ?></title>

    <script>
        const baseurl = '<?= base_url() ?>';
        var siteLang = '<?= $_SESSION['site_lang'] ?>';
    </script>
</head>

<body class="d-flex flex-column h-100">

    <header style="min-height:56px; margin-bottom:15px">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>/images/dtsicon32.png" class="img-fluid" alt="DTS App logo" style="width:20px;">
                    <span style="font-weight:800">
                        <span style="color:#f28f3b">DTS</span><span style="color:#a4c2a5">App</span>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="btn btn-sm btn-dark" href="<?= base_url('about') ?>"><?= trans('about') ?></a></li>
                        <li class="nav-item"><a class="btn btn-sm btn-dark" href="<?= base_url('disclaimer') ?>"><?= trans('disclaimer') ?></a></li>
                        <li class="nav-item"><a class="btn btn-sm btn-dark" href="<?= base_url('policy') ?>"><?= trans('privacy policy') ?></a></li>
                        <li class="nav-item"><a class="btn btn-sm btn-dark" href="<?= base_url('contact') ?>"><?= trans('contact') ?></a></li>

                    </ul>
                    <!-- SETTING LANGUAGE -->
                    <form class="form-inline">
                        <hr>
                        <div class="btn-group dropleft">
                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                <?php if ($_SESSION['site_lang'] === 'en') : ?>
                                    <img src="<?= base_url() ?>/images/flag_en.png" alt="English" style="width:24px">
                                <?php else : ?>
                                    <img src="<?= base_url() ?>/images/flag_id.png" alt="English" style="width:24px">
                                <?php endif; ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width:auto">
                                <a href="<?= base_url('switchlang/en') ?>" class="btn-block px-2">
                                    <img src="<?= base_url() ?>/images/flag_en.png" alt="English" style="width:24px">
                                </a>
                                <a href="<?= base_url('switchlang/id') ?>" class="btn-block px-2">
                                    <img src="<?= base_url() ?>/images/flag_id.png" alt="English" style="width:24px">
                                </a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </nav>
    </header>
    <!-- navbar -->

    <!-- MAIN CONTENT -->
    <div class="container-md">
        <!-- Content --><?= $this->renderSection('content') ?>
    </div>

    <!-- FOOTER -->
    <footer class="footer mt-auto pt-3">
        <div class="container-fluid px-3 py-1" style="max-width:600px">
            <div class="text-center small">Version 0.2 &copy;2022 by dtsengineering.co.id</div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script src="script/konva.min.js"></script>

    <!-- Application Scripts -->
    <script src="script/app/function.js"></script>
    <?php if (isset($script_files)) : ?>
        <?php foreach ($script_files as $files) : ?>
            <script src="script/app/<?= $files ?>.js"></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>

</html>