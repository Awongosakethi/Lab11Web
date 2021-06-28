<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="awong.jpg" title="Awong Osakethi" alt="Awong Osakethi" class="image-circle" width="225"
            style="float: left; border: 2px solid black;">
            <h1>Assalamualaikum</h1>
            <p>Saya Awong Osakethi mahasiswa dari <i>Universitas Pelita Bangsa</i> yang sedang
                mempelajari materi PHP Framework (Codeigniter) dalam mata kuliah <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>