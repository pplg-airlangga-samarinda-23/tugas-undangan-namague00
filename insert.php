<?php
    include'koneksi.php';
        if (isset($_POST)) {
            $nama = @$_POST["nama"];
            $ucapan = @$_POST['ucapan'];
            $keterangan = @$_POST['keterangan'];

            if ($nama != "" && $ucapan != "" && $keterangan != "") {
                var_dump($_POST);
                $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";
                $connection -> query($sql);

        }
        header("Location: http://localhost/TUGAS-UNDANGAN-NAMAGUE00/index.php");
        }
?>