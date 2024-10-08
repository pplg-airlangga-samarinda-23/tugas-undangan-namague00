<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grey+Qo&family=New+Amsterdam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>meresahkan</title>
</head>

<body>
    <header></header>
    <div class="kocak">
        <div class="lucu"><img
                src="https://www.weddingku.id/wp-content/themes/weddingku/images/separator_under_slider.png"
                alt="------"></div>
        <h1 class="logo">Cowo & Cewe</h1>
        <div class="tes">
            <img src="https://www.weddingku.id/wp-content/uploads/2018/07/adslide1-1580x1054.jpg" alt=""
                title="adslide1" draggable="false">

            <div class="musik">
                <audio controls autoplay loop src="musik.mp3"></audio>
            </div>
        </div>
    </div>
    <div class="kata">
        <div class="lucu2"><img
                src="https://www.weddingku.id/wp-content/themes/weddingku/images/separator_under_slider.png"
                alt="------">
        </div>
        <p>Minggu, 18 Agustus 2024</p>
        <p>12.15 Wit-Selesai</p>
        <p>Alamat jalan pahlawan, samarinda</p>
    </div>

    <div class="keluarga">
        <h2>turut mengundang</h2>
        <li>keluarga mempelai pria</li>
        <li>keluarga mempelai wanita</li>


    </div>

    <div class="kimak">
        <iframe width="500" class="map" height="350"
            src="https://www.openstreetmap.org/export/embed.html?bbox=117.14464187622072%2C-0.4860426304653815%2C117.15154051780702%2C-0.4828884654224011&amp;layer=mapnik"
            style="border: 1px solid black"></iframe><br /><small>
    </div>
    <div class="kk" style="display: flex">
        <a class="button" href="https://www.openstreetmap.org/#map=18/-0.48447/117.14809">teken dulu cess</a>
    </div>
    <div class="carousel">
        <div class="carousel-inner">
            <img src="gambar1.jpg" alt="image 1" class="active">
            <img src="gambar2.jpeg" alt="image 2">
            <img src="gambar3.jpeg" alt="image 3">
        </div>
        <button class="prev">Prev</button>
        <button class="next">Next</button>
    </div>
    <div class="ucapan">
        <p>berikan ucapan dan doa</p>
        <form action="insert.php" method="POST">
            <div>
                <input type="text" name="nama" placeholder="nama" required> <br>
            </div>
            <div>
                <textarea name="ucapan" cols="30" row="4" placeholder="ucapan" required></textarea>
            </div>
            <div>
                <select name="keterangan" required>
                    <option value="" selected disabled hidden>isi woii!!</option>
                    <option value="1">ya</option>
                    <option value="2">skip dulu</option>
                    <option value="4">mungkin</option>
                </select> <br>
            </div>
            <button type="submit">KIRIM</button>
        </form>

        <?php
        include 'koneksi.php';
        $sql2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $connection->query($sql2);
        ?>
        <div style="height:100px; width: 200px; overflow:auto; margin:auto;">
            <?php
            while ($baris = $hasil->fetch_row()) {
            ?>
                <div style="border-style:solid; border-color:grey;margin:10px;">
                    <p style="font-weight:bold"><?= $baris[1] ?></p>
                    <p><?= $baris[2] ?></p>
                    <p><?= $baris[3] ?> </p>
                </div>

            <?php
            }
            $hasil->free_result();
            ?>
        </div>
    </div>
</body>

</html>