<?php session_start();
if (!isset($_SESSION["user"])) {
    header("Location: pages-login.php");
    exit;
}
?>
<?php include('Template_Backend/header.php'); ?>
<?php include('Template_Backend/sidebar.php'); ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gauss Jordan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Gauss Jordan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="card ">
            <div class="filter">

                <div class="card-body">
                    <h1>
                        Hasil dalam bentuk matriks</h1>
                    <?php

                    $kof = array(array());

                    if (isset($_SESSION['jumlah_persamaan'])) {
                        $jumlah_persamaan = $_SESSION['jumlah_persamaan'];
                        buatArray($jumlah_persamaan);
                        echo '<h3>Tampilan Matrik Pertama</h3>';
                        tampilkanMatrik($kof);
                        ubah($jumlah_persamaan);
                        kesimpulan($jumlah_persamaan);
                    }

                    function kesimpulan($jumlah_persamaan)
                    {
                        global $kof;
                         echo '<h2><center> Jumlah Proses Produksi:</h2>';
                        for ($i = 0; $i < $jumlah_persamaan; $i++) {
                                $panjang = $i + 1;
                                echo'<h4><center> Jumlah Proses Produksi (' . $panjang . ') Sebanyak = ';

                                for ($j = 0; $j < $jumlah_persamaan + 1; $j++) {
                                    if ($j == $jumlah_persamaan) {
                                        $jumlah = $kof[$i][$j];
                                            echo '' . $jumlah . ' kali produksi dari sisa kedelay </h2>';
                                     }
                                }
                             }
                        }
                        echo '<h2> Note. </h2>';
                        echo '<h4><ol><li>Proses Produksi 1 untuk tempe biasa</li>
                                      <li>Proses Produksi 2 untuk tempe gambus</li>
                                      <li>Proses Produksi keterangan selanjutnya menyesuaikan kebutuhan anda, karena disini jumlah persamaan yang kami analisis hanya 2.</li>
                                            </h4>';


                    function buatArray($jumlah_persamaan)
                    {
                        global $kof;
                        for ($i = 0; $i < $jumlah_persamaan; $i++) {
                            for ($j = 0; $j < $jumlah_persamaan + 1; $j++) {
                                if (isset($_POST['var' . $i . $j])) {
                                    $kof[$i][$j] = $_POST['var' . $i . $j];
                                }
                            }
                        }
                    }

                    function tampilkanMatrik($kof)
                    {
                        echo '<div class="table-responsive"><table class="table table-bordered table-striped justify-content-center">';
                        $rows = count($kof);

                        for ($i = 0; $i < $rows; $i++) {
                            $cols = count($kof[$i]);
                            echo '<tr>';
                            for ($j = 0; $j < $cols; $j++) {
                                echo '<td class="bg-warning">';
                                echo $kof[$i][$j] . '   ';
                                echo '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table></div>';
                        echo '<hr>';
                    }

                    function ubah($jumlah_persamaan)
                    {
                        global $kof;
                        for ($i = 0; $i < $jumlah_persamaan; $i++) {
                            $persamaan_pivot = $i + 1;
                            echo 'Persamaan ' . $persamaan_pivot . ' menjadi pivot dan ';
                            $pivot = $kof[$i][$i];
                            for ($j = 0; $j < $jumlah_persamaan + 1; $j++) {
                                $kof[$i][$j] = $kof[$i][$j] / $pivot;
                            }

                            for ($k = 0; $k < $jumlah_persamaan; $k++) {
                                if ($k != $i) {
                                    $pivot = $kof[$k][$i];
                                    for ($l = 0; $l < $jumlah_persamaan + 1; $l++) {
                                        $kof[$k][$l] = $kof[$k][$l] - $pivot * $kof[$i][$l];
                                    }
                                }
                                $persamaan_ubah = $k + 1;
                                echo 'Persamaan ' . $persamaan_ubah . ' telah dirubah';
                                tampilkanMatrik($kof);
                            }
                        }
                    }

                    ?>
                    <br>
                    <a href="iner.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('Template_Backend/footer.php'); ?>
