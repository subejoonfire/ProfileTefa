<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('/css/wrapper.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/about.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/contact.css') ?>">
</head>

<body>
    <?php include 'layouts/navbar.php' ?>
    <div class="wrapper">
        <div class="title-container">
            <h1>TENTANG</h1>
        </div>
        <div class="overlay"></div>
        <div class="gallery">
            <img class="slide active" src="<?= base_url('/img/office.jpg') ?>" alt="">
            <img class="slide active" src="<?= base_url('/img/office2.jpg') ?>" alt="">
            <img class="slide active" src="<?= base_url('/img/college.jpg') ?>" alt="">
        </div>
    </div>
    <div class="container">
        <div class="visimisi-container">
            <div class="visimisi-header-container">
                <h1>PROFIL</h1>
            </div>
            <div class="visimisi-body-container">
                <div class="profil-container">
                    <div class="profil-header-container">
                        <h1>Profil TEFA</h1>
                    </div>
                    <div class="profil-body-container">
                        <p>TEFA merupakan perusahaan teknologi yang berdiri pada Maret 2022. Perusahaan ini bergerak di bidang jasa pembuatan perangkat lunak, instalasi jaringan komputer, pembuatan perangkat IoT, dan bimbingan belajar bidang TI.</p>
                    </div>
                </div>
                <div class="visimisi-desc-container">
                    <div class="visi-container">
                        <div class="visi-header-container">
                            <h1>Visi</h1>
                        </div>
                        <div class="visi-body-container">
                            <p>Menjadi perusahaan pengembang teknologi terdepan yang dapat bersaing di tingkat global dan memimpin era Revolusi Teknologi dengan inovasi dan solusi cerdas.</p>
                        </div>
                    </div>
                    <div class="misi-container">
                        <div class="misi-header-container">
                            <h1>Misi</h1>
                        </div>
                        <div class="misi-body-container">
                            <p>1. Mengembangkan produk dan layanan teknologi yang inovatif dan efisien.</p>
                            <p>2. Memenuhi dan melampaui ekspektasi pelanggan dengan solusi yang dapat diandalkan.</p>
                            <p>3. Mendorong pertumbuhan dan kemajuan teknologi untuk meningkatkan kualitas hidup masyarakat.</p>
                            <p>4. Memperluas jangkauan pasar teknologi di tingkat global.</p>
                            <p>5. Mengintegrasikan teknologi terkini dalam setiap aspek kehidupan.</p>
                            <p>6. Menyediakan platform untuk pembelajaran dan pengembangan keahlian TI.</p>
                            <p>7. Memajukan inovasi dalam pembuatan perangkat IoT dan solusi jaringan komputer.</p>
                            <p>8. Membangun kemitraan strategis dengan perusahaan teknologi lain untuk memperkuat ekosistem teknologi.</p>
                            <p>9. Menginspirasi generasi muda untuk berkarir di bidang teknologi melalui program bimbingan dan pendidikan.</p>
                            <p>10. Menjadi pemimpin dalam etika dan tanggung jawab sosial perusahaan di industri teknologi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'layouts/contact.php' ?>
    </div>
    </div>
</body>
<footer>
    <script src="<?= base_url('/js/navbar.js') ?>"></script>
    <script src="<?= base_url('/js/wrapper.js') ?>"></script>
</footer>

</html>