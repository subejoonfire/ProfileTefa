<html lang="en">

<head>
    <script src="<?= base_url('/js/navbar.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('/css/wrapper.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/home.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/contact.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php include 'layouts/navbar.php' ?>
    <div class="wrapper">
        <div class="title-container">
            <h1>TEFA POLITALA</h1>
        </div>
        <div class="overlay"></div>
        <div class="gallery">
            <img class="slide active" src="<?= base_url('/img/office.jpg') ?>" alt="">
            <img class="slide active" src="<?= base_url('/img/office2.jpg') ?>" alt="">
            <img class="slide active" src="<?= base_url('/img/college.jpg') ?>" alt="">
        </div>
    </div>
    <div class="container">
        <div class="slogans-container">
            <div class="slogans-body">
                <div class="slogans-description-container">
                    <div class="slogans-header">
                        <h1>Mitra Unggul Anda dalam Dunia Teknologi</h1>
                    </div>
                    <p>TEFA POLITALA berkomitmen menyediakan layanan terbaik dengan solusi inovatif dan efisien untuk memenuhi kebutuhan Anda. Bersama kami, Anda akan menemukan kemitraan yang tangguh untuk kesuksesan teknologi Anda.</p>
                </div>
                <div class="slogans-card">
                    <img src="<?= base_url('/img/Tefa/office.jpg') ?>" alt="">
                </div>
            </div>
        </div>
        <div class="services-slide-container">
            <div class="services-container">
                <div class="card-header">
                    <h1>LAYANAN</h1>
                </div>
                <div class="services-cards-container">
                    <div class="card-container">
                        <div class="card-header">
                            <h1>Pembuatan Software</h1>
                        </div>
                        <div class="card-body">
                            <p>Kami berkomitmen untuk mengembangkan solusi software yang inovatif untuk memajukan bisnis dan kehidupan masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-image-container">
                <div class="services-overlay"></div>
                <img src="<?= base_url('/img/office3.png') ?>" alt="">
            </div>
        </div>
        <div class="clients-container">
            <div class="clients-header">
                <h1>KLIEN KAMI</h1>
            </div>
            <div class="clients-body">
                <div class="clients-logo-container">
                    <img src="<?= base_url('/img/clients-logo/Tarkiz.png') ?>" style="width: 250px;" alt="">
                    <img src="<?= base_url('/img/clients-logo/BekantanJantan.png') ?>" style="width: 250px;" alt="">
                </div>
            </div>
        </div>
        <?php include 'layouts/contact.php' ?>
    </div>
</body>
<footer>
    <script src="<?= base_url('/js/wrapper.js') ?>"></script>
</footer>

</html>