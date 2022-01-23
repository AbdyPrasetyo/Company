<?php session_start();
if (!isset($_SESSION["user"])) {
    header("Location: pages-login.php");
    exit;
}
?>

<?php include('Template_Backend/header.php'); ?>
<?php include('Template_Backend/sidebar.php'); ?>


<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Form</h5>
                        <div class="col-8">

                            <form action="iner.php" class="row g-1 d-flex justify-content-center" method="POST">
                                <div class="col-12">
                                    <label class="form-label"> Jumlah Persamaan yang digunakan : <br></label>
                                    <input type="number" name="jumlah_persamaan" class="form-control"><br>
                                    <button type="submit" class="btn btn-primary w-10">Submit</button>
                                    <hr>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['jumlah_persamaan'])) {
                                if (!empty($_POST['jumlah_persamaan'])) {

                                    $jumlah_persamaan = $_POST['jumlah_persamaan'];

                                    createForm($jumlah_persamaan);

                                    $_SESSION['jumlah_persamaan'] = $jumlah_persamaan;
                                } else {
                                    echo 'mohon diisi';
                                }
                            }

                            function createForm($jumlah_persamaan)
                            {
                                echo '<div class="container"><h2 align="center"><b>Masukan Persamaan yang mau dihitung menggunakan Metode eliminasi Gauss Jordan</b></h2><form action="action.php" class="row g-8 d-flex justify-content-center" method="POST">';
                                for ($i = 0; $i < $jumlah_persamaan; $i++) {
                                    echo '<h4 align="center">Persamaan ' . $i . ': <br></h4>';
                                    for ($j = 0; $j < $jumlah_persamaan + 1; $j++) {
                                        if ($j < $jumlah_persamaan) {
                                            echo '<h5 align="center">X<sub>' . $j . '</sub></h5><input type="number" class="form-control" placeholder="input here...." name="var' . $i . $j . '">';
                                        } else {
                                            echo '<h5 align="center"> = </h5>';
                                            echo '<input type="number"  class="form-control" placeholder="input here......" name="var' . $i . $j . '">';
                                        }
                                    }
                                    echo '<br><hr>';
                                }

                                echo '<div class="text-center">
                                            <button  type="submit" class="btn btn-primary"> Execute </button>
                                                <a href="iner.php" class="btn btn-dark">Delete form</a>
                                        </div>
                                        </form>
                                        </div>';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include('Template_Backend/footer.php'); ?>
