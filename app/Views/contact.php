<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/wrapper.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/contact.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/contactus.css') ?>">
    <title>TEFA - Hubungi Kami</title>
</head>

<body>
    <?php include 'layouts/navbar.php' ?>
    <div class="wrapper">
        <div class="title-container">
            <h1>HUBUNGI KAMI</h1>
        </div>
        <div class="overlay"></div>
        <div class="gallery">
            <img class="slide active" src="<?= base_url('/img/office.jpg') ?>" alt="">
            <img class="slide active" src="<?= base_url('/img/office2.jpg') ?>" alt="">
            <img class="slide active" src="<?= base_url('/img/college.jpg') ?>" alt="">
        </div>
    </div>
    <div class="container">
        <div class="contactus-container">
            <form action="" method="post">
                <div class="nama-container">
                    <span>Nama:</span>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="subjek-container">
                    <span>Subjek:</span>
                    <input type="text" name="subjek" id="subjek">
                </div>
                <div class="telepon-container">
                    <span>Telepon:</span>
                    <input type="tel" name="telepon" id="telepon">
                </div>
                <div class="pesan-container">
                    <span>Pesan:</span>
                    <textarea name="pesan" id="pesan" rows="5"></textarea>
                </div>
                <div class="submit-button">
                    <button type="submit">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>
    <?php include('layouts/contact.php') ?>
</body>
<footer>
    <script src="<?= base_url('/js/navbar.js') ?>"></script>
    <script src="<?= base_url('/js/wrapper.js') ?>"></script>
</footer>


</html>